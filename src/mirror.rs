use crate::cli::DownloadConfig;
use scraper::{Html, Selector};
use std::collections::HashSet;
use std::path::PathBuf;
use url::Url;

// ======================
// Create Mirror Path
// ======================

/// Creates the local file path for a mirrored resource.
///
/// This function determines where a downloaded file should be saved in the local filesystem
/// to replicate the structure of the website. It handles:
/// - Mapping domains to directories.
/// - Preserving path structure.
/// - Handling index files (directories ending in '/').
///
/// # Arguments
///
/// * `config` - The download configuration containing the output directory.
/// * `url` - The URL of the resource being downloaded.
///
/// # Returns
///
/// * `Ok(PathBuf)` - The resolved local file path.
/// * `Err(String)` - If URL parsing or directory creation fails.
pub async fn create_mirror_path(config: &DownloadConfig, url: &str) -> Result<PathBuf, String> {
    let url_parser = Url::parse(url).map_err(|err| err.to_string())?;
    let domain = if let Some(domain) = url_parser.domain() {
        domain
    } else {
        &url_parser
            .host()
            .ok_or_else(|| "URL has no domain".to_string())?
            .to_string()
    };

    let mut path = config.output_dir.clone().unwrap_or_default();

    path.push(domain);
    path.push(url_parser.path().trim_start_matches('/'));



    if config.mirror && url_parser.scheme() == "ftp" {
        if url_parser.path().ends_with('/') {
            tokio::fs::create_dir_all(&path)
                .await
                .map_err(|err| err.to_string())?;
        } else {
            if let Some(parent) = path.parent() {
                tokio::fs::create_dir_all(parent)
                    .await
                    .map_err(|err| err.to_string())?;
            }
        }
        return Ok(path);
    }
    
    if path.to_str().map_or(false, |s| s.ends_with('/')) {
        path = path.join("index.html");
    }

    if path.extension().is_none() {
        path = path.join("index.html");
    }

    if let Some(parent) = path.parent() {
        if parent.to_str() == Some("") {
            tokio::fs::create_dir_all(&path)
                .await
                .map_err(|err| err.to_string())?;
            path = path.join("index.html");
        } else {
            tokio::fs::create_dir_all(parent)
                .await
                .map_err(|err| err.to_string())?;
        }
    }

    Ok(path)
}

// ======================
// Extract Urls
// ======================

/// Extracts URLs from HTML content for recursive downloading.
///
/// This function parses the HTML and finds links in `a[href]`, `img[src]`, and `link[href]`.
/// It filters the extracted URLs based on rejection and exclusion rules defined in the configuration.
///
/// # Arguments
///
/// * `reject` - List of file extensions to reject.
/// * `execlud` - List of directory paths to exclude.
/// * `html` - The HTML content string.
/// * `base_url` - The base URL to resolve relative links against.
///
/// # Returns
///
/// * `Ok(HashSet<(String, String)>)` - A set of tuples containing (original_raw_url, absolute_url).
/// * `Err(String)` - If HTML parsing or selector creation fails.
pub async fn extract_urls(
    reject: &Vec<String>,
    execlud: &Vec<String>,
    html: &str,
    base_url: &Url,
) -> Result<HashSet<(String, String)>, String> {
    let html = html.to_string();
    let reject = reject.clone();
    let execlud = execlud.clone();
    let base_url = base_url.clone(); // Clone the URL for thread safety

    tokio::task::spawn_blocking(move || {
        let document = Html::parse_document(&html);
        let selector = Selector::parse("a[href],img[src],link[href]")
            .map_err(|err| format!("Selector error: {:?}", err))?;

        let urls = document
            .select(&selector)
            .filter_map(|el| el.value().attr("href").or_else(|| el.value().attr("src")))
            .filter_map(|raw_url| {
                // Try to parse as absolute URL first
                match Url::parse(&raw_url) {
                    Ok(url) => {
                        if url.to_string().contains("://") {
                            let new_path = PathBuf::from(url.path());
                            if reject.contains(
                                &new_path
                                    .extension()
                                    .unwrap_or_default()
                                    .to_string_lossy()
                                    .to_string(),
                            ) || (execlud.iter().any(|folder| url.path().contains(folder))
                                && execlud.len() != 0)
                                || url.domain() != base_url.domain()
                            {
                                None
                            } else {
                                Some((raw_url.to_string(), url.to_string()))
                            }
                        } else {
                            None
                        }
                    }
                    Err(url::ParseError::RelativeUrlWithoutBase) => {
                        // Handle relative URLs by joining with base URL
                        match base_url.join(&raw_url) {
                            Ok(url) => {
                                let new_path = PathBuf::from(url.path());
                                if reject.contains(
                                    &new_path
                                        .extension()
                                        .unwrap_or_default()
                                        .to_string_lossy()
                                        .to_string(),
                                ) || execlud.iter().all(|folder| url.path().contains(folder))
                                    && execlud.len() != 0
                                {
                                    None
                                } else {
                                    Some((raw_url.to_string(), url.to_string()))
                                }
                            }
                            Err(_) => None,
                        }
                    }
                    Err(_) => {
                        // Skip invalid URLs
                        None
                    }
                }
            })
            .filter_map(|u| {
                let new_path = PathBuf::from(&u.1);
                if reject.contains(
                    &new_path
                        .extension()
                        .unwrap_or_default()
                        .to_string_lossy()
                        .to_string(),
                ) {
                    None
                } else {
                    Some(u)
                }
            })
            .collect::<HashSet<_>>();

        Ok(urls)
    })
    .await
    .map_err(|err| err.to_string())?
}

