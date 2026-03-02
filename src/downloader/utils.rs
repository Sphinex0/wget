use crate::cli::DownloadConfig;
use crate::mirror::create_mirror_path;
use std::collections::{HashSet, VecDeque};
use std::path::PathBuf;
use anyhow::Result;

/// Determines the output path for a file.
///
/// If mirroring is enabled, it uses `create_mirror_path`.
/// Otherwise, it constructs a path based on the output directory and filename.
pub async fn determine_output_path(config: &DownloadConfig, url: &str) -> Result<PathBuf> {
    if config.mirror {
        create_mirror_path(config, url).await
    } else {
        let filename = config.output_file.as_ref().map_or_else(
            || {
                url.split('/')
                    .next_back()
                    .filter(|f| !f.is_empty())
                    .unwrap_or("index.html")
                    .to_string()
            },
            |f| f.clone(),
        );

        let l = filename.clone();
        Ok(config
            .output_dir
            .as_ref()
            .map_or_else(|| PathBuf::from(l), |dir| dir.join(filename)))
    }
}

/// Enqueues new URLs discovered during mirroring.
///
/// Filters out visited URLs and handles cross-domain logic for external resources.
pub fn enqueue_new_urls(
    queue: &mut VecDeque<DownloadConfig>,
    visited: &HashSet<String>,
    config: &DownloadConfig,
    new_urls: HashSet<(String, String)>,
) {
    for (_, new_url) in new_urls {
        if !visited.contains(&new_url) {
            let mut child_config = config.clone();
            child_config.url = Some(new_url.clone());
            queue.push_back(child_config);
        }
    }
}
