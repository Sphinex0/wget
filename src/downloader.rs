use crate::cli::{DownloadConfig, parse_rate_limit};
use bytes::Bytes;
use futures::StreamExt;
use indicatif::{ProgressBar, ProgressStyle};
use reqwest::Client;
use std::path::PathBuf;
use std::time::{Duration, Instant};
use tokio::fs::File;
use tokio::io::AsyncWriteExt;

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
            .send()
            .await
            .map_err(|e| format!("Failed to send request: {}", e))?;

        // Check status
        if response.status() != 200 {
            return Err(format!("Failed: HTTP {}", response.status()));
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

        // Create output file
        let mut file = File::create(&output_path)
            .await
            .map_err(|e| format!("Failed to create file: {}", e))?;

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

            // Update progress bar for foreground mode, log for background mode
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
