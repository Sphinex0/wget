use clap::{Parser, Subcommand};
use std::path::PathBuf;
use std::fs;

// Configuration struct to hold parsed arguments
#[derive(Debug)]
pub struct DownloadConfig {
    pub command: Command,
}

// Enum to represent different commands
#[derive(Debug, Subcommand)]
pub enum Command {
    /// Download a single file or mirror a website
    Download {
        /// URL to download
        url: String,
        /// Run download in background and log to wget-log
        #[clap(short = 'B', long)]
        background: bool,
        /// Output filename
        #[clap(short = 'O', long)]
        output_file: Option<String>,
        /// Output directory
        #[clap(short = 'P', long)]
        output_dir: Option<PathBuf>,
        /// Download speed limit (e.g., 400k, 2M)
        #[clap(long)]
        rate_limit: Option<String>,
        /// Mirror a website
        #[clap(long)]
        mirror: bool,
        /// File types to reject (e.g., jpg,gif)
        #[clap(short = 'R', long, value_delimiter = ',')]
        reject_types: Vec<String>,
        /// Directories to exclude (e.g., /js,/css)
        #[clap(short = 'X', long, value_delimiter = ',')]
        exclude_dirs: Vec<String>,
        /// Convert links for offline viewing
        #[clap(long)]
        convert_links: bool,
    },
    /// Download multiple files from a file containing URLs
    Multiple {
        /// Input file containing URLs
        #[clap(short = 'i', long)]
        input_file: PathBuf,
    },
}

// Main CLI parser
#[derive(Parser, Debug)]
#[clap(name = "wget-rs", about = "A wget-like utility in Rust")]
pub struct Cli {
    #[clap(subcommand)]
    pub command: Command,
}

// Parse rate limit string (e.g., "400k", "2M") into bytes per second
pub fn parse_rate_limit(rate: &str) -> Result<u64, String> {
    let rate = rate.trim().to_lowercase();
    let (value, unit) = rate.split_at(rate.find(|c: char| !c.is_digit(10)).unwrap_or(rate.len()));
    let value: u64 = value.parse().map_err(|_| "Invalid rate limit value".to_string())?;
    
    match unit {
        "k" => Ok(value * 1024),
        "m" => Ok(value * 1024 * 1024),
        "" => Ok(value),
        _ => Err("Invalid rate limit unit (use k or M)".to_string()),
    }
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
pub fn parse_args() -> DownloadConfig {
    let cli = Cli::parse();
    DownloadConfig {
        command: cli.command,
    }
}

// Example usage in main.rs or elsewhere
#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_parse_rate_limit() {
        assert_eq!(parse_rate_limit("400k").unwrap(), 400 * 1024);
        assert_eq!(parse_rate_limit("2M").unwrap(), 2 * 1024 * 1024);
        assert_eq!(parse_rate_limit("1000").unwrap(), 1000);
        assert!(parse_rate_limit("400x").is_err());
    }

    #[test]
    fn test_parse_input_file() {
        use std::fs::File;
        use std::io::Write;
        let path = PathBuf::from("test_urls.txt");
        let urls = "https://example.com/file1.zip\nhttps://example.com/file2.jpg\n";
        File::create(&path).unwrap().write_all(urls.as_bytes()).unwrap();
        
        let result = parse_input_file(&path).unwrap();
        assert_eq!(result, vec![
            "https://example.com/file1.zip".to_string(),
            "https://example.com/file2.jpg".to_string(),
        ]);
        
        std::fs::remove_file(path).unwrap();
    }
}