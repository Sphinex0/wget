use clap::{Parser, CommandFactory};
use std::path::PathBuf;

/// Configuration for the download process, parsed from CLI arguments.
#[derive(Parser, Debug, Clone)]
#[clap(
    name = "wget-rs",
    about = "A wget-like utility for downloading files and mirroring websites",
    version = "0.1.0",
    author = "Your Name"
)]
pub struct DownloadConfig {
    /// URL to download (e.g., https://example.com/file.zip).
    /// This is optional if an input file is provided.
    #[clap(value_parser, help = "The URL of the file or website to download")]
    pub url: Option<String>,

    /// Run download in background and log to wget-log.
    /// If set, the process will daemonize.
    #[clap(short = 'B', long, help = "Download in background and redirect output to 'wget-log'")]
    pub background: bool,

    /// Output filename.
    /// If not provided, the filename will be derived from the URL.
    #[clap(short = 'O', long, help = "Save the downloaded file with a custom name")]
    pub output_file: Option<String>,

    /// Output directory.
    /// If not provided, the current directory is used.
    #[clap(short = 'P', long, help = "Save the downloaded file to a specific directory")]
    pub output_dir: Option<PathBuf>,

    /// Download speed limit (e.g., 400k, 2M).
    /// If not set, there is no speed limit.
    #[clap(long, help = "Set a download speed limit")]
    pub rate_limit: Option<String>,

    /// Mirror a website.
    /// If set, the tool will recursively download linked resources.
    #[clap(long, help = "Download an entire website for offline use")]
    pub mirror: bool,

    /// File types to reject (e.g., jpg,gif).
    /// Used during mirroring to exclude specific file extensions.
    #[clap(short = 'R', long, value_delimiter = ',', help = "File types to exclude during mirroring")]
    pub reject: Vec<String>,

    /// Directories to exclude (e.g., /js,/css).
    /// Used during mirroring to exclude specific paths.
    #[clap(short = 'X', long, value_delimiter = ',', help = "Directories to exclude during mirroring")]
    pub exclude: Vec<String>,

    /// Convert links for offline viewing.
    /// If set, HTML links will be rewritten to point to local files.
    #[clap(long, help = "Convert website links to point to local files")]
    pub convert_links: bool,

    /// File containing URLs to download.
    /// Allows batch downloading from a list.
    #[clap(short = 'i', long, help = "Download multiple files from a list of URLs in a file")]
    pub input_file: Option<PathBuf>,
}

/// Parses command-line arguments into a `DownloadConfig` struct.
///
/// This function handles the CLI parsing using `clap`. It also performs
/// validation to ensure that either a URL or an input file is provided.
///
/// # Returns
///
/// * `Ok(DownloadConfig)` - If arguments are valid.
/// * `Err(String)` - If parsing fails or required arguments are missing.
pub fn parse_args() -> Result<DownloadConfig, String> {
    let config = DownloadConfig::parse();

    // Check if neither url nor input_file is provided
    if config.url.is_none() && config.input_file.is_none() {
        let mut cmd = DownloadConfig::command();
        cmd.print_help().map_err(|e| format!("Failed to print help: {}", e))?;
        return Err("Must provide either a URL or an input file (-i)".to_string());
    }

    Ok(config)
}