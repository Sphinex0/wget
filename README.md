# wget-rs

A fast, asynchronous Rust implementation of the classic `wget` utility, designed for downloading files and mirroring websites with modern async/await patterns. Built with Tokio for efficient concurrent downloads and featuring real-time progress tracking, intelligent rate limiting, and comprehensive FTP support.

## Table of Contents

- [Features](#features)
- [Architecture](#architecture)
- [Installation](#installation)
- [Usage](#usage)
  - [Basic Downloads](#basic-downloads)
  - [Batch Downloads](#batch-downloads)
  - [Website Mirroring](#website-mirroring)
  - [Rate Limiting](#rate-limiting)
  - [Background Mode](#background-mode)
- [Command-Line Options](#command-line-options)
- [Project Structure](#project-structure)
- [Dependencies](#dependencies)
- [Requirements](#requirements)
- [License](#license)

## Features

### Core Functionality

- **Async/Await Downloads** - Powered by Tokio for fast, non-blocking concurrent file downloads with zero runtime overhead
- **Progress Tracking** - Real-time progress bars for all active downloads using indicatif, with percentage, speed, and ETA display
- **Rate Limiting** - Intelligent download speed control to avoid overwhelming servers and prevent bandwidth exhaustion
- **HTML Mirroring** - Recursively download entire websites while preserving directory structures
- **FTP Support** - Full FTP protocol support with persistent connections for efficient batch downloads
- **Link Conversion** - Automatically rewrite HTML links to point to local mirrored files for offline browsing
- **Selective Downloading** - Exclude specific file types and directories during mirroring operations
- **Background Mode** - Daemonize downloads and redirect output to log files
- **Batch Processing** - Download multiple files from a URL list in a single operation

### Advanced Features

- **HTML Parsing** - Extract and analyze HTML content using scraper and lol_html
- **Smart Path Resolution** - Intelligent path handling with tilde expansion for home directories
- **URL Queue Management** - Efficient queue-based processing for handling large-scale downloads
- **Visited URL Tracking** - Prevent redundant downloads and infinite loops during mirroring
- **Flexible Output** - Custom output filenames and directories with automatic directory creation
- **Error Handling** - Comprehensive error recovery with detailed error messages

## Architecture

### Project Structure

```
src/
├── main.rs                 # Entry point with background process handling
├── lib.rs                  # Library root, module exports
├── cli.rs                  # Command-line argument parsing with clap (derive macros)
├── downloader/
│   ├── mod.rs             # Core download queue logic and orchestration
│   ├── processor.rs       # HTTP and FTP protocol implementations
│   └── utils.rs           # URL enqueueing and queue management
├── mirror.rs              # Website mirroring logic and link rewriting
├── progress.rs            # Progress bar creation and management
├── rate_limiter.rs        # Download speed limiting implementation
└── utils.rs               # Utility functions (URL parsing, file handling)
```

### Key Design Patterns

1. **Queue-Based Processing** - URLs are stored in a VecDeque and processed sequentially, with new URLs discovered during mirroring added dynamically
2. **Visited Set Tracking** - Prevents infinite loops and redundant downloads during recursive operations
3. **Protocol Pooling** - FTP connections are reused within the queue processor to minimize connection overhead
4. **Progress Multi-Progress** - All downloads report to a shared MultiProgress handle for coordinated terminal output
5. **Async/Await** - All I/O operations are non-blocking, allowing efficient operations despite queue-based processing

## Installation

### From Source

```bash
# Clone the repository (if applicable)
git clone <repository>
cd wget-rs

# Build in release mode for optimal performance
cargo build --release

# The binary will be available at:
./target/release/wget
```

### Prerequisites

- Rust 1.91 or later
- OpenSSL development libraries (on some systems)

## Usage

### Basic Downloads

```bash
# Download a single file
./target/release/wget https://example.com/file.zip

# Save with a custom filename
./target/release/wget -O myfile.zip https://example.com/file.zip

# Save to a specific directory
./target/release/wget -P /downloads https://example.com/file.zip

# Combine output file and directory options
./target/release/wget -O archive.tar.gz -P backup/ https://example.com/archive.tar.gz
```

### Batch Downloads

```bash
# Download multiple URLs from a file (one URL per line)
./target/release/wget -i urls.txt

# With output directory for all downloads
./target/release/wget -P /downloads -i urls.txt

# Example urls.txt content:
# https://example.com/file1.zip
# https://example.com/file2.tar.gz
# ftp://files.example.com/archive.zip
```

### Website Mirroring

```bash
# Mirror an entire website for offline browsing
./target/release/wget --mirror https://example.com

# Mirror with specific output directory
./target/release/wget --mirror -P mirrordir/ https://example.com

# Mirror while excluding certain file types
./target/release/wget --mirror -R jpg,png,gif https://example.com

# Exclude specific directories
./target/release/wget --mirror -X /admin,/private https://example.com

# Mirror with link conversion for offline viewing
./target/release/wget --mirror --convert-links https://example.com
```

### Rate Limiting

```bash
# Limit download speed to 400 KB/s
./target/release/wget --rate-limit 400k https://large-file-server.com/file.iso

# Limit to 2 MB/s
./target/release/wget --rate-limit 2M https://cdn.example.com/video.mp4

# Rate limit works with batch downloads
./target/release/wget --rate-limit 500k -i urls.txt

# Supported units:
#   k, K  - Kilobytes per second
#   m, M  - Megabytes per second
#   (none) - Bytes per second
```

### Background Mode

```bash
# Run download in the background with output redirected to wget-log.log
./target/release/wget -B https://example.com/largefile.iso

# Returns immediately with the process PID
# Example output:
# Output will be written to 'wget-log'.
# Started background process with PID: 12345

# Monitor the background download
tail -f wget-log.log

# The process continues even if the terminal closes
```

## Command-Line Options

### URL Input

| Option | Long Form | Description | Example |
|--------|-----------|-------------|---------|
| `URL` | N/A | URL to download (optional if `-i` is used) | `https://example.com/file.zip` |
| `-i` | `--input-file` | File containing URLs (one per line) | `-i urls.txt` |

### Output Options

| Option | Long Form | Description | Example |
|--------|-----------|-------------|---------|
| `-O` | `--output-file` | Save with custom filename | `-O myfile.zip` |
| `-P` | `--output-dir` | Save to specific directory | `-P ~/downloads` |

### Mirroring Options

| Option | Long Form | Description | Example |
|--------|-----------|-------------|---------|
| N/A | `--mirror` | Enable recursive website mirroring | `--mirror` |
| `-R` | `--reject` | Exclude file types (comma-separated) | `-R jpg,png,gif` |
| `-X` | `--exclude` | Exclude directories (comma-separated) | `-X /admin,/staging` |
| N/A | `--convert-links` | Rewrite links for offline viewing | `--convert-links` |

### Performance Options

| Option | Long Form | Description | Example |
|--------|-----------|-------------|---------|
| N/A | `--rate-limit` | Limit download speed | `--rate-limit 500k` |

### Execution Options

| Option | Long Form | Description | Example |
|--------|-----------|-------------|---------|
| `-B` | `--background` | Run in background (daemonize) | `-B` |

### Combined Examples

```bash
# Mirror a site with exclusions and rate limiting
./target/release/wget --mirror \
  --rate-limit 1M \
  -R exe,zip,tar.gz \
  -X /admin,/staff \
  --convert-links \
  -P archived_site/ \
  https://example.com

# Download from file list with custom output directory and background mode
./target/release/wget -B -P /bulk-downloads -i download-list.txt

# High-performance mirroring with link conversion
./target/release/wget --mirror --convert-links https://documentation-site.com
```

## Project Structure

### Core Modules

**cli.rs**
- Defines `DownloadConfig` struct with all command-line options
- Uses `clap` with derive macros for automatic argument parsing
- Validates that either URL or input file is provided
- Handles help text and version display

**downloader/mod.rs**
- Main download orchestration via `download_queue()` function
- Manages the download VecDeque and visited URL tracking
- Routes between HTTP and FTP protocol handlers
- Maintains FTP connection pool for reuse

**downloader/processor.rs**
- Implements `download_http()` for HTTP/HTTPS downloads
- Implements `download_ftp_persistent()` for FTP downloads
- Handles HTTP streaming and FTP data transfers
- Returns discovered URLs for recursive mirroring

**mirror.rs**
- Implements website mirroring logic
- `create_mirror_path()` - Maps remote URLs to local filesystem paths
- `extract_links()` - Parses HTML to find all resources
- `should_mirror()` - Filters based on rejection and exclusion rules
- `convert_links()` - Rewrites HTML to point to local files

**progress.rs**
- Wraps indicatif's ProgressBar functionality
- `ProgressReporter` struct manages display state
- Handles TTY detection for appropriate output formatting
- Provides progress updates and completion messages

**rate_limiter.rs**
- `parse_rate_limit()` - Converts human-readable rates to bytes/second
- Throttles download speed to prevent server overload

**utils.rs**
- `parse_input_file()` - Reads URLs from file for batch operations

**bin/wget.rs**
- Application entry point
- Handles `-B` background mode by spawning child processes
- Calls `async_download()` for main operation

## Dependencies

### Core Async Runtime
- **tokio** `1.0` - Asynchronous runtime with full feature set (networking, fs, time, etc.)
- **futures** `0.3` - Async utilities and combinators

### HTTP/Network
- **reqwest** `0.11` - Modern HTTP client with streaming and async support
- **url** `2.0` - URL parsing and manipulation
- **bytes** `1.0` - Efficient byte buffer management
- **suppaftp** `8.0` - FTP client library with Tokio support

### HTML/Text Processing
- **scraper** `0.13` - HTML parsing using CSS selectors (built on html5ever)
- **lol_html** `2.7.2` - Low-level HTML rewriting for link conversion
- **regex** `1.0` - Pattern matching for selective downloading
- **mime** `0.3` - MIME type detection and handling

### CLI & Display
- **clap** `4.0` - Command-line argument parsing with derive macros
- **indicatif** `0.18` - Progress bars and spinners with multi-progress support

### Utilities
- **chrono** `0.4` - Timestamp formatting for log messages
- **expand-tilde** `0.6` - Home directory path expansion
- **simple_logger** `4.0` - Simple logging implementation
- **anyhow** `1.0.102` - Ergonomic error handling with context
- **log** - Logging traits (implicit via simple_logger)

## Requirements

- **Rust**: 1.91 or later
- **OS Support**: Linux, macOS, Windows (native)
- **Internet Connection**: For downloading files
- **OpenSSL** (optional): Some systems require OpenSSL development libraries for TLS support
  - Ubuntu/Debian: `sudo apt-get install libssl-dev`
  - macOS: Usually included; if needed: `brew install openssl`
  - Fedora/RHEL: `sudo dnf install openssl-devel`

## Building & Testing

```bash
# Build in debug mode (faster compilation)
cargo build

# Build in release mode (optimized binary)
cargo build --release

# Run tests (if any)
cargo test

# Run specific example
cargo run --release -- https://example.com/file.zip

# Run with logging (requires env_logger setup)
RUST_LOG=debug cargo run --release -- --mirror https://example.com
```

## License

MIT

Copyright (c) 2024 - Developed by Sphinex | kill-ux
