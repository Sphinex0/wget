# Rust Wget-like Project Structure

Here's a comprehensive structure for your Rust-based wget-like project:

## Project Structure

```
wget-rs/
├── src/
│   ├── main.rs                # Entry point and CLI handling
│   ├── downloader.rs          # Core download functionality
│   ├── mirror.rs              # Website mirroring logic
│   ├── progress.rs            # Progress bar implementation
│   ├── rate_limiter.rs        # Download speed control
│   ├── file_utils.rs          # File operations utilities
│   ├── http_utils.rs          # HTTP client and utilities
│   ├── logger.rs              # Logging implementation
│   ├── models.rs              # Data structures and config
│   └── cli.rs                 # Command line argument parsing
├── tests/                     # Integration tests
├── Cargo.toml                 # Project configuration
└── README.md
```

## Core Components

1. **Main.rs**
   - Entry point for the application
   - Handles command execution flow

2. **CLI Module (cli.rs)**
   - Uses `clap` or `structopt` for argument parsing
   - Defines all supported flags:
     - Positional URL argument
     - `-B` for background download
     - `-O` for output filename
     - `-P` for output directory
     - `--rate-limit` for speed control (supports k/M suffixes)
     - `-i` for input file with multiple URLs
     - `--mirror` for website mirroring
     - `-R/--reject` for file type exclusion
     - `-X/--exclude` for directory exclusion
     - `--convert-links` for offline viewing

3. **Downloader Module (downloader.rs)**
   - Core download functionality using `reqwest`
   - Handles HTTP/HTTPS/FTP protocols
   - Implements:
     - Single file download
     - Background download
     - Rate limiting
     - Progress reporting
     - Multiple async downloads with `tokio`

4. **Mirror Module (mirror.rs)**
   - Recursively downloads websites using `scraper` or `html5ever`
   - Parses HTML/CSS for linked resources
   - Handles:
     - Link conversion for offline viewing
     - File type exclusion
     - Directory exclusion
     - Relative path conversion

5. **Progress Module (progress.rs)**
   - Implements progress bar using `indicatif`
   - Displays:
     - Download speed
     - Percentage complete
     - Estimated time remaining
     - Total size (with human-readable units)

6. **Rate Limiter Module (rate_limiter.rs)**
   - Controls download speed using token bucket algorithm
   - Supports k (kilobytes) and M (megabytes) units

7. **File Utilities (file_utils.rs)**
   - Handles file operations:
     - Saving with custom names
     - Saving to specific directories
     - Path normalization
     - Log file management

8. **HTTP Utilities (http_utils.rs)**
   - Manages HTTP client configuration
   - Handles:
     - Response validation
     - Redirects
     - Headers processing
     - Error handling

## Cargo.toml Dependencies

```toml
[package]
name = "wget-rs"
version = "0.1.0"
edition = "2021"

[dependencies]
reqwest = { version = "0.11", features = ["stream", "blocking"] }
tokio = { version = "1.0", features = ["full"] }
clap = { version = "4.0", features = ["derive"] }
indicatif = "0.17" # For progress bars
scraper = "0.13"  # For HTML parsing
url = "2.0"
bytes = "1.0"
futures = "0.3"
log = "0.4"
simple_logger = "4.0" # Or env_logger
regex = "1.0"      # For URL/pattern matching
mime = "0.3"       # For content type handling
```

## Example Implementation

```rust
// models.rs
pub struct DownloadConfig {
    pub url: String,
    pub output_file: Option<String>,
    pub output_dir: Option<String>,
    pub rate_limit: Option<u64>, // bytes per second
    pub background: bool,
    pub mirror: bool,
    pub reject_types: Vec<String>,
    pub exclude_dirs: Vec<String>,
    pub convert_links: bool,
}

// downloader.rs
pub async fn download_file(config: &DownloadConfig) -> Result<(), Box<dyn std::error::Error>> {
    // Implementation using reqwest with progress reporting
}

// mirror.rs
pub async fn mirror_site(config: &DownloadConfig) -> Result<(), Box<dyn std::error::Error>> {
    // Recursive site download implementation
}

// main.rs

```

## Key Rust Features to Leverage

1. **Async/Await**:
   - Use `tokio` runtime for async downloads
   - Implement parallel downloads with `futures::future::join_all`

2. **Error Handling**:
   - Use `thiserror` or custom error types
   - Properly handle network errors and retries

3. **Performance**:
   - Use streaming downloads to handle large files
   - Implement proper buffering

4. **Testing**:
   - Mock HTTP server for tests using `wiremock`
   - Filesystem tests with `tempfile`

## Progress Reporting Example