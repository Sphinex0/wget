use chrono::Local;
use indicatif::{MultiProgress, ProgressBar, ProgressDrawTarget, ProgressStyle};
use std::io::IsTerminal;
use std::sync::Arc;
use std::time::Instant;

/// Handles progress reporting for file downloads.
///
/// This struct manages either a visual progress bar (via `indicatif`) or textual status updates,
/// depending on whether the application is running in the foreground or background.
pub struct ProgressReporter {
    /// Whether to report progress at all.
    should_report: bool,
    /// Optional progress bar instance.
    pb: Option<ProgressBar>,
    /// Total size of the content being downloaded.
    content_length: u64,
    /// Time when the download started.
    start_time: Instant,
}

impl ProgressReporter {
    /// Creates a new `ProgressReporter`.
    ///
    /// # Arguments
    ///
    /// * `should_report` - If true, progress will be printed/updated.
    /// * `pb` - Optional `indicatif::ProgressBar` instance.
    /// * `content_length` - Total size of the download in bytes.
    pub fn new(should_report: bool, pb: Option<ProgressBar>, content_length: u64) -> Self {
        Self {
            should_report,
            pb,
            content_length,
            start_time: Instant::now(),
        }
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
        // if !self.should_report {
        //     return;
        // }

        if let Some(pb) = &self.pb {
            pb.set_position(downloaded);
            pb.set_message(name.to_string());
        } else {
            let percent = if self.content_length > 0 {
                (downloaded as f64) / (self.content_length as f64) * 100.0
            } else {
                0.0
            };

            let elapsed = self.start_time.elapsed().as_secs_f64();
            let speed = if elapsed > 0.0 {
                (downloaded as f64) / elapsed / (1024.0 * 1024.0)
            } else {
                0.0
            };

            let eta = if speed > 0.0 {
                (((self.content_length - downloaded) as f64) / (speed * 1024.0 * 1024.0)) as u64
            } else {
                0
            };

            let bar_width = 40;
            let filled = (percent / 100.0 * bar_width as f64) as usize;
            let bar = format!("{}{}", "█".repeat(filled), "░".repeat(bar_width - filled));

            println!(
                "{:.2} KiB / {:.2} KiB [{}] {:.2}% {:.2} MiB/s {}s",
                downloaded as f64 / 1024.0,
                self.content_length as f64 / 1024.0,
                bar,
                percent,
                speed,
                eta
            );
        }
    }

    /// Finalizes the progress reporting.
    ///
    /// If a progress bar is active, this marks it as finished with a "Download complete" message.
    pub fn finish(&self, name: &str) {
        let finish_time = Local::now();
        if let Some(pb) = &self.pb {
            pb.finish_with_message(format!(
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
    name: &str,
) -> ProgressBar {
    let pb = ProgressBar::new(content_length);
    pb.set_style(
        ProgressStyle::with_template(
            "{spinner:.green} [{elapsed_precise}] [{bar:40.cyan/blue}] {percent_precise:2}%  {bytes_per_sec} ({eta}) {msg}"
        )
        .unwrap()
        .progress_chars("█░"),
    );
    // pb.set_message(name.to_string());
    multi_progress.add(pb)
}
