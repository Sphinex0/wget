use std::{env, fs::OpenOptions, process::Command};

use expand_tilde::ExpandTilde;
use futures::future::join_all;
use wget::cli::*;
use wget::downloader::*;
use wget::progress::create_multi_progress;
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
        println!("Output will be written to ‘wget-log’.");
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
    let multi_progress = create_multi_progress();
    match &config.input_file {
        None => {
            if !config.background {
                println!("Downloading: {:?}", config.url);
            }

            if let Some(path_buf) = config.output_dir {
                config.output_dir = Some(
                    path_buf
                        .expand_tilde()
                        .map_err(|err| err.to_string())?
                        .to_path_buf(),
                );
            }

            if let Some(path_buf) = config.output_file {
                config.output_file = Some(
                    path_buf
                        .expand_tilde()
                        .map_err(|err| err.to_string())?
                        .to_string_lossy()
                        .to_string(),
                );
            }

            download(config.clone(),multi_progress.clone()).await?;

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
                    let mp = multi_progress.clone();
                    tokio::spawn(async move { download_with_progress(task_config, mp).await })
                })
                .collect();

            join_all(tasks).await;
        }
    }
    Ok(())
}
