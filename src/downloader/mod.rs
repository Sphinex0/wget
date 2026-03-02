mod processor;
mod utils;

use self::utils::enqueue_new_urls;
use crate::cli::DownloadConfig;
use crate::downloader::processor::{download_ftp_persistent, download_http};
use anyhow::{Error, Result};
use indicatif::MultiProgress;
use std::collections::{HashMap, HashSet, VecDeque};
use std::sync::Arc;
use suppaftp::tokio::AsyncFtpStream;
use url::Url;

// ======================
// Download Logic
// ======================

/// Downloads a file or mirrors a website based on the provided configuration.
///
/// This function handles the main download loop, processing a queue of `DownloadConfig` items.
/// It supports recursive mirroring by adding discovered URLs to the queue.
///
/// # Arguments
///
/// * `configuration` - The initial configuration for the download.
///
/// # Returns
///
/// * `Ok(())` - If the download completes successfully.
/// * `Err(String)` - If an error occurs during the process.
pub async fn download_queue(
    configuration: DownloadConfig,
    multi_progress: Arc<MultiProgress>,
) -> Result<()> {
    let mut queue: VecDeque<DownloadConfig> = VecDeque::new();
    queue.push_back(configuration);
    let mut visited: HashSet<String> = HashSet::new();

    let mut ftp_pool: HashMap<String, AsyncFtpStream> = HashMap::new();

    while let Some(config) = queue.pop_front() {
        let url_str = config.url.as_ref().ok_or(Error::msg("No URL provided"))?;

        if visited.contains(url_str) {
            continue;
        }

        let parsed_url = Url::parse(url_str)?;
        let host = parsed_url.host_str().unwrap_or("").to_string();

        let result = if parsed_url.scheme() == "ftp" {
            let mut stream = if let Some(existing_stream) = ftp_pool.remove(&host) {
                existing_stream
            } else {
                setup_ftp_connection(&parsed_url).await?
            };

            let res = download_ftp_persistent(&mut stream, &config, &parsed_url).await;

            ftp_pool.insert(host, stream);
            res
        } else {
            download_http(&config, url_str, &multi_progress).await
        };

        match result {
            Ok(new_urls) => {
                visited.insert(url_str.clone());
                if config.mirror {
                    enqueue_new_urls(&mut queue, &visited, &config, new_urls);
                }
            }
            Err(e) => eprintln!("Error: {}", e),
        }
    }

    for (_, mut stream) in ftp_pool {
        let _ = stream.quit().await;
    }

    Ok(())
}

/// Helper to handle the initial connection logic
async fn setup_ftp_connection(url: &Url) -> Result<AsyncFtpStream> {
    let host = url.host_str().ok_or(Error::msg("Missing host"))?;
    let port = url.port().unwrap_or(21);

    let mut ftp_stream = AsyncFtpStream::connect(format!("{}:{}", host, port)).await?;

    let user = if url.username().is_empty() {
        "anonymous"
    } else {
        url.username()
    };
    let pass = url.password().unwrap_or("anonymous@example.com");

    ftp_stream.login(user, pass).await?;

    Ok(ftp_stream)
}
