use indicatif::{ProgressBar, ProgressStyle};
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
    pub fn update(&self, downloaded: u64) {
        if !self.should_report {
            return;
        }

        if let Some(pb) = &self.pb {
            pb.set_position(downloaded);
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
    pub fn finish(&self) {
        if let Some(pb) = &self.pb {
            pb.finish_with_message("Download complete");
        }
    }
}

/// Creates a pre-configured `indicatif::ProgressBar`.
///
/// The style includes a spinner, elapsed time, progress bar, percentage, download speed, and ETA.
///
/// # Arguments
///
/// * `content_length` - The total size of the download in bytes.
pub fn create_progress_bar(content_length: u64) -> ProgressBar {
    let pb = ProgressBar::new(content_length);
    pb.set_style(
        ProgressStyle::with_template(
            "{spinner:.green} [{elapsed_precise}] [{bar:40.cyan/blue}] {percent_precise:2}%  {bytes_per_sec} ({eta})"
        )
        .unwrap()
        .progress_chars("█░"),
    );
    pb
}