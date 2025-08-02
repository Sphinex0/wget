mod cli;
mod downloader;
mod logger;
mod mirror;
mod models;

#[cfg(unix)]
use std::process::{Command as Task, Stdio};
use std::{
    fs::OpenOptions,
    io::{self, Write, stdout},
    mem,
    time::Duration,
};

#[cfg(unix)]
use clap::Command;
use clap::CommandFactory;
use cli::*;
use daemonize::Daemonize;
use downloader::*;
use logger::*;
use mirror::*;
use simple_logger::SimpleLogger;
use tokio::task;

// #[tokio::main]
// async fn main() {
//     let config = cli::parse_args();

// if config.background {
//     logger::init_background_logger();
// }

// if config.mirror {
//     mirror::mirror_site(&config).await.unwrap();
// } else {
//     downloader::download_file(&config).await.unwrap();
// }
// }

#[tokio::main]
async fn main() -> Result<(), String> {
    let config: DownloadConfig = parse_args()?;
    //dbg!(&config);
    match &config.input_file {
        None => {
            // let mut stdout = None;

            let output_writer: Box<dyn Write> = if config.background {
                // Print to console as specified
                println!("Output will be written to 'wget-log'");

                // Create the log file
                let log_file = OpenOptions::new()
                    .create(true)
                    .append(true)
                    .open("logs/wget-log")
                    .unwrap();

                let log_file_err = OpenOptions::new()
                    .create(true)
                    .append(true)
                    .open("logs/err-log")
                    .unwrap();

                // Set up daemonization
                let daemonize = Daemonize::new()
                    .pid_file("logs/pid.txt")
                    .working_directory(".")
                    .stdout(log_file.try_clone().unwrap())
                    .stderr(log_file_err);

                // Actually start the daemon
                match daemonize.start() {
                    Ok(_) => println!("Daemon started successfully"),
                    Err(e) => {
                        eprintln!("Error starting daemon: {}", e);
                        return Err(e.to_string());
                    }
                }

                // For daemon mode, create a new file handle for the downloader
                Box::new(log_file)
            } else {
                // Foreground mode - use stdout
                Box::new(io::stdout())
            };

            // Foreground download
            println!("Downloading: {:?}", config.url);

            downloader::download(&config, output_writer).await?;

            if config.mirror {
                println!(
                    "Mirroring website with reject_types: {:?}",
                    config.reject_types
                );
                println!("Excluding directories: {:?}", config.exclude_dirs);
                if config.convert_links {
                    println!("Converting links for offline viewing");
                }
            }
        }
        Some(input_file) => {
            let urls = cli::parse_input_file(&input_file).expect("Failed to read input file");
            println!("Downloading multiple files: {:?}", urls);
        }
    }
    Ok(())
}
