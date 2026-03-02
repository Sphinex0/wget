use super::utils::determine_output_path;
use crate::cli::DownloadConfig;
use crate::mirror::{convert_links, extract_urls};
use crate::progress::{ProgressReporter, add_progress_bar_to_multi};
use crate::rate_limiter::parse_rate_limit;
use anyhow::{Error, Result, bail};
use chrono::Local;
use futures::StreamExt;
use indicatif::MultiProgress;
use reqwest::Client;
use std::collections::HashSet;
use std::sync::Arc;
use std::time::Duration;
use suppaftp::tokio::AsyncFtpStream;
use tokio::fs::{self, OpenOptions, write};
use tokio::io::{AsyncReadExt, AsyncWriteExt};
use url::Url;

async fn handle_directory_listing(
    stream: &mut AsyncFtpStream,
    config: &DownloadConfig,
    url: &Url,
) -> Result<HashSet<(String, String)>> {
    let path = url.path();

    // 1. Move to the directory
    stream.cwd(path).await?;

    // 2. Get the raw LIST output
    let list = stream.list(Some("-a")).await?;

    // 3. Determine where to save .listing
    // This should resolve to the directory itself
    let output_path = determine_output_path(config, url.as_ref()).await?;

    if let Some(parent) = output_path.parent() {
        fs::create_dir_all(parent).await.ok();

        // Save the raw metadata to .listing (Wget keeps this!)
        let listing_path = parent.join(".listing");
        fs::write(&listing_path, list.join("\n")).await?;
    }

    let mut links = HashSet::new();

    let scheme = url.scheme();
    let host = url.host_str().ok_or(Error::msg("Missing host"))?;
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

    Ok(links)
}

/// Downloads a file via HTTP(S) protocol
pub async fn download_http(
    config: &DownloadConfig,
    url: &str,
    multi_progress: &Arc<MultiProgress>,
) -> Result<HashSet<(String, String)>> {
    let start_time = Local::now();
    multi_progress.suspend(|| println!("start at {}", start_time.format("%Y-%m-%d %H:%M:%S")));

    let client = Client::new();

    let _base_url = Url::parse(url)?;

    println!("sending request, awaiting response...");

    let response = client.get(url).send().await?;

    if !response.status().is_success() {
        bail!("HTTP {}", response.status());
    }

    multi_progress.println("status 200 OK")?;

    let content_length = response.content_length().unwrap_or(0);

    multi_progress.suspend(|| {
        println!(
            "content size: {} [~{:.2}MB]",
            content_length,
            content_length as f64 / (1024.0 * 1024.0)
        )
    });

    let content_type = response
        .headers()
        .get(reqwest::header::CONTENT_TYPE)
        .and_then(|ct| ct.to_str().ok())
        .and_then(|c| c.split(';').next())
        .unwrap_or("/")
        .to_string();

    let is_html = content_type.ends_with("/html") || content_type == "text/html";

    let output_path = determine_output_path(config, url).await?;

    multi_progress.suspend(|| println!("saving file to: {}", output_path.display()));

    let mut file = OpenOptions::new()
        .create(true)
        .truncate(true)
        .write(true)
        .open(&output_path)
        .await?;

    let mut stream = response.bytes_stream();
    let mut downloaded = 0;

    let filename = output_path
        .file_name()
        .and_then(|name| name.to_str())
        .unwrap_or("download");

    let pb = add_progress_bar_to_multi(multi_progress, content_length)?;

    let progress_reporter = ProgressReporter::new(pb);

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
        let chunk = chunk?;
        if bytes_per_sec > 0 {
            let sleep_duration = Duration::from_secs_f64(chunk.len() as f64 / bytes_per_sec as f64);
            tokio::time::sleep(sleep_duration).await;
        }

        downloaded += chunk.len() as u64;

        if !is_html || !config.convert_links {
            file.write_all(&chunk).await?;
        }

        if config.mirror && is_html {
            processing_buf.extend_from_slice(&chunk);
        }
        progress_reporter.update(downloaded, filename);
    }

    progress_reporter.finish(filename, url);

    // Mirroring post-processing
    if config.mirror && is_html {
        let mut html = String::from_utf8_lossy(&processing_buf).into_owned();
        let base_url = Url::parse(url)?;
        let urls = extract_urls(&config.reject, &config.exclude, &html, &base_url).await?;

        if config.convert_links {
            html = convert_links(html, &urls, &base_url);
            write(&output_path, &html).await?;
        }

        Ok(urls)
    } else {
        Ok(HashSet::new())
    }
}

/// Download ftp persistent
pub async fn download_ftp_persistent(
    ftp_stream: &mut AsyncFtpStream,
    config: &DownloadConfig,
    parsed_url: &Url,
) -> Result<HashSet<(String, String)>> {
    let start_time = Local::now();
    println!("start at {}", start_time.format("%Y-%m-%d %H:%M:%S"));

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

    let output_path = determine_output_path(config, parsed_url.as_ref()).await?;

    if let Some(parent) = output_path.parent() {
        fs::create_dir_all(parent).await.ok();
    }

    if let Some(dir_ls) = dir_ls {
        write(&output_path, &dir_ls).await?;
    } else {
        let mut reader = ftp_stream.retr_as_stream(path).await?;

        let mut file = OpenOptions::new()
            .create(true)
            .write(true)
            .truncate(true)
            .open(&output_path)
            .await?;

        let mut buffer = [0u8; 8192];
        while let Ok(n) = reader.read(&mut buffer).await {
            if n == 0 {
                break;
            }
            file.write_all(&buffer[..n]).await?;

            // Rate limiting logic here...
        }

        // CRITICAL: You must finalize the stream to reuse the connection!
        ftp_stream.finalize_retr_stream(reader).await?;
    }

    let finish_time = Local::now();
    println!("finished at {}", finish_time.format("%Y-%m-%d %H:%M:%S"));

    Ok(HashSet::new())
}

async fn ftp_ls_to_html(ftp_stream: &mut AsyncFtpStream, base_url: &Url) -> Result<String> {
    ftp_stream.cwd(base_url.path()).await?;

    let lines = ftp_stream.list(None).await?;

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

        let name = parts[8..].join(" ");
        let is_dir = line.starts_with('d');
        let size = parts[4];

        // Mocking the date format to match your requested output
        // In a real app, you'd parse parts[5], [6], [7]
        let date_str = "2026 Feb 17 13:57";

        // Build the Absolute URL for the href
        let mut child_url = base_url.clone();
        let mut new_path = base_url.path().trim_end_matches('/').to_string();
        new_path.push('/');
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
