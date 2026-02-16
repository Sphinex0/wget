use crate::cli::DownloadConfig;
use crate::mirror::{convert_links, extract_urls};
use crate::progress::{create_progress_bar, ProgressReporter};
use crate::rate_limiter::parse_rate_limit;
use super::utils::determine_output_path;
use futures::StreamExt;
use reqwest::Client;
use std::collections::HashSet;
use std::time::Duration;
use tokio::fs::{write, OpenOptions};
use tokio::io::AsyncWriteExt;
use url::Url;

/// Processes the download of a single URL.
///
/// Handles fetching via HTTP/HTTPS or FTP, file writing, rate limiting, progress reporting,
/// and HTML post-processing for mirroring (link extraction and conversion).
pub async fn process_single_download(
    config: &DownloadConfig,
    url: &str,
) -> Result<HashSet<(String, String)>, String> {
    let parsed_url = Url::parse(url).map_err(|e| format!("Invalid URL: {}", e))?;
    
    match parsed_url.scheme() {
        "ftp" => download_ftp(config, url).await,
        "http" | "https" => download_http(config, url).await,
        scheme => Err(format!("Unsupported protocol: {}", scheme)),
    }
}

/// Downloads a file via FTP protocol
async fn download_ftp(
    config: &DownloadConfig,
    url: &str,
) -> Result<HashSet<(String, String)>, String> {
    let parsed_url = Url::parse(url).map_err(|e| format!("Invalid URL: {}", e))?;
    
    let host = parsed_url.host_str().ok_or("Missing FTP host")?;
    let port = parsed_url.port().unwrap_or(21);
    let path = parsed_url.path();
    
    // Extract filename from path
    let filename = path.split('/').last().unwrap_or("index");
    
    println!("Connecting to FTP server: {}:{}", host, port);
    
    // Connect to FTP server
    let mut ftp_stream = ftp::FtpStream::connect((host, port))
        .map_err(|e| format!("Failed to connect to FTP server: {}", e))?;
    
    // Login (anonymous if no credentials)
    let login_user = parsed_url.username().is_empty()
        .then(|| "anonymous".to_string())
        .unwrap_or_else(|| parsed_url.username().to_string());
    let login_pass = parsed_url.password().unwrap_or("anonymous@example.com").to_string();
    
    ftp_stream.login(&login_user, &login_pass)
        .map_err(|e| format!("FTP login failed: {}", e))?;
    println!("################");
    // Change to directory if path contains directories
    if path.contains('/') && path != "/" {
        let dir_path = path.rsplit_once('/').map(|(d, _)| d).unwrap_or("/");
        if !dir_path.is_empty() && dir_path != "/" {
            ftp_stream.cwd(dir_path)
                .map_err(|e| format!("Failed to change FTP directory: {}", e))?;
        }
    }
    
    // Get file size via SIZE command (if supported)
    let content_length = ftp_stream.size(filename)
        .ok()
        .flatten()
        .unwrap_or(0) as u64;
    
    println!("status FTP OK");
    println!(
        "content size: {} [~{:.2}MB]",
        content_length,
        content_length as f64 / (1024.0 * 1024.0)
    );
    
    // Determine content type from filename
    let is_html = filename.ends_with(".html") || filename.ends_with(".htm");
    
    let output_path = determine_output_path(config, url).await?;
    dbg!(&output_path);
    println!("saving file to: {}", output_path.display());
    
    let mut file = OpenOptions::new()
        .create(true)
        .write(true)
        .open(&output_path)
        .await
        .map_err(|e| format!("Failed to create file: {}", e))?;
    
    // Retrieve file using the FTP stream's retr method
    let ftp_data_cell = std::cell::RefCell::new(Vec::new());
    ftp_stream.retr(filename, |stream| {
        let mut buf = [0u8; 8192];
        let mut data = ftp_data_cell.borrow_mut();
        loop {
            match stream.read(&mut buf) {
                Ok(0) => break,
                Ok(n) => data.extend_from_slice(&buf[..n]),
                Err(_) => break,
            }
        }
        Ok(())
    })
    .map_err(|e| format!("Failed to retrieve FTP file: {}", e))?;
    let ftp_data = ftp_data_cell.into_inner();
    
    let bytes_per_sec = config
        .rate_limit
        .as_ref()
        .map(|rate| parse_rate_limit(rate))
        .transpose()?
        .unwrap_or(0);
    
    let mut processing_buf = if config.mirror && is_html {
        Vec::with_capacity(ftp_data.len())
    } else {
        Vec::new()
    };
    
    let pb = if !config.background {
        Some(create_progress_bar(content_length))
    } else {
        None
    };
    let progress_reporter = ProgressReporter::new(config.input_file.is_none(), pb, content_length);
    
    let mut downloaded = 0;
    
    // Process downloaded data in chunks
    const CHUNK_SIZE: usize = 8192;
    for chunk in ftp_data.chunks(CHUNK_SIZE) {
        if bytes_per_sec > 0 {
            let sleep_duration =
                Duration::from_secs_f64(chunk.len() as f64 / bytes_per_sec as f64);
            tokio::time::sleep(sleep_duration).await;
        }
        
        downloaded += chunk.len() as u64;
        
        // Write directly to file unless we need to convert links
        if !is_html || !config.convert_links {
            file.write_all(chunk)
                .await
                .map_err(|e| format!("Failed to write chunk: {}", e))?;
        }
        
        if config.mirror && is_html {
            processing_buf.extend_from_slice(chunk);
        }
        
        progress_reporter.update(downloaded);
    }
    
    progress_reporter.finish();
    
    // Close FTP connection
    let _ = ftp_stream.quit();
    
    // Mirroring post-processing
    if config.mirror && is_html {
        let mut html = String::from_utf8_lossy(&processing_buf).into_owned();
        let base_url = Url::parse(url).map_err(|err| err.to_string())?;
        let urls = extract_urls(&config.reject, &config.exclude, &html, &base_url).await?;

        if config.convert_links {
            html = convert_links(html, &urls, &base_url);
            write(&output_path, &html)
                .await
                .map_err(|e| format!("Failed to write HTML: {}", e))?;
        }
        
        Ok(urls)
    } else {
        Ok(HashSet::new())
    }
}

