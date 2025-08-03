use crate::cli::DownloadConfig;
use crate::rate_limiter::parse_rate_limit;
use crate::run_multi_urls;
use bytes::Bytes;
use futures::StreamExt;
use futures::future::join_all;
use indicatif::{ProgressBar, ProgressStyle};
use reqwest::Client;
use scraper::{Html, Selector};
use std::collections::{HashMap, HashSet};
use std::fs::{create_dir, create_dir_all};
use std::path::PathBuf;
use std::time::{Duration, Instant};
use tokio::fs::File;
use tokio::io::AsyncWriteExt;
use url::Url;

pub async fn download(config: &DownloadConfig) -> Result<(), String> {
    let client = Client::new();
    if let Some(url) = &config.url {
        println!(
            "{}",
            format!(
                "start at {}",
                chrono::Local::now().format("%Y-%m-%d %H:%M:%S")
            )
        );
        println!("{}", format!("sending request, awaiting response..."));

        // Send HTTP GET request
        let response = client
            .get(url)
            .timeout(Duration::from_secs(5))
            .send()
            .await
            .map_err(|e| format!("Failed to send request: {}", e))?;

        // Check status
        if response.status() != 200 {
            println!("Failed: HTTP {}", response.status());
            return Ok(());
        }
        println!("{}", format!("status 200 OK"));

        // Get content length
        let content_length = response.content_length().unwrap_or(0);
        println!(
            "{}",
            format!(
                "content size: {} [~{:.2}MB]",
                content_length,
                content_length as f64 / (1024.0 * 1024.0)
            )
        );

        // Determine output path
        let output_path = config.output_file.as_ref().map_or_else(
            || {
                url.split('/')
                    .last()
                    .unwrap_or("downloaded_file")
                    .to_string()
            },
            |f| f.clone(),
        );
        let output_path = config
            .output_dir
            .as_ref()
            .map_or_else(|| PathBuf::from(&output_path), |dir| dir.join(&output_path));
        println!("{}", format!("saving file to: {}", output_path.display()));
        let url_parser = Url::parse(url).map_err(|err| err.to_string())?;
        let mut file: File;
        if config.mirror {
            if let Err(err) = create_dir(url_parser.domain().unwrap()) {
                match err.kind() {
                    std::io::ErrorKind::AlreadyExists => {}
                    _ => return Err(err.to_string()),
                }
            }
            dbg!(url_parser.path());
            let mut path = PathBuf::from(url_parser.path());
            path.pop();
            let res = url_parser.domain().unwrap().to_string() + &path.display().to_string();
            create_dir_all(res).map_err(|err| err.to_string())?;

            // Create output file
            file = File::create(url_parser.domain().unwrap().to_string() + url_parser.path())
                .await
                .map_err(|e| format!("Failed to create file: {}", e))?;
        } else {
            // Create output file
            file = File::create(&output_path)
                .await
                .map_err(|e| format!("Failed to create file: {}", e))?;
        }

        // Stream download with progress
        let mut stream = response.bytes_stream();
        let start_time = Instant::now();
        let mut downloaded = 0;

        // ProgressBar setup (only for foreground mode)
        let pb = if !config.background {
            let pb = ProgressBar::new(content_length);
            pb.set_style(
                ProgressStyle::default_bar()
                    .template("{spinner:.green} [{elapsed_precise}] [{bar:40.cyan/blue}] {bytes}/{total_bytes} ({eta})")
                    .unwrap()
                    .progress_chars("#>-")
            );
            Some(pb)
        } else {
            None
        };

        let bytes_per_sec = if let Some(rate) = &config.rate_limit {
            parse_rate_limit(rate)?
        } else {
            0
        };

        let mut processing_buf = Vec::new();
        while let Some(chunk) = stream.next().await {
            let chunk: Bytes = chunk.map_err(|e| format!("Failed to read chunk: {}", e))?;
            if bytes_per_sec > 0 {
                let sleep_duration =
                    Duration::from_secs_f64(chunk.len() as f64 / bytes_per_sec as f64);
                tokio::time::sleep(sleep_duration).await;
            }
            downloaded += chunk.len() as u64;
            file.write_all(&chunk)
                .await
                .map_err(|e| format!("Failed to write chunk: {}", e))?;

            if config.mirror {
                processing_buf.extend_from_slice(&chunk);
            }

            // Update progress bar for foreground mode, log for background mode
            if config.input_file.is_none() {
                if let Some(pb) = &pb {
                    pb.set_position(downloaded);
                } else {
                    let percent = if content_length > 0 {
                        (downloaded as f64 / content_length as f64) * 100.0
                    } else {
                        0.0
                    };
                    let elapsed = start_time.elapsed().as_secs_f64();
                    let speed = if elapsed > 0.0 {
                        downloaded as f64 / elapsed / (1024.0 * 1024.0)
                    } else {
                        0.0
                    };
                    let eta = if speed > 0.0 {
                        ((content_length - downloaded) as f64 / (speed * 1024.0 * 1024.0)) as u64
                    } else {
                        0
                    };
                    let bar = "=".repeat((percent / 2.0) as usize);
                    let padded_bar = format!("{:50}", bar); // Pad to 50 characters
                    println!(
                        "{}",
                        format!(
                            "{:.2} KiB / {:.2} KiB [{}] {:.2}% {:.2} MiB/s {}s",
                            downloaded as f64 / 1024.0,
                            content_length as f64 / 1024.0,
                            padded_bar,
                            percent,
                            speed,
                            eta
                        )
                    );
                }
            }
        }

        // if config.mirror {
        //     let text = String::from_utf8_lossy(&processing_buf);
        //     let document = Html::parse_document(&text);
        //     let selectors = Selector::parse("a[href],img[src],link[href]")
        //         .map_err(|e| format!("Error : {:?}", e))?;

        //     let links = document.select(&selectors);
        //     let mut urls = HashSet::new();

        //     for link in links {
        //         let l = if let Some(href) = link.value().attr("href") {
        //             href
        //         } else if let Some(src) = link.value().attr("src") {
        //             src
        //         } else {
        //             return Err(String::from("fff"));
        //         };

        //         let res: Vec<&str> = l.split("#").collect();
        //         if !res[0].is_empty() {
        //             match Url::parse(res[0]) {
        //                 Ok(new_url) => {
        //                     urls.insert(new_url.to_string());
        //                 }
        //                 Err(err) => match err {
        //                     url::ParseError::RelativeUrlWithoutBase => {
        //                         let mut n_u = url_parser.clone();
        //                         n_u.set_path(res[0]);
        //                         urls.insert(n_u.to_string());
        //                     }
        //                     _ => {
        //                         return Err(String::new());
        //                     }
        //                 },
        //             }

        //             // urls.insert(new_url);
        //         };
        //     }

        //     // dbg!(urls);
        //     let mut config = config.clone();
        //     let tasks: Vec<_> = urls
        //         .into_iter()
        //         .map(|url| {
        //             config.url = Some(url);
        //             let task_config = config.clone();
        //             tokio::spawn(async move { download(&task_config).await })
        //         })
        //         .collect();

        //     join_all(tasks).await;

        //     // run_multi_urls(urls.into_iter().collect(),config.clone()).await;
        // }

        if config.mirror {
            let text = String::from_utf8_lossy(&processing_buf).into_owned();
            let urls = tokio::task::spawn_blocking(move || {
                let document = Html::parse_document(&text);
                let selectors = Selector::parse("a[href],img[src],link[href]").unwrap();
                document
                    .select(&selectors)
                    .filter_map(|link| {
                        let attr = link.value().attr("href").or(link.value().attr("src"))?;
                        let clean_url = attr.split('#').next().unwrap_or("");
                        if clean_url.is_empty() {
                            None
                        } else {
                            Some(clean_url.to_string())
                        }
                    })
                    .collect::<HashSet<_>>()
            })
            .await
            .map_err(|e| e.to_string())?;

            for url in urls {
                let mut task_config = config.clone();
                task_config.url = Some(url);
                download(&task_config).await; // Directly await the future
            }

            // Run all downloads concurrently
            // join_all(futures).await;
        }
        if let Some(pb) = pb {
            pb.finish_with_message("Download complete");
        }

        println!(
            "{}",
            format!(
                "Downloaded [{}] finished at {}",
                url,
                chrono::Local::now().format("%Y-%m-%d %H:%M:%S")
            )
        );
        Ok(())
    } else {
        Err("No URL provided".to_string())
    }
}



