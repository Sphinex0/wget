// mod cli;
// mod downloader;
// mod logger;
// mod mirror;
// mod models;

// #[cfg(unix)]
// use std::process::{Command as Task, Stdio};
// use std::{
//     fs::OpenOptions,
//     io::{self, Write, stdout},
//     mem,
//     time::Duration,
// };

// #[cfg(unix)]
// use clap::Command;
// use clap::CommandFactory;
// use cli::*;
// use daemonize::Daemonize;
// use downloader::*;
// use logger::*;
// use mirror::*;
// use simple_logger::SimpleLogger;
// use tokio::task;

// // #[tokio::main]
// // async fn main() {
// //     let config = cli::parse_args();

// // if config.background {
// //     logger::init_background_logger();
// // }

// // if config.mirror {
// //     mirror::mirror_site(&config).await.unwrap();
// // } else {
// //     downloader::download_file(&config).await.unwrap();
// // }
// // }

// #[tokio::main]
// async fn main() -> Result<(), String> {
//     let config: DownloadConfig = parse_args()?;
//     //dbg!(&config);
//     match &config.input_file {
//         None => {
//             // let mut stdout = None;

//             let output_writer: Box<dyn Write> = if config.background {
//                 // Print to console as specified
//                 println!("Output will be written to 'wget-log'");

//                 // Create the log file
//                 let log_file = OpenOptions::new()
//                     .create(true)
//                     .append(true)
//                     .open("logs/wget-log")
//                     .unwrap();

//                 let log_file_err = OpenOptions::new()
//                     .create(true)
//                     .append(true)
//                     .open("logs/err-log")
//                     .unwrap();

//                 // Set up daemonization
//                 let daemonize = Daemonize::new()
//                     .pid_file("logs/pid.txt")
//                     .working_directory(".")
//                     .stdout(log_file.try_clone().unwrap())
//                     .stderr(log_file_err);

//                 // Actually start the daemon
//                 match daemonize.start() {
//                     Ok(_) => println!("Daemon started successfully"),
//                     Err(e) => {
//                         eprintln!("Error starting daemon: {}", e);
//                         return Err(e.to_string());
//                     }
//                 }

//                 // For daemon mode, create a new file handle for the downloader
//                 Box::new(log_file)
//             } else {
//                 // Foreground mode - use stdout
//                 Box::new(io::stdout())
//             };

//             // Foreground download
//             println!("Downloading: {:?}", config.url);

//             downloader::download(&config, output_writer).await?;

//             if config.mirror {
//                 println!(
//                     "Mirroring website with reject_types: {:?}",
//                     config.reject_types
//                 );
//                 println!("Excluding directories: {:?}", config.exclude_dirs);
//                 if config.convert_links {
//                     println!("Converting links for offline viewing");
//                 }
//             }
//         }
//         Some(input_file) => {
//             let urls = cli::parse_input_file(&input_file).expect("Failed to read input file");
//             println!("Downloading multiple files: {:?}", urls);
//         }
//     }
//     Ok(())
// }

mod cli;
mod downloader;
mod logger;
mod mirror;
mod models;
mod rate_limiter;

use cli::*;
use daemonize::Daemonize;
use downloader::*;
use futures::future::join_all;
use std::{
    fs::{self, OpenOptions},
    thread::scope,
};
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

async fn async_download(mut config: DownloadConfig) -> Result<(), String> {
    // Initialize logger based on mode
    // if config.background {
    //     init_background_logger();
    // } else {
    //     init_foreground_logger();
    // }

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
            let tasks: Vec<_> = urls
                .into_iter()
                .map(|url| {
                    config.url = Some(url);
                    let task_config = config.clone();
                    tokio::spawn(async move { download(&task_config).await })
                })
                .collect();

            // Wait for all tasks to complete
            join_all(tasks).await;

            //log::info!("Downloading multiple files: {:?}", urls);
            // Implement multi-file download logic here
        }
    }
    Ok(())
}
