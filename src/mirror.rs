use crate::cli::DownloadConfig;
use anyhow::{Error, Result};
use lol_html::{HtmlRewriter, Settings, element};
use scraper::{Html, Selector};
use std::collections::HashSet;
use std::path::{Path, PathBuf};
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
pub async fn create_mirror_path(config: &DownloadConfig, url: &str) -> Result<PathBuf> {
    let url_parser = Url::parse(url)?;
    let domain = if let Some(domain) = url_parser.domain() {
        domain
    } else {
        &url_parser
            .host()
            .ok_or_else(|| Error::msg("URL has no domain"))?
            .to_string()
    };

    let mut path = config.output_dir.clone().unwrap_or_default();

    path.push(domain);
    path.push(url_parser.path().trim_start_matches('/'));

    if url_parser.scheme() == "ftp" {
        if url_parser.path().ends_with('/') {
            tokio::fs::create_dir_all(&path).await?;
        } else if let Some(parent) = path.parent() {
            tokio::fs::create_dir_all(parent).await?;
        }
        return Ok(path);
    }

    if path.to_str().is_some_and(|s| s.ends_with('/')) {
        path = path.join("index.html");
    }

    if path.extension().is_none() {
        path = path.join("index.html");
    }

    if let Some(parent) = path.parent() {
        tokio::fs::create_dir_all(parent).await?;
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
    reject: &[String],
    execlud: &[String],
    html: &str,
    base_url: &Url,
) -> Result<HashSet<(String, String)>> {
    let html = html.to_string();
    let reject = reject.to_owned();
    let execlud = execlud.to_owned();
    let base_url = base_url.clone(); // Clone the URL for thread safety

    tokio::task::spawn_blocking(move || {
        let document = Html::parse_document(&html);
        let selector = Selector::parse("a[href],img[src],link[href],script[src]")
            .map_err(|err| Error::msg(format!("Failed to parse selector: {:?}", err)))?;

        let urls = document
            .select(&selector)
            .filter_map(|el| el.value().attr("href").or_else(|| el.value().attr("src")))
            .filter_map(|raw_url| {
                match Url::parse(raw_url) {
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
                                && !execlud.is_empty())
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
                    Err(url::ParseError::RelativeUrlWithoutBase) => match base_url.join(raw_url) {
                        Ok(url) => {
                            let new_path = PathBuf::from(url.path());
                            if reject.contains(
                                &new_path
                                    .extension()
                                    .unwrap_or_default()
                                    .to_string_lossy()
                                    .to_string(),
                            ) || execlud.iter().any(|folder| url.path().contains(folder))
                                && !execlud.is_empty()
                                || url.domain() != base_url.domain()
                            {
                                None
                            } else {
                                Some((raw_url.to_string(), url.to_string()))
                            }
                        }
                        Err(_) => None,
                    },
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
    .await?
}

pub fn convert_links(html: String, urls: &HashSet<(String, String)>, base_url: &Url) -> String {
    let mut output = Vec::new();

    // Setup the rewriter
    let mut rewriter = HtmlRewriter::new(
        Settings {
            element_content_handlers: vec![
                // Handle all tags that contain links
                element!("a[href], link[href], img[src], script[src]", |el| {
                    let attr_name = if el.has_attribute("href") {
                        "href"
                    } else {
                        "src"
                    };

                    if let Some(attr_val) = el.get_attribute(attr_name)
                        && let Some(replacement) = get_replacement(&attr_val, urls, base_url)
                    {
                        el.set_attribute(attr_name, &replacement).unwrap();
                    }
                    Ok(())
                }),
            ],
            ..Settings::default()
        },
        |c: &[u8]| output.extend_from_slice(c),
    );

    rewriter.write(html.as_bytes()).ok();
    rewriter.end().ok();

    String::from_utf8(output).unwrap_or(html)
}

fn get_replacement(
    original_val: &str,
    urls: &HashSet<(String, String)>,
    base_url: &Url,
) -> Option<String> {
    let (_, absolute_url) = urls.iter().find(|(orig, _)| {
        orig == original_val || orig.trim_end_matches("index.html") == original_val
    })?;

    let parsed_url = Url::parse(absolute_url).ok()?;

    if parsed_url.domain() == base_url.domain() {
        let mut base_path = base_url.path().to_string();
        let mut res_path = parsed_url.path().to_string();

        let fix = |p: &mut String| {
            if p.ends_with('/') || Path::new(p).extension().is_none() {
                if !p.ends_with('/') {
                    p.push('/');
                }
                p.push_str("index.html");
            }
        };
        fix(&mut base_path);
        fix(&mut res_path);

        // Path logic for relative conversion
        let b_segs: Vec<&str> = base_path.split('/').filter(|s| !s.is_empty()).collect();
        let r_segs: Vec<&str> = res_path.split('/').filter(|s| !s.is_empty()).collect();

        let mut common = 0;
        while common < b_segs.len() && common < r_segs.len() && b_segs[common] == r_segs[common] {
            common += 1;
        }

        let mut rel = String::new();
        for _ in common..(b_segs.len().saturating_sub(1)) {
            rel.push_str("../");
        }
        for (i, seg) in r_segs.iter().skip(common).enumerate() {
            rel.push_str(seg);
            if i < r_segs.len() - common - 1 {
                rel.push('/');
            }
        }
        Some(rel)
    } else {
        // External link
        Some(format!(
            "//{}{}",
            parsed_url.domain().unwrap_or(""),
            parsed_url.path()
        ))
    }
}
