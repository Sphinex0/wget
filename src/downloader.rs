use crate::cli::DownloadConfig;
use crate::rate_limiter::parse_rate_limit;
use futures::FutureExt;
use futures::{StreamExt, future::BoxFuture};
use indicatif::{ProgressBar, ProgressStyle};
use reqwest::Client;
use scraper::{Html, Selector};
use std::collections::{HashSet, VecDeque};
// use std::fs::OpenOptions;
use std::path::PathBuf;
use std::time::{Duration, Instant};
use tokio::fs::{OpenOptions, write};
use tokio::io::AsyncWriteExt;
use url::Url;
struct ProgressReporter {
    should_report: bool,
    pb: Option<ProgressBar>,
    content_length: u64,
    start_time: Instant,
}

impl ProgressReporter {
    fn new(should_report: bool, pb: Option<ProgressBar>, content_length: u64) -> Self {
        Self {
            should_report,
            pb,
            content_length,
            start_time: Instant::now(),
        }
    }

    fn update(&self, downloaded: u64) {
        if !self.should_report {
            return;
        }

        if let Some(pb) = &self.pb {
            pb.set_position(downloaded);
        } else {
            let percent = if self.content_length > 0 {
                (downloaded as f64) / (self.content_length as f64) * 100.0
            } else {
                0.0
            };

            let elapsed = self.start_time.elapsed().as_secs_f64();
            let speed = if elapsed > 0.0 {
                (downloaded as f64) / elapsed / (1024.0 * 1024.0)
            } else {
                0.0
            };

            let eta = if speed > 0.0 {
                (((self.content_length - downloaded) as f64) / (speed * 1024.0 * 1024.0)) as u64
            } else {
                0
            };

            let bar = "=".repeat((percent / 2.0) as usize);
            let padded_bar = format!("{:<50}", bar);

            println!(
                "{:.2} KiB / {:.2} KiB [{}] {:.2}% {:.2} MiB/s {}s",
                downloaded as f64 / 1024.0,
                self.content_length as f64 / 1024.0,
                padded_bar,
                percent,
                speed,
                eta
            );
        }
    }

    fn finish(&self) {
        if let Some(pb) = &self.pb {
            pb.finish_with_message("Download complete");
        }
    }
}

// ======================
// Create Mirror Path
// ======================

async fn create_mirror_path(
    config: &DownloadConfig,
    url: &str,
    content_type: &str,
) -> Result<PathBuf, String> {
    let url_parser = Url::parse(url).map_err(|err| err.to_string())?;
    let domain = url_parser
        .domain()
        .ok_or_else(|| "URL has no domain".to_string())?;
    let is_html = content_type.contains("text/html");

    let mut path = config.output_dir.clone().unwrap_or_default();

    // Get the main domain from config.url if it exists
    let main_domain = config
        .url
        .as_ref()
        .and_then(|u| Url::parse(u).ok())
        .and_then(|u| u.domain().map(|d| d.to_string())) // Convert &str to String
        .unwrap_or_default(); // Use default() instead of empty string literal

    // Check if this is the main domain or an external resource
    let is_main_domain = domain == main_domain;

    if is_main_domain {
        // For main domain, just use the path directly under the domain folder
        path.push(domain);
        path.push(url_parser.path().trim_start_matches('/'));
    } else {
        // For external resources, keep the full domain path structure
        path.push(domain);
        if let Some(host_path) = url_parser.path_segments() {
            for segment in host_path {
                path.push(segment);
            }
        }
    }

    if path.to_str().map_or(false, |s| s.ends_with('/')) || is_html {
        path = path.join("index.html");
    }

    if let Some(parent) = path.parent() {
        tokio::fs::create_dir_all(parent)
            .await
            .map_err(|err| err.to_string())?;
    }

    Ok(path)
}

// ======================
// Extract Urls
// ======================

