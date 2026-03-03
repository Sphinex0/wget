# wget-rs

A fast, async Rust implementation of the `wget` utility for downloading files from the web.

## Features

- **Async downloads** - Powered by Tokio for fast, concurrent file downloads
- **Progress tracking** - Real-time progress bars for all active downloads
- **Rate limiting** - Control download speed to avoid overwhelming servers
- **HTML mirroring** - Download and mirror entire websites
- **Web scraping** - Extract content from HTML pages
- **FTP support** - Download files from FTP servers
- **Background mode** - Run downloads in the background (`-B` flag)
- **Flexible input** - Download from URLs or from a list in a file

## Installation

```bash
cargo build --release
```

## Usage

```bash
# Download a single file
./target/release/wget https://example.com/file.zip

# Download from a file containing URLs
./target/release/wget -i urls.txt

# Mirror a website
./target/release/wget --mirror https://example.com

# Run in background
./target/release/wget -B https://example.com/largefile.iso
```

## Requirements

- Rust 1.91+
- Internet connection

## License

MIT
