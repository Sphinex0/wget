use crate::cli::DownloadConfig;
use crate::mirror::create_mirror_path;
use std::collections::{HashSet, VecDeque};
use std::path::PathBuf;
use url::Url;

/// Determines the output path for a file.
///
/// If mirroring is enabled, it uses `create_mirror_path`.
/// Otherwise, it constructs a path based on the output directory and filename.
pub async fn determine_output_path(config: &DownloadConfig, url: &str) -> Result<PathBuf, String> {
    if config.mirror {
        create_mirror_path(config, url).await
    } else {
        let filename = config.output_file.as_ref().map_or_else(
            || {
                url.split('/')
                    .last()
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
    base_url_str: &str,
    new_urls: HashSet<(String, String)>,
) {
    let base_url = match Url::parse(base_url_str) {
        Ok(u) => u,
        Err(_) => return,
    };

    for (_, new_url) in new_urls {
        if !visited.contains(&new_url) {
            let mut child_config = config.clone();
            child_config.url = Some(new_url.clone());

            // Handle external domains: create subdirectories for them
            if let Ok(parsed_url) = Url::parse(&new_url) {
                if let (Some(d1), Some(d2)) = (parsed_url.domain(), base_url.domain()) {
                    if d1 != d2 {
                        child_config.output_dir = Some(PathBuf::from(d2));
                    }
                }
            }

            queue.push_back(child_config);
        }
    }
}
