mod processor;
mod utils;

use self::utils::enqueue_new_urls;
use crate::cli::DownloadConfig;
use crate::downloader::processor::{download_ftp_persistent, download_http};
use futures::FutureExt;
use futures::future::BoxFuture;
use indicatif::MultiProgress;
use std::sync::Arc;
use std::collections::{HashMap, HashSet, VecDeque};
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
) -> Result<(), String> {
    let mut queue: VecDeque<DownloadConfig> = VecDeque::new();
    queue.push_back(configuration);
    let mut visited: HashSet<String> = HashSet::new();

    // NEW: Connection Pool for FTP
    let mut ftp_pool: HashMap<String, AsyncFtpStream> = HashMap::new();

    while let Some(config) = queue.pop_front() {
        let url_str = config.url.as_ref().ok_or("No URL provided")?;

        if visited.contains(url_str) {
            continue;
        }

        let parsed_url = Url::parse(url_str).map_err(|e| e.to_string())?;
        let host = parsed_url.host_str().unwrap_or("").to_string();

        // If it's FTP, we try to get or create a connection
        let result = if parsed_url.scheme() == "ftp" {
            // Get existing stream or connect new one
            let mut stream = if let Some(existing_stream) = ftp_pool.remove(&host) {
                existing_stream
            } else {
                setup_ftp_connection(&parsed_url).await?
            };

            // Process the download using the persistent stream
            let res = download_ftp_persistent(&mut stream, &config, &parsed_url).await;

            // Put the stream back in the pool for the next file
            ftp_pool.insert(host, stream);
            res
        } else {
            // Standard HTTP download
            download_http(&config, url_str, &multi_progress).await
        };

        match result {
            Ok(new_urls) => {
                visited.insert(url_str.clone());
                if config.mirror {
                    enqueue_new_urls(&mut queue, &visited, &config, url_str, new_urls);
                }
            }
            Err(e) => eprintln!("Error: {}", e),
        }
    }

    // Close all connections at the end
    for (_, mut stream) in ftp_pool {
        let _ = stream.quit().await;
    }

    Ok(())
}



/// Helper to handle the initial connection logic
async fn setup_ftp_connection(url: &Url) -> Result<AsyncFtpStream, String> {
    let host = url.host_str().ok_or("Missing host")?;
    let port = url.port().unwrap_or(21);

    let mut ftp_stream = AsyncFtpStream::connect(format!("{}:{}", host, port))
        .await
        .map_err(|e| format!("Connection failed: {}", e))?;

    let user = if url.username().is_empty() {
        "anonymous"
    } else {
        url.username()
    };
    let pass = url.password().unwrap_or("anonymous@example.com");

    ftp_stream
        .login(user, pass)
        .await
        .map_err(|e| format!("Login failed: {}", e))?;

    Ok(ftp_stream)
}