///////////////////////////////////
/* 
use crate::cli::DownloadConfig;
use bytes::Bytes;
use futures::future::{BoxFuture, FutureExt};
use futures::StreamExt;
use indicatif::{ProgressBar, ProgressStyle};
use reqwest::Client;
use scraper::{Html, Selector};
use std::collections::HashSet;
use std::path::PathBuf;
use std::time::{Duration, Instant};
use tokio::fs::File;
use tokio::io::AsyncWriteExt;
use url::Url;

pub fn download(config: DownloadConfig) -> BoxFuture<'static, Result<(), String>> {
    async move {
        let client = Client::new();
        if let Some(url) = &config.url {
            println!(
                "Started at {}",
                chrono::Local::now().format("%Y-%m-%d %H:%M:%S")
            );

            // Send HTTP request
            let response = client
                .get(url)
                .timeout(Duration::from_secs(5))
                .send()
                .await
                .map_err(|e| format!("Request failed: {}", e))?;

            if !response.status().is_success() {
                println!("Failed: HTTP {}", response.status());
                return Ok(());
            }

            let content_length = response.content_length().unwrap_or(0);
            println!(
                "Downloading {} ({:.2} MB)",
                url,
                content_length as f64 / (1024.0 * 1024.0)
            );

            // Setup progress bar
            let pb = if !config.background {
                let pb = ProgressBar::new(content_length);
                pb.set_style(
                    ProgressStyle::default_bar()
                        .template("{spinner} [{elapsed}] [{bar:40}] {bytes}/{total_bytes} ({eta})")
                        .unwrap(),
                );
                Some(pb)
            } else {
                None
            };

            // Create output file
            let output_path = config.output_file.as_ref().map_or_else(
                || PathBuf::from(url.split('/').last().unwrap_or("index.html")),
                |f| config.output_dir.as_ref().map_or(PathBuf::from(f), |dir| dir.join(f)),
            );

            let mut file = File::create(&output_path)
                .await
                .map_err(|e| format!("Failed to create file: {}", e))?;

            // Download chunks
            let mut stream = response.bytes_stream();
            let mut downloaded = 0;
            let mut processing_buf = Vec::new();

            while let Some(chunk) = stream.next().await {
                let chunk = chunk.map_err(|e| format!("Chunk error: {}", e))?;
                downloaded += chunk.len();
                file.write_all(&chunk)
                    .await
                    .map_err(|e| format!("Write error: {}", e))?;

                if let Some(pb) = &pb {
                    pb.set_position(downloaded as u64);
                }

                if config.mirror {
                    processing_buf.extend_from_slice(&chunk);
                }
            }

            // Mirroring logic
            if config.mirror {
                let text = String::from_utf8_lossy(&processing_buf).into_owned();
                let urls = tokio::task::spawn_blocking(move || {
                    let document = Html::parse_document(&text);
                    let selector = Selector::parse("a[href],img[src],link[href]").unwrap();
                    document
                        .select(&selector)
                        .filter_map(|el| {
                            el.value()
                                .attr("href")
                                .or_else(|| el.value().attr("src"))
                                .map(|u| u.split('#').next().unwrap_or("").to_string())
                        })
                        .collect::<HashSet<_>>()
                })
                .await
                .map_err(|e| e.to_string())?;

                // Process child URLs recursively
                let mut child_tasks = Vec::new();
                for url in urls {
                    let mut child_config = config.clone();
                    child_config.url = Some(url);
                    child_tasks.push(download(child_config));
                }

                let results = futures::future::join_all(child_tasks).await;
                for result in results {
                    result?; // Propagate errors
                }
            }

            if let Some(pb) = pb {
                pb.finish_with_message("Download complete");
            }
            println!("Finished downloading {}", url);
            Ok(())
        } else {
            Err("No URL provided".to_string())
        }
    }
    .boxed()
}
*/