async fn extract_urls(
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
            .filter_map(|el| {
                el.value().attr("href").or_else(|| el.value().attr("src"))
                // .map(|u| u.split('#').next().unwrap_or("").to_string())
            })
            .filter_map(|raw_url| {
                // Try to parse as absolute URL first
                match Url::parse(&raw_url) {
                    Ok(url) => {
                        if url.domain().is_some() {
                            let new_path = PathBuf::from(url.path());
                            if reject.contains(
                                &new_path
                                    .extension()
                                    .unwrap_or_default()
                                    .to_string_lossy()
                                    .to_string(),
                            ) || execlud.iter().any(|folder| url.path().contains(folder))
                                && execlud.len() != 0
                            {
                                None
                            } else {
                                Some((raw_url.to_string(), url.to_string()))
                            }
                            // Some(url.to_string())
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

                        //.map(|url| url.to_string())
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

// fn convert_links(mut html: String, urls: &HashSet<(String, String)>, base_url: &Url) -> String {

//     for (original_url, absolute_url) in urls.iter() {
//         let parsed_url = match Url::parse(absolute_url) {
//             Ok(url) => url,
//             Err(_) => continue, // Skip invalid URLs
//         };

//         let replacement_url = if parsed_url.domain() == base_url.domain() {
//             // For same-domain resources, convert to relative path
//             let base_path = base_url.path();
//             let resource_path = parsed_url.path();

//             if base_path == "/" {
//                 resource_path.trim_start_matches('/').to_string()
//             } else {
//                 let base_segments: Vec<&str> =
//                     base_path.split('/').filter(|s| !s.is_empty()).collect();
//                 let resource_segments: Vec<&str> =
//                     resource_path.split('/').filter(|s| !s.is_empty()).collect();

//                 let mut common_prefix = 0;
//                 while common_prefix < base_segments.len()
//                     && common_prefix < resource_segments.len()
//                     && base_segments[common_prefix] == resource_segments[common_prefix]
//                 {
//                     common_prefix += 1;
//                 }

//                 let mut relative_path = String::new();
//                 for _ in common_prefix..base_segments.len() - 1 {
//                     relative_path.push_str("../");
//                 }
//                 for segment in resource_segments.iter().skip(common_prefix) {
//                     relative_path.push_str(segment);
//                     relative_path.push('/');
//                 }
//                 if !resource_path.ends_with('/') && !relative_path.is_empty() {
//                     relative_path.pop();
//                 }
//                 relative_path
//             }
//         } else {
//             // For external resources, make protocol-relative
//             dbg!(&parsed_url);
//             dbg!(parsed_url.to_string());
//             parsed_url.domain().unwrap().to_string() + parsed_url.path()
//         };

//         html = html.replace(original_url, &replacement_url);
//     }
//     html
// }

use kuchiki::{parse_html, traits::*};

fn convert_links(html: String, urls: &HashSet<(String, String)>, base_url: &Url) -> String {
    let document = parse_html().one(html);

    // Select all elements with href or src attributes
    let selector = "a[href], img[src], link[href]";
    for element in document.select(selector).unwrap() {
        let as_node = element.as_node();
        let as_element = as_node.as_element().unwrap();
        let tag_name = as_element.name.local.to_string();
        let mut attrs = as_element.attributes.borrow_mut();

        // Check if this is an href or src attribute
        let attr_name = if attrs.get("href").is_some() {
            "href"
        } else if attrs.get("src").is_some() {
            "src"
        } else {
            continue;
        };

        if let Some(original_url) = attrs.get(attr_name) {
            // Find the matching URL in our set
            if let Some((_, absolute_url)) = urls.iter().find(|(orig, _)| orig == original_url) {
                let parsed_url = match Url::parse(absolute_url) {
                    Ok(url) => url,
                    Err(_) => continue, // Skip invalid URLs
                };

                let mut replacement_url = if parsed_url.domain() == base_url.domain() {
                    // For same-domain resources, convert to relative path
                    let base_path = base_url.path();
                    let resource_path = parsed_url.path();

                    if base_path == "/" {
                        resource_path.trim_start_matches('/').to_string()
                    } else {
                        let base_segments: Vec<&str> =
                            base_path.split('/').filter(|s| !s.is_empty()).collect();
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
                        for _ in common_prefix..base_segments.len() {
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
                    }
                } else {
                    // For external resources, make protocol-relative
                    parsed_url.domain().unwrap().to_string() + parsed_url.path()
                };

                if tag_name.as_str() == "a" {
                    replacement_url.push_str("/index.html");
                }

                // Update the attribute with the new URL
                attrs.insert(attr_name, replacement_url);
            }
        }
    }

    // Serialize the modified document back to HTML
    let mut output = Vec::new();
    document.serialize(&mut output).unwrap();
    String::from_utf8(output).unwrap()
}

// ======================
// Download Url
// ======================

async fn download_url(
    configuration: DownloadConfig,
    _urls_visited: HashSet<String>,
) -> Result<(), String> {
    let mut queue: VecDeque<DownloadConfig> = VecDeque::new();
    queue.push_back(configuration);
    let mut visited: HashSet<String> = HashSet::new();

    while let Some(config) = queue.pop_front() {
        let url = config.url.as_ref().ok_or("No URL provided")?;
        if config.exclude.iter().any(|folder| url.contains(folder)) {
            continue;
        }
        dbg!(url);
        println!(
            "Started at {}",
            chrono::Local::now().format("%Y-%m-%d %H:%M:%S")
        );

        let client = Client::new();
        let response = match client.get(url).send().await {
            Ok(response) => response,
            Err(e) => {
                eprintln!("Failed to download {}: {}", url, e);
                continue;
            }
        };

        let content_type = response
            .headers()
            .get(reqwest::header::CONTENT_TYPE)
            .and_then(|ct| ct.to_str().ok())
            .and_then(|c| c.split(";").next())
            .unwrap_or("/");

        if !response.status().is_success() {
            println!("Failed: HTTP {}", response.status());
            // return Ok(());
            continue;
        }

        println!("status 200 OK");

        let content_length = response.content_length().unwrap_or(0);
        println!(
            "content size: {} [~{:.2}MB]",
            content_length,
            content_length as f64 / (1024.0 * 1024.0)
        );

        let output_path = if config.mirror {
            match create_mirror_path(&config, url, content_type).await {
                Err(err) => {
                    eprintln!("Failed to download {}: {}", url, err);
                    continue;
                }
                Ok(res) => res,
            }
        } else {
            let filename = config.output_file.as_ref().map_or_else(
                || {
                    url.split('/')
                        .last()
                        .unwrap_or("downloaded_file")
                        .to_string()
                },
                |f| f.clone(),
            );

            let l = filename.clone();

            config
                .output_dir
                .as_ref()
                .map_or_else(|| PathBuf::from(l), |dir| dir.join(filename))
        };

        let mut content_type = content_type.to_string();
        content_type = content_type
            .split("/")
            .last()
            .unwrap_or_default()
            .to_string();

        println!("saving file to: {}", output_path.display());

        let mut file = OpenOptions::new()
            .create(true)
            .write(true)
            .open(&output_path)
            .await
            .map_err(|e| format!("Failed to create file: {}", e))?;

        let mut stream = response.bytes_stream();
        let mut downloaded = 0;
        // let start_time = Instant::now();

        let pb = if !config.background {
            let pb = ProgressBar::new(content_length);
            pb.set_style(
            ProgressStyle::with_template(
                "{spinner:.green} [{elapsed_precise}] [{bar:40.cyan/blue}] {percent_precise:2}%  {bytes_per_sec} ({eta})"
            )
            .unwrap()
            .progress_chars("█░"),
        );
            Some(pb)
        } else {
            None
        };

        let progress_reporter =
            ProgressReporter::new(config.input_file.is_none(), pb, content_length);

        let bytes_per_sec = config
            .rate_limit
            .as_ref()
            .map(|rate| parse_rate_limit(rate))
            .transpose()?
            .unwrap_or(0);

        let mut processing_buf = if config.mirror {
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
            if content_type != "html" || !config.convert_links {
                file.write_all(&chunk)
                    .await
                    .map_err(|e| format!("Failed to write chunk: {}", e))?;
            }

            if config.mirror {
                processing_buf.extend_from_slice(&chunk);
            }

            progress_reporter.update(downloaded);
        }

        progress_reporter.finish();

        if config.mirror {
            let mut html = String::from_utf8_lossy(&processing_buf).into_owned();
            let base_url = Url::parse(url).map_err(|err| err.to_string())?;
            let urls: HashSet<(String, String)> =
                extract_urls(&config.reject, &config.exclude, &html, &base_url).await?;

            if config.convert_links && content_type == "html" {
                html = convert_links(html.clone(), &urls, &base_url);
                write(&output_path, &html)
                    .await
                    .map_err(|e| format!("Failed to write HTML: {}", e))?;
            }

            visited.insert(url.clone());

            for (_, new_url) in urls {
                if !visited.contains(&new_url) {
                    visited.insert(new_url.clone());
                    let mut child_config = config.clone();
                    child_config.url = Some(new_url);

                    // Handle external domains (your existing logic)
                    let parsed_url = Url::parse(&child_config.url.as_ref().unwrap()).unwrap();
                    if let (Some(d1), Some(d2)) = (parsed_url.domain(), base_url.domain()) {
                        if d1 != d2 {
                            child_config.output_dir = match &config.output_dir {
                                Some(out) => {
                                    let mut l1 = out.clone();
                                    l1.push(d2);
                                    Some(l1)
                                }
                                None => Some(PathBuf::from(d2)),
                            }
                        }
                    }

                    queue.push_back(child_config);
                }
            }

            // let results = futures::future::join_all(child_tasks).await;
            // for result in results {
            //     result?;
            // }
        }

        println!("Finished downloading {}", url);
    }

    Ok(())
}

pub fn download(config: DownloadConfig) -> BoxFuture<'static, Result<(), String>> {
    let urls: HashSet<String> = HashSet::new();
    async move { download_url(config, urls).await }.boxed()
}
