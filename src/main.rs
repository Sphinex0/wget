mod cli;
mod downloader;
mod logger;
mod mirror;
mod models;

use cli::*;
use downloader::*;
use logger::*;
use mirror::*;

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
async fn main() {
    let config = parse_args();
    dbg!(config);
    return;
    match config.command {
        cli::Command::Download { url, background, output_file, output_dir, rate_limit, mirror, reject_types, exclude_dirs, convert_links } => {
            println!("Downloading: {}", url);
            if background {
                println!("Output will be written to 'wget-log'");
            }
            if let Some(rate) = rate_limit {
                let bytes_per_sec = cli::parse_rate_limit(&rate).expect("Invalid rate limit");
                println!("Rate limit: {} bytes/sec", bytes_per_sec);
            }
            if mirror {
                println!("Mirroring website with reject_types: {:?}", reject_types);
                println!("Excluding directories: {:?}", exclude_dirs);
                if convert_links {
                    println!("Converting links for offline viewing");
                }
            }
        }
        cli::Command::Multiple { input_file } => {
            let urls = cli::parse_input_file(&input_file).expect("Failed to read input file");
            println!("Downloading multiple files: {:?}", urls);
        }
    }
}
