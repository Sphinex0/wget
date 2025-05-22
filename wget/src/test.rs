use chrono::Local;
use clap::{Arg, Command};
use futures_util::stream::StreamExt; // Import StreamExt for next()
use indicatif::{ProgressBar, ProgressStyle};
use reqwest::Client;
use std::fs::File;
use std::io::Write;
use url::Url;

#[tokio::main]
async fn main() -> Result<(), Box<dyn std::error::Error>> {
    // Parse command-line arguments
    let matches = Command::new("wget_clone")
        .arg(
            Arg::new("url")
                .required(true)
                .index(1)
                .help("URL of the file to download"),
        )
        .arg(
            Arg::new("output")
                .short('O')
                .value_name("FILE")
                .help("Output file name"),
        )
        .get_matches();

    let url = matches.get_one::<String>("url").unwrap();
    let output = matches.get_one::<String>("output").unwrap_or(url);

    // Validate URL
    let parsed_url = Url::parse(url)?;
    let filename = parsed_url
        .path_segments()
        .and_then(|segments| segments.last())
        .unwrap_or("index")
        .to_string();

    // Start time
    let start_time = Local::now().format("%Y-%m-%d %H:%M:%S").to_string();
    println!("start at {}", start_time);

    // Initialize HTTP client
    let client = Client::new();
    let response = client.get(url).send().await?;

    // Check status
    let status = response.status();
    println!("sending request, awaiting response... status {}", status);
    if !status.is_success() {
        return Err(format!("Request failed with status: {}", status).into());
    }

    // Get content length
    let content_length = response.content_length().unwrap_or(0);
    let content_length_mb = content_length as f64 / 1_048_576.0;
    println!("content size: {} [~{:.2}MB]", content_length, content_length_mb);

    // Set up output file
    let output_path = matches.get_one::<String>("output").unwrap_or(&filename);
    println!("saving file to: ./{}", output_path);

    // Set up progress bar
    let pb = ProgressBar::new(content_length);
    pb.set_style(
        ProgressStyle::default_bar()
            .template("{bytes} / {total_bytes} [{bar:50}] {percent}% {bytes_per_sec} {eta}")
            .unwrap(),
    );

    // Download and save file
    let mut file = File::create(output_path)?;
    let mut downloaded = 0;
    let mut stream = response.bytes_stream();

    while let Some(chunk) = stream.next().await {
        let chunk = chunk?;
        file.write_all(chunk.as_ref())?;
        downloaded += chunk.len() as u64;
        pb.set_position(downloaded);
    }

    pb.finish();
    println!("Downloaded [{}]", url);

    // End time
    let end_time = Local::now().format("%Y-%m-%d %H:%M:%S").to_string();
    println!("finished at {}", end_time);

    Ok(())
}