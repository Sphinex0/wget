// Parse rate limit string (e.g., "400k", "2M") into bytes per second
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