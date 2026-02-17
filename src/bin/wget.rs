use std::{
    env,
    fs::OpenOptions, process::Command,
};

use wget::cli::*;
use wget::downloader::*;
use futures::future::join_all;
use wget::utils::parse_input_file;

/// Main entry point for the wget-rs application.
///
/// This function parses command-line arguments and handles process execution.
/// If the background flag (`-B` or `--background`) is set, it spawns a new child process
/// with the same arguments (excluding the background flag) and redirects stdout/stderr
/// to `wget-log.log`.
#[tokio::main]
async fn main() -> Result<(), String> {
    let config: DownloadConfig = parse_args()?;

    let args: Vec<String> = env::args().collect();
    let mut filtered_args = args
        .iter()
        .filter(|&op| op != "--background" && op != "-B")
        .cloned();

    if config.background {
        let fd = OpenOptions::new()
            .create(true)
            .append(true)
            .open("wget-log.log")
            .map_err(|e| e.to_string())?;
        let child = Command::new(filtered_args.next().unwrap())
            .args(filtered_args)
            .stdout(fd.try_clone().map_err(|e| e.to_string())?)
            .stderr(fd)
            .spawn()
            .map_err(|e| e.to_string())?;
        println!("Started background process with PID: {}", child.id());
        Ok(())
    } else {
        async_download(config).await
    }
}

/// Core asynchronous logic for downloading files.
///
/// This function handles two main modes:
/// 1. Single URL download (optionally mirrored).
/// 2. Batch download from an input file.
///
/// # Arguments
///
/// * `config` - The download configuration.
async fn async_download(mut config: DownloadConfig) -> Result<(), String> {
    match &config.input_file {
        None => {
            if !config.background {
                println!("Downloading: {:?}", config.url);
            }

            download(config.clone()).await?;

            if config.mirror {
                log::info!("Mirroring website with reject_types: {:?}", config.reject);
                log::info!("Excluding directories: {:?}", config.exclude);
                if config.convert_links {
                    log::info!("Converting links for offline viewing");
                }
            }
        }
        Some(input_file) => {
            let urls = parse_input_file(&input_file).map_err(|e| e.to_string())?;
            let tasks: Vec<_> = urls
                .into_iter()
                .map(|url| {
                    config.url = Some(url);
                    let task_config = config.clone();
                    tokio::spawn(async move { download(task_config).await })
                })
                .collect();

            join_all(tasks).await;
            // run_multi_urls(urls,config.clone()).await;
        }
    }
    Ok(())
}