// ======================
// Link Conversion
// ======================

/// Converts links in HTML content to point to local files for offline viewing.
///
/// This function iterates through the extracted URLs and replaces them in the HTML string
/// with relative local paths calculated based on the base URL and the resource URL.
///
/// # Arguments
///
/// * `html` - The original HTML content.
/// * `urls` - The set of URLs to replace (original_raw_url, absolute_url).
/// * `base_url` - The URL of the page being processed.
///
/// # Returns
///
/// * `String` - The modified HTML with local links.
pub fn convert_links(mut html: String, urls: &HashSet<(String, String)>, base_url: &Url) -> String {
    for (original_url, absolute_url) in urls.iter() {
        let parsed_url = match Url::parse(absolute_url) {
            Ok(url) => url,
            Err(_) => continue, // Skip invalid URLs
        };

        let replacement_url = if parsed_url.domain() == base_url.domain() {
            // For same-domain resources, convert to relative path
            let mut base_path = base_url.path().to_string();
            let mut resource_path = parsed_url.path().to_string();

            // Adjust paths to match create_mirror_path logic (append index.html if no extension)
            if base_path.ends_with('/') || std::path::Path::new(&base_path).extension().is_none() {
                if !base_path.ends_with('/') {
                    base_path.push('/');
                }
                base_path.push_str("index.html");
            }

            if resource_path.ends_with('/')
                || std::path::Path::new(&resource_path).extension().is_none()
            {
                if !resource_path.ends_with('/') {
                    resource_path.push('/');
                }
                resource_path.push_str("index.html");
            }

            let base_segments: Vec<&str> = base_path.split('/').filter(|s| !s.is_empty()).collect();
            let resource_segments: Vec<&str> =
                resource_path.split('/').filter(|s| !s.is_empty()).collect();

            let mut common_prefix = 0;
            while common_prefix < base_segments.len()
                && common_prefix < resource_segments.len()
                && base_segments[common_prefix] == resource_segments[common_prefix]
            {
                common_prefix += 1;
            }

            let mut relative_path = String::new();
            for _ in common_prefix..base_segments.len() - 1 {
                relative_path.push_str("../");
            }
            for segment in resource_segments.iter().skip(common_prefix) {
                relative_path.push_str(segment);
                relative_path.push('/');
            }
            if !resource_path.ends_with('/') && !relative_path.is_empty() {
                relative_path.pop();
            }
            relative_path
        } else {
            // For external resources, make protocol-relative
            parsed_url.domain().unwrap().to_string() + parsed_url.path()
        };

        html = html.replace(original_url, &replacement_url);
    }
    html
}

// pub async fn extract_paths(
//     reject: &Vec<String>,
//     execlud: &Vec<String>,
//     content: &str,
//     base_url: &Url,
// ) -> Result<HashSet<(String, String)>, String> {

// }
