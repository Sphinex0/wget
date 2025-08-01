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