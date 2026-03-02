use std::fs;
use std::path::PathBuf;

use anyhow::Result;

/// Parses an input file containing a list of URLs.
///
/// The file is expected to contain one URL per line. Empty lines and whitespace
/// are trimmed.
///
/// # Arguments
///
/// * `file` - Path to the input file.
///
/// # Returns
///
/// * `Ok(Vec<String>)` - A vector of URL strings.
/// * `Err(String)` - If the file cannot be read.
pub fn parse_input_file(file: &PathBuf) -> Result<Vec<String>> {
    let content = fs::read_to_string(file)?;
    Ok(content
        .lines()
        .map(|s| s.trim())
        .filter(|s| !s.is_empty())
        .map(String::from)
        .collect())
}
