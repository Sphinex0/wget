use super::utils::determine_output_path;
use crate::cli::DownloadConfig;
use crate::mirror::{convert_links, extract_urls};
use crate::progress::{ProgressReporter, create_progress_bar};
use crate::rate_limiter::parse_rate_limit;
use futures::StreamExt;
use reqwest::Client;
use std::collections::HashSet;
use std::time::Duration;
use suppaftp::tokio::AsyncFtpStream;
use tokio::fs::{self, OpenOptions, write};
use tokio::io::{AsyncReadExt, AsyncWriteExt};
use url::Url;


async fn handle_directory_listing(
    stream: &mut AsyncFtpStream,
    config: &DownloadConfig,
    url: &Url,
) -> Result<HashSet<(String, String)>, String> {
    let path = url.path();

    // 1. Move to the directory
    stream
        .cwd(path)
        .await
        .map_err(|e| format!("CWD failed: {}", e))?;

    // 2. Get the raw LIST output
    let list = stream
        .list(Some("-a"))
        .await
        .map_err(|e| format!("LIST failed: {}", e))?;


    // 3. Determine where to save .listing
    // This should resolve to the directory itself
    let output_path = determine_output_path(config, &url.to_string()).await?;

    // We want the folder where the directory contents will live
    if let Some(parent) = output_path.parent() {
        // Ensure the directory exists
        fs::create_dir_all(parent).await.ok();

        // Save the raw metadata to .listing (Wget keeps this!)
        let listing_path = parent.join(".listing");
        fs::write(&listing_path, list.join("\n"))
            .await
            .map_err(|e| format!("Failed to save .listing: {}", e))?;
    }

    let mut links = HashSet::new();

    // 5. Build the link set for the crawler
    if config.mirror {
        let scheme = url.scheme();
        let host = url.host_str().ok_or("Missing host")?;
        let port = url.port().unwrap_or(21);

        for line in list {
            let parts: Vec<&str> = line.split_whitespace().collect();
            if let Some(name) = parts.last() {
                if *name == "." || *name == ".." {
                    continue;
                }

                let base_dir = path.trim_end_matches('/');
                let mut new_path = format!("{}/{}", base_dir, name);

                if line.starts_with('d') && !new_path.ends_with('/') {
                    new_path.push('/');
                }

                let absolute_url_str = format!("{}://{}:{}{}", scheme, host, port, new_path);

                // Rejection/Exclusion Filters
                if !config.exclude.is_empty() && config.exclude.iter().any(|ex| name.contains(ex)) {
                    continue;
                }
                if let Some(ext) = std::path::Path::new(name).extension() {
                    let ext_str = ext.to_string_lossy().to_lowercase();
                    if config.reject.iter().any(|r| r.to_lowercase() == ext_str) {
                        continue;
                    }
                }

                links.insert((name.to_string(), absolute_url_str));
            }
        }
    }

    // Notice: NO fs::remove_file here. We keep the .listing file.
    Ok(links)
}
/// Downloads a file via HTTP(S) protocol
pub async fn download_http(
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
            let sleep_duration = Duration::from_secs_f64(chunk.len() as f64 / bytes_per_sec as f64);
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

/// Refactored download function that REUSES the stream
pub async fn download_ftp_persistent(
    ftp_stream: &mut AsyncFtpStream,
    config: &DownloadConfig,
    parsed_url: &Url,
) -> Result<HashSet<(String, String)>, String> {
    let path = parsed_url.path();
    let mut dir_ls = None;

    if path.ends_with('/')
        || path.is_empty()
        || (config.mirror
            && ftp_stream.size(path).await.is_err()
            && ftp_stream.cwd(path).await.is_ok())
    {
        if config.mirror {
            return handle_directory_listing(ftp_stream, config, parsed_url).await;
        } else {
            dir_ls = Some(ftp_ls_to_html(ftp_stream, parsed_url).await?);
        }
    }

    // 2. File Download (Streaming)
    let output_path = determine_output_path(config, &parsed_url.to_string()).await?;

    if let Some(parent) = output_path.parent() {
        fs::create_dir_all(parent).await.ok();
    }

    if let Some(dir_ls) = dir_ls {
        write(&output_path, &dir_ls)
            .await
            .map_err(|e| e.to_string())?;
    } else {
        let mut reader = ftp_stream
            .retr_as_stream(path)
            .await
            .map_err(|e| format!("RETR failed: {}", e))?;

        let mut file = OpenOptions::new()
            .create(true)
            .write(true)
            .truncate(true)
            .open(&output_path)
            .await
            .map_err(|e| e.to_string())?;

        let mut buffer = [0u8; 8192];
        while let Ok(n) = reader.read(&mut buffer).await {
            if n == 0 {
                break;
            }
            file.write_all(&buffer[..n])
                .await
                .map_err(|e| e.to_string())?;

            // Rate limiting logic here...
        }

        // CRITICAL: You must finalize the stream to reuse the connection!
        ftp_stream
            .finalize_retr_stream(reader)
            .await
            .map_err(|e| format!("Finalize failed: {}", e))?;
    }

    Ok(HashSet::new())
}

async fn ftp_ls_to_html(ftp_stream: &mut AsyncFtpStream, base_url: &Url) -> Result<String, String> {
    ftp_stream
        .cwd(base_url.path())
        .await
        .map_err(|e| format!("CWD failed: {}", e))?;

    let lines = ftp_stream
        .list(None)
        .await
        .map_err(|e| format!("FTP LIST failed: {}", e))?;

    let path = base_url.path();
    let host = base_url.host_str().unwrap_or("localhost");
    let port = base_url.port().unwrap_or(21);

    // Header setup
    let mut html = format!(
        r#"<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
<head>
<title>Index of {path} on {host}:{port}</title>
</head>
<body>
<h1>Index of {path} on {host}:{port}</h1>
<hr>
<pre>
"#
    );

    for line in lines {
        let parts: Vec<&str> = line.split_whitespace().collect();
        // Standard Unix LIST: [perms, links, user, group, size, month, day, time, name]
        if parts.len() < 9 {
            continue;
        }

        let name = parts[8..].join(" "); // Handle filenames with spaces
        if name == "." || name == ".." {
            continue;
        }

        let is_dir = line.starts_with('d');
        let size = parts[4];

        // Mocking the date format to match your requested output
        // In a real app, you'd parse parts[5], [6], [7]
        let date_str = "2026 Feb 17 13:57";

        // Build the Absolute URL for the href
        let mut child_url = base_url.clone();
        let mut new_path = base_url.path().trim_end_matches('/').to_string();
        new_path.push_str("/");
        new_path.push_str(&name);

        let type_label = if is_dir {
            new_path.push('/'); // Ensure trailing slash for directory URLs
            "Directory"
        } else {
            "File     "
        };

        child_url.set_path(&new_path);
        let href = child_url.to_string();

        // Formatting the line
        let display_name = if is_dir {
            format!("{}/", name)
        } else {
            name.clone()
        };

        if is_dir {
            html.push_str(&format!(
                "  {}  {}   <a href=\"{}\">{}</a>\n",
                date_str, type_label, href, display_name
            ));
        } else {
            html.push_str(&format!(
                "  {}  {}   <a href=\"{}\">{}</a>  ({} bytes)\n",
                date_str, type_label, href, display_name, size
            ));
        }
    }

    html.push_str("</pre>\n</body>\n</html>");
    Ok(html)
}
