<?php

/**
 * Logger - A simple, one-file utility to track application errors.
 * * Usage: Logger::log("Something went wrong", "error");
 */

class Logger {
    private static $logFile = 'logs.txt';

    public static function log($message, $level = 'INFO') {
        $timestamp = date('Y-m-d H:i:s');
        $formattedMessage = "[$timestamp] [$level] $message" . PHP_EOL;
        
        // Write to file (FILE_APPEND ensures we don't overwrite previous logs)
        file_put_contents(self::$logFile, $formattedMessage, FILE_APPEND);
    }
}

// --- Usage Examples ---
// Logger::log("Database connection failed", "ERROR");
// Logger::log("User logged in successfully", "INFO");
