use std::{env, fs::OpenOptions, process::Command};

use anyhow::Result;
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
async fn main() -> Result<()> {
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
            .open("wget-log.log")?;
        let child = Command::new(filtered_args.next().unwrap())
            .args(filtered_args)
            .stdout(fd.try_clone()?)
            .stderr(fd)
            .spawn()?;
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
async fn async_download(mut config: DownloadConfig) -> Result<()> {
    let multi_progress = create_multi_progress();
    match &config.input_file {
        None => {
            if let Some(path_buf) = config.output_dir {
                config.output_dir = Some(path_buf.expand_tilde()?.to_path_buf());
            }

            if let Some(path_buf) = config.output_file {
                config.output_file = Some(path_buf.expand_tilde()?.to_string_lossy().to_string());
            }

            download_queue(config.clone(), multi_progress).await?;
        }
        Some(input_file) => {
            let urls = parse_input_file(input_file)?;
            let tasks: Vec<_> = urls
                .into_iter()
                .map(|url| {
                    config.url = Some(url);
                    let task_config = config.clone();
                    let mp = multi_progress.clone();
                    tokio::spawn(async { download_queue(task_config, mp).await })
                })
                .collect();

            join_all(tasks).await;
        }
    }
    Ok(())
}
