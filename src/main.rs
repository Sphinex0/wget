mod cli;
mod downloader;
mod logger;
mod mirror;
mod models;

use std::fs::{self, OpenOptions};

use cli::*;
use daemonize::Daemonize;
use downloader::*;
use tokio::runtime::Runtime;

fn main() -> Result<(), String> {
    let config: DownloadConfig = parse_args()?;

    if config.background {
        daemon_main(config)
    } else {
        foreground_main(config)
    }
}

fn daemon_main(config: DownloadConfig) -> Result<(), String> {
    // Create logs directory if needed
    fs::create_dir_all("logs").map_err(|e| format!("Failed to create logs directory: {}", e))?;

    // Prepare log files
    let stdout_file = OpenOptions::new()
        .create(true)
        .append(true)
        .open("logs/wget-log.log")
        .map_err(|e| format!("Failed to create log file: {}", e))?;

    let stderr_file = OpenOptions::new()
        .create(true)
        .append(true)
        .open("logs/err-log.log")
        .map_err(|e| format!("Failed to create error log file: {}", e))?;

    // Set up daemonization
    let daemonize = Daemonize::new()
        .pid_file("logs/pid.txt")
        .working_directory(".")
        .stdout(stdout_file)
        .stderr(stderr_file);

    // Start daemon
    match daemonize.start() {
        Ok(_) => {
            // In daemon child process
            let rt = Runtime::new().map_err(|e| e.to_string())?;
            rt.block_on(async_download(config))
        }
        Err(e) => Err(format!("Daemonization error: {}", e)),
    }
}

fn foreground_main(config: DownloadConfig) -> Result<(), String> {
    let rt = Runtime::new().map_err(|e| e.to_string())?;
    rt.block_on(async_download(config))
}

async fn async_download(config: DownloadConfig) -> Result<(), String> {
    match &config.input_file {
        None => {
            if !config.background {
                println!("Downloading: {:?}", config.url);
            }

            download(&config).await?;

            if config.mirror {
                log::info!(
                    "Mirroring website with reject_types: {:?}",
                    config.reject_types
                );
                log::info!("Excluding directories: {:?}", config.exclude_dirs);
                if config.convert_links {
                    log::info!("Converting links for offline viewing");
                }
            }
        }
        Some(input_file) => {
            let urls = parse_input_file(&input_file).map_err(|e| e.to_string())?;
            log::info!("Downloading multiple files: {:?}", urls);
            // Implement multi-file download logic here
        }
    }
    Ok(())
}
