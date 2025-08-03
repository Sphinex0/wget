use clap::{Parser, CommandFactory};
use std::path::PathBuf;
use std::fs;

// Main CLI parser
#[derive(Parser, Debug,Clone)]
#[clap(
    name = "wget-rs",
    about = "A wget-like utility for downloading files and mirroring websites",
    version = "0.1.0",
    author = "Your Name"
)]
pub struct DownloadConfig {
    /// URL to download (e.g., https://example.com/file.zip)
    #[clap(value_parser, help = "The URL of the file or website to download")]
    pub url: Option<String>,
    /// Run download in background and log to wget-log
    #[clap(short = 'B', long, help = "Download in background and redirect output to 'wget-log'")]
    pub background: bool,
    /// Output filename
    #[clap(short = 'O', long, help = "Save the downloaded file with a custom name")]
    pub output_file: Option<String>,
    /// Output directory
    #[clap(short = 'P', long, help = "Save the downloaded file to a specific directory")]
    pub output_dir: Option<PathBuf>,
    /// Download speed limit (e.g., 400k, 2M)
    #[clap(long, help = "Set a download speed limit")]
    pub rate_limit: Option<String>,
    /// Mirror a website
    #[clap(long, help = "Download an entire website for offline use")]
    pub mirror: bool,
    /// File types to reject (e.g., jpg,gif)
    #[clap(short = 'R', long, value_delimiter = ',', help = "File types to exclude during mirroring")]
    pub reject_types: Vec<String>,
    /// Directories to exclude (e.g., /js,/css)
    #[clap(short = 'X', long, value_delimiter = ',', help = "Directories to exclude during mirroring")]
    pub exclude_dirs: Vec<String>,
    /// Convert links for offline viewing
    #[clap(long, help = "Convert website links to point to local files")]
    pub convert_links: bool,
    /// File containing URLs to download
    #[clap(short = 'i', long, help = "Download multiple files from a list of URLs in a file")]
    pub input_file: Option<PathBuf>,
}



// Parse input file containing URLs
pub fn parse_input_file(file: &PathBuf) -> Result<Vec<String>, String> {
    let content = fs::read_to_string(file)
        .map_err(|e| format!("Failed to read input file: {}", e))?;
    Ok(content.lines()
        .map(|s| s.trim())
        .filter(|s| !s.is_empty())
        .map(String::from)
        .collect())
}

// Main parsing function    
pub fn parse_args() -> Result<DownloadConfig, String> {
    let config = match DownloadConfig::try_parse() {
        Ok(config) => config,
        Err(e) => {
            // Print help for parsing errors
            let mut cmd = DownloadConfig::command();
            cmd.print_help().map_err(|e| format!("Failed to print help: {}", e))?;
            return Err(e.to_string());
        }
    };

    // Check if neither url nor input_file is provided
    if config.url.is_none() && config.input_file.is_none() {
        let mut cmd = DownloadConfig::command();
        cmd.print_help().map_err(|e| format!("Failed to print help: {}", e))?;
        return Err("Must provide either a URL or an input file (-i)".to_string());
    }

    Ok(config)
}