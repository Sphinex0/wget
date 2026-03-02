use anyhow::Result;
use chrono::Local;
use indicatif::{MultiProgress, ProgressBar, ProgressStyle};
use std::io::IsTerminal;
use std::sync::Arc;

/// Handles progress reporting for file downloads.
///
/// This struct manages either a visual progress bar (via `indicatif`) or textual status updates,
/// depending on whether the application is running in the foreground or background.
pub struct ProgressReporter {
    pb: ProgressBar,
}

impl ProgressReporter {
    /// Creates a new `ProgressReporter`.
    pub fn new(pb: ProgressBar) -> Self {
        Self { pb }
    }

    /// Updates the progress display with the current number of downloaded bytes.
    ///
    /// If a progress bar is present, it updates the bar. Otherwise, it prints a text-based status line
    /// including percentage, speed, and estimated time remaining.
    ///
    /// # Arguments
    ///
    /// * `downloaded` - The total number of bytes downloaded so far.
    pub fn update(&self, downloaded: u64, name: &str) {
        self.pb.set_position(downloaded);
        self.pb.set_message(name.to_string());
    }

    /// Finalizes the progress reporting.
    ///
    /// If a progress bar is active, this marks it as finished with a "Download complete" message.
    pub fn finish(&self, name: &str) {
        let finish_time = Local::now();
        self.pb.finish_with_message(format!(
            "{name} finished at {}",
            finish_time.format("%Y-%m-%d %H:%M:%S")
        ));
        if !isatty() {
            println!(
                "{name} finished at {}",
                finish_time.format("%Y-%m-%d %H:%M:%S")
            )
        }
    }
}

fn isatty() -> bool {
    std::io::stdout().is_terminal()
}

/// Creates a pre-configured `indicatif::ProgressBar`.
///
/// The style includes a spinner, elapsed time, progress bar, percentage, download speed, and ETA.
///
/// # Arguments
///
/// * `content_length` - The total size of the download in bytes.
/// * `name` - The filename or URL being downloaded.
pub fn create_progress_bar(content_length: u64, name: &str) -> ProgressBar {
    let pb = ProgressBar::new(content_length);
    pb.set_style(
        ProgressStyle::with_template(
            "{spinner:.green} [{elapsed_precise}] [{bar:40.cyan/blue}] {percent_precise:2}%  {bytes_per_sec} ({eta}) {msg}"
        )
        .unwrap()
        .progress_chars("█░"),
    );
    pb.set_message(name.to_string());
    pb
}

/// Creates a `MultiProgress` instance for tracking multiple downloads concurrently.
///
/// Returns an Arc-wrapped MultiProgress for thread-safe sharing across async tasks.
pub fn create_multi_progress() -> Arc<MultiProgress> {
    // let pb = MultiProgress::with_draw_target(ProgressDrawTarget::stdout());
    // pb.set_draw_target(ProgressDrawTarget::stdout());
    Arc::new(MultiProgress::new())
}

/// Creates a progress bar with given content length and adds it to a MultiProgress container.
///
/// # Arguments
///
/// * `multi_progress` - The MultiProgress instance to add the bar to.
/// * `content_length` - The total size of the download in bytes.
/// * `name` - The filename or URL being downloaded.
pub fn add_progress_bar_to_multi(
    multi_progress: &Arc<MultiProgress>,
    content_length: u64,
) -> Result<ProgressBar> {
    let pb = ProgressBar::new(content_length);
    pb.set_style(
        ProgressStyle::with_template(
            "{spinner:.green} [{elapsed_precise}] [{bar:40.cyan/blue}] {percent_precise:2}%  {bytes_per_sec} ({eta}) {msg}"
        )?.progress_chars("█░"),
    );
    // pb.set_message(name.to_string());
    Ok(multi_progress.add(pb))
}
