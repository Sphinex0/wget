pub struct ProgressTracker {
    pb: ProgressBar,
    start_time: Instant,
}

impl ProgressTracker {
    pub fn new(total: u64) -> Self {
        let pb = ProgressBar::new(total);
        pb.set_style(ProgressStyle::default_bar()
            .template("{spinner:.green} [{elapsed_precise}] [{bar:40.cyan/blue}] {bytes}/{total_bytes} ({eta})")
            .progress_chars("#>-"));
        Self {
            pb,
            start_time: Instant::now(),
        }
    }

    pub fn update(&self, downloaded: u64) {
        self.pb.set_position(downloaded);
    }
}