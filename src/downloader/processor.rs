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
/// Handles fetching, file writing, rate limiting, progress reporting, and
/// HTML post-processing for mirroring (link extraction and conversion).
pub async fn process_single_download(
    config: &DownloadConfig,
    url: &str,
) -> Result<HashSet<(String, String)>, String> {
    let client = Client::new();
    let response = client.get(url).send().await.map_err(|e| e.to_string())?;

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
