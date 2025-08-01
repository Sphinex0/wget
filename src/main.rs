mod cli;
mod downloader;
mod logger;
mod mirror;

use cli::*;
use downloader::*;
use logger::*;
use mirror::*;

#[tokio::main]
async fn main() {
    let config = cli::parse_args();

    if config.background {
        logger::init_background_logger();
    }

    if config.mirror {
        mirror::mirror_site(&config).await.unwrap();
    } else {
        downloader::download_file(&config).await.unwrap();
    }
}
