use anyhow::{Context, Result, bail};

/// Parses a rate limit string (e.g., "400k", "2M") into bytes per second.
///
/// This function supports 'k' (kilobytes) and 'm' (megabytes) suffixes (case-insensitive).
///
/// # Arguments
///
/// * `rate` - The rate limit string (e.g., "500k", "1.5M").
///
/// # Returns
///
/// * `Ok(u64)` - The rate limit in bytes per second.
/// * `Err(String)` - If the format is invalid or unknown unit is used.
pub fn parse_rate_limit(rate: &str) -> Result<u64> {
    let rate = rate.trim().to_lowercase();
    let (value, unit) = rate.split_at(rate.find(|c: char| !c.is_ascii_digit()).unwrap_or(rate.len()));
    let value: u64 = value.parse().context("Invalid rate limit value")?;
    if value == 0 {
        bail!("Rate limit value cannot be zero");
    }

    match unit {
        "k" => Ok(value * 1024),
        "m" => Ok(value * 1024 * 1024),
        "" => Ok(value),
        _ => bail!("Invalid rate limit unit (use k or M)".to_string()),
    }
}
