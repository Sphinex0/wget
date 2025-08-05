use crate::cli::DownloadConfig;
use crate::rate_limiter::parse_rate_limit;
use futures::FutureExt;
use futures::{StreamExt, future::BoxFuture};
use indicatif::{ProgressBar, ProgressStyle};
use reqwest::Client;
use scraper::{Html, Selector};
use std::collections::HashSet;
use std::path::PathBuf;
use std::time::{Duration, Instant};
use tokio::{fs::File, io::AsyncWriteExt};
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

// async fn create_mirror_path(config: &DownloadConfig, url: &str) -> Result<PathBuf, String> {
//     let url_parser = Url::parse(url).map_err(|err| err.to_string())?;
//     let domain = url_parser
//         .domain()
//         .ok_or_else(|| "URL has no domain".to_string())?;

//     let mut path = config.output_dir.clone().unwrap_or_default();
//     path.push(domain);

//     tokio::fs::create_dir_all(&path)
//         .await
//         .map_err(|err| err.to_string())?;

//     let mut file_path = path;
//     file_path.push(url_parser.path().trim_start_matches('/'));

//     if let Some(parent) = file_path.parent() {
//         tokio::fs::create_dir_all(parent)
//             .await
//             .map_err(|err| err.to_string())?;
//     }

//     Ok(file_path)
// }

async fn create_mirror_path(config: &DownloadConfig, url: &str) -> Result<PathBuf, String> {
    let url_parser = Url::parse(url).map_err(|err| err.to_string())?;
    let domain = url_parser
        .domain()
        .ok_or_else(|| "URL has no domain".to_string())?;

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

    dbg!(&path);

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

async fn extract_urls(
    reject: &Vec<String>,
    execlud: &Vec<String>,
    html: &str,
    base_url: &Url,
) -> Result<HashSet<String>, String> {
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
                el.value()
                    .attr("href")
                    .or_else(|| el.value().attr("src"))
                    .map(|u| u.split('#').next().unwrap_or("").to_string())
            })
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
                            ) || execlud.iter().any(|folder| url.path().contains(folder)) && execlud.len() != 0
                            {
                                None
                            } else {
                                Some(url.to_string())
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
                                ) || execlud.iter().all(|folder| url.path().contains(folder)) && execlud.len() != 0
                                {
                                    None
                                } else {
                                    Some(url.to_string())
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
                let new_path = PathBuf::from(&u);
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

async fn download_url(config: DownloadConfig) -> Result<(), String> {
    let url = config.url.as_ref().ok_or("No URL provided")?;
    println!(
        "Started at {}",
        chrono::Local::now().format("%Y-%m-%d %H:%M:%S")
    );

    let client = Client::new();
    let response = client
        .get(url)
        .timeout(Duration::from_secs(5))
        .send()
        .await
        .map_err(|e| format!("Failed to send request: {}", e))?;

    let content_type = response
        .headers()
        .get(reqwest::header::CONTENT_TYPE)
        .and_then(|ct| ct.to_str().ok())
        .and_then(|c| c.split(";").next())
        .unwrap_or("/");

    if !response.status().is_success() {
        println!("Failed: HTTP {}", response.status());
        return Ok(());
    }

    println!("status 200 OK");

    let content_length = response.content_length().unwrap_or(0);
    println!(
        "content size: {} [~{:.2}MB]",
        content_length,
        content_length as f64 / (1024.0 * 1024.0)
    );

    let mut output_path = if config.mirror {
        create_mirror_path(&config, url).await?
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

    if output_path.extension().is_none() {
        output_path.set_extension(content_type.split("/").last().unwrap_or_default());
    }

    println!("saving file to: {}", output_path.display());
    let mut file = File::create(&output_path)
        .await
        .map_err(|e| format!("Failed to create file: {}", e))?;

    let mut stream = response.bytes_stream();
    let mut downloaded = 0;
    // let start_time = Instant::now();

    let pb = if !config.background {
        let pb = ProgressBar::new(content_length);
        pb.set_style(
            ProgressStyle::default_bar()
                .template(
                    "{spinner:.green} [{elapsed_precise}] [{bar:40.cyan/blue}] {bytes}/{total_bytes} ({eta})",
                )
                .unwrap()
                .progress_chars("#>-"),
        );
        Some(pb)
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

    let mut processing_buf = if config.mirror {
        Vec::with_capacity(content_length as usize)
    } else {
        Vec::new()
    };

    while let Some(chunk) = stream.next().await {
        let chunk = chunk.map_err(|e| format!("Failed to read chunk: {}", e))?;

        if bytes_per_sec > 0 {
            let sleep_duration = Duration::from_secs_f64(chunk.len() as f64 / bytes_per_sec as f64);
            tokio::time::sleep(sleep_duration).await;
        }

        downloaded += chunk.len() as u64;
        file.write_all(&chunk)
            .await
            .map_err(|e| format!("Failed to write chunk: {}", e))?;

        if config.mirror {
            processing_buf.extend_from_slice(&chunk);
        }

        progress_reporter.update(downloaded);
    }

    progress_reporter.finish();

    if config.mirror {
        let html = String::from_utf8_lossy(&processing_buf).into_owned();
        let base_url = Url::parse(url).map_err(|err| err.to_string())?;
        let urls = extract_urls(&config.reject, &config.exclude, &html, &base_url).await?;

        let mut child_tasks = Vec::new();
        for url in urls {
            let mut child_config = config.clone();
            let secend_bate_url = Url::parse(&url).unwrap();

            child_config.url = Some(url);
            if let Some(d1) = secend_bate_url.domain()
                && let Some(d2) = base_url.domain()
                && d1 != d2
            {
                child_config.output_dir = Some(PathBuf::from(
                    base_url.domain().ok_or("Invalid base URL domain")?,
                ));
            }

            child_tasks.push(download_url(child_config));
        }

        let results = futures::future::join_all(child_tasks).await;
        for result in results {
            result?;
        }
    }

    println!("Finished downloading {}", url);
    Ok(())
}

pub fn download(config: DownloadConfig) -> BoxFuture<'static, Result<(), String>> {
    async move { download_url(config).await }.boxed()
}
