// pub fn init_background_logger(){
//     todo!()
// }


// logger.rs
use simple_logger::SimpleLogger;

pub fn init_background_logger() {
    SimpleLogger::new()
        .with_level(log::LevelFilter::Info)
        .init()
        .unwrap();
}

pub fn init_foreground_logger() {
    SimpleLogger::new()
        .with_level(log::LevelFilter::Info)
        .with_colors(true)
        .init()
        .unwrap();
}