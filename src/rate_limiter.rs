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
pub fn parse_rate_limit(rate: &str) -> Result<u64, String> {
    let rate = rate.trim().to_lowercase();
    let (value, unit) = rate.split_at(rate.find(|c: char| !c.is_digit(10)).unwrap_or(rate.len()));
    let value: u64 = value.parse().map_err(|_| "Invalid rate limit value".to_string())?;
    
    match unit {
        "k" => Ok(value * 1024),
        "m" => Ok(value * 1024 * 1024),
        "" => Ok(value),
        _ => Err("Invalid rate limit unit (use k or M)".to_string()),
    }
}