/// Downloads a file via HTTP(S) protocol
async fn download_http(
    config: &DownloadConfig,
    url: &str,
) -> Result<HashSet<(String, String)>, String> {
    let client = Client::new();

    let _base_url = Url::parse(url).map_err(|e| format!("Invalid URL: {}", e))?;
    // println!("base_url.scheme(): {}", base_url.scheme());
    
    let response = client.get(url).send().await.map_err(|e| e.to_string())?;
    // println!("$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$");

    if !response.status().is_success() {
        return Err(format!("HTTP {}", response.status()));
    }

    println!("status 200 OK");
    let content_length = response.content_length().unwrap_or(0);
    println!(
        "content size: {} [~{:.2}MB]",
        content_length,
        content_length as f64 / (1024.0 * 1024.0)
    );

    // Extract content type
    let content_type = response
        .headers()
        .get(reqwest::header::CONTENT_TYPE)
        .and_then(|ct| ct.to_str().ok())
        .and_then(|c| c.split(';').next())
        .unwrap_or("/")
        .to_string();
    
    let is_html = content_type.ends_with("/html") || content_type == "text/html";

    let output_path = determine_output_path(config, url).await?;
    dbg!(&output_path);
    println!("saving file to: {}", output_path.display());

    let mut file = OpenOptions::new()
        .create(true)
        .write(true)
        .open(&output_path)
        .await
        .map_err(|e| format!("Failed to create file: {}", e))?;

    let mut stream = response.bytes_stream();
    let mut downloaded = 0;

    // Initialize progress reporting
    let pb = if !config.background {
        Some(create_progress_bar(content_length))
    } else {
        None
    };
    let progress_reporter = ProgressReporter::new(config.input_file.is_none(), pb, content_length);

    let bytes_per_sec = config
        .rate_limit
        .as_ref()
        .map(|rate| parse_rate_limit(rate))
        .transpose()?
        .unwrap_or(0);

    let mut processing_buf = if config.mirror && is_html {
        Vec::with_capacity(content_length as usize)
    } else {
        Vec::new()
    };

    while let Some(chunk) = stream.next().await {
        let chunk = chunk.map_err(|e| format!("Failed to read chunk: {}", e))?;

        if bytes_per_sec > 0 {
            let sleep_duration =
                Duration::from_secs_f64(chunk.len() as f64 / bytes_per_sec as f64);
            tokio::time::sleep(sleep_duration).await;
        }

        downloaded += chunk.len() as u64;

        // Write directly to file unless we need to convert links
        if !is_html || !config.convert_links {
            file.write_all(&chunk)
                .await
                .map_err(|e| format!("Failed to write chunk: {}", e))?;
        }

        if config.mirror && is_html {
            processing_buf.extend_from_slice(&chunk);
        }

        progress_reporter.update(downloaded);
    }
    progress_reporter.finish();

    // Mirroring post-processing
    if config.mirror && is_html {
        let mut html = String::from_utf8_lossy(&processing_buf).into_owned();
        let base_url = Url::parse(url).map_err(|err| err.to_string())?;
        let urls = extract_urls(&config.reject, &config.exclude, &html, &base_url).await?;

        if config.convert_links {
            html = convert_links(html, &urls, &base_url);
            write(&output_path, &html)
                .await
                .map_err(|e| format!("Failed to write HTML: {}", e))?;
        }
        
        Ok(urls)
    } else {
        Ok(HashSet::new())
    }
}
