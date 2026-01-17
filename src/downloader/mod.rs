mod processor;
mod utils;

use crate::cli::DownloadConfig;
use futures::future::BoxFuture;
use futures::FutureExt;
use std::collections::{HashSet, VecDeque};
use self::processor::process_single_download;
use self::utils::enqueue_new_urls;

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
async fn download_queue(configuration: DownloadConfig) -> Result<(), String> {
    let mut queue: VecDeque<DownloadConfig> = VecDeque::new();
    queue.push_back(configuration);
    let mut visited: HashSet<String> = HashSet::new();

    while let Some(config) = queue.pop_front() {
        let url = config.url.as_ref().ok_or("No URL provided")?;

        // Skip already visited URLs to prevent cycles
        if visited.contains(url) {
            continue;
        }
        
        println!(
            "Started at {}",
            chrono::Local::now().format("%Y-%m-%d %H:%M:%S")
        );

        match process_single_download(&config, url).await {
            Ok(new_urls) => {
                visited.insert(url.clone());
                if config.mirror {
                    enqueue_new_urls(&mut queue, &visited, &config, url, new_urls);
                }
                println!("Finished downloading {}", url);
            }
            Err(e) => {
                eprintln!("Failed to download {}: {}", url, e);
            }
        }
    }

    Ok(())
}

/// Entry point for initiating a download task.
///
/// This function wraps `download_queue` in a `BoxFuture`.
///
/// # Arguments
///
/// * `config` - The download configuration.
///
/// # Returns
///
/// * `BoxFuture<'static, Result<(), String>>` - A future that resolves to the download result.
pub fn download(config: DownloadConfig) -> BoxFuture<'static, Result<(), String>> {
    async move { download_queue(config).await }.boxed()
}
