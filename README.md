# PHP Logger Utility

A lightweight and easy-to-use PHP logging utility for tracking application events, debugging issues, and recording system activities.

This Logger class allows developers to write messages to a log file with timestamps and severity levels, making it easier to monitor application behavior and troubleshoot errors.

---

## 📌 What Is Logging?

Logging is the process of recording important events, errors, warnings, and activities that occur within an application.

Logs help developers:

- Debug application errors
- Monitor user activities
- Track system events
- Diagnose production issues
- Maintain application health
- Improve security auditing

---

## 🚀 Features

- Simple one-file implementation
- Automatic timestamps
- Custom log levels
- Appends logs without overwriting existing data
- Lightweight and beginner-friendly
- No external dependencies required
- Easy integration into any PHP project

---

## 📂 Project Structure

```text
project/
│
├── Logger.php
├── logs.txt
└── README.md
```

---

## 📄 Source Code

```php
<?php

class Logger {
    private static $logFile = 'logs.txt';

    public static function log($message, $level = 'INFO') {
        $timestamp = date('Y-m-d H:i:s');

        $formattedMessage =
            "[$timestamp] [$level] $message" . PHP_EOL;

        file_put_contents(
            self::$logFile,
            $formattedMessage,
            FILE_APPEND
        );
    }
}
```

---

# ⚙️ How It Works

Whenever you call:

```php
Logger::log("Something happened");
```

The Logger automatically:

1. Generates a timestamp
2. Adds the log level
3. Formats the message
4. Writes it into `logs.txt`

Example output:

```text
[2026-06-20 14:25:33] [INFO] Something happened
```

---

# 📦 Installation

### Step 1

Download or copy the `Logger.php` file into your project.

### Step 2

Include the file:

```php
require_once 'Logger.php';
```

### Step 3

Start logging events.

---

# 📖 Usage Examples

## Basic Log

```php
Logger::log("Application started");
```

Output:

```text
[2026-06-20 10:15:00] [INFO] Application started
```

---

## Error Log

```php
Logger::log(
    "Database connection failed",
    "ERROR"
);
```

Output:

```text
[2026-06-20 10:20:15] [ERROR] Database connection failed
```

---

## Warning Log

```php
Logger::log(
    "Storage space running low",
    "WARNING"
);
```

Output:

```text
[2026-06-20 10:25:45] [WARNING] Storage space running low
```

---

## User Activity Log

```php
Logger::log(
    "User logged in successfully",
    "INFO"
);
```

Output:

```text
[2026-06-20 10:30:10] [INFO] User logged in successfully
```

---

# 🏷️ Common Log Levels

You can use any custom log level, but these are the most common:

| Level | Purpose |
|---------|---------|
| INFO | General information |
| WARNING | Potential issues |
| ERROR | Application errors |
| DEBUG | Debugging information |
| CRITICAL | Serious system failures |

Examples:

```php
Logger::log("User registered", "INFO");

Logger::log("Invalid password attempt", "WARNING");

Logger::log("Database unavailable", "ERROR");

Logger::log("Payment gateway failed", "CRITICAL");
```

---

# 📁 Log File Location

By default, logs are stored in:

```text
logs.txt
```

You can change the file name:

```php
private static $logFile = 'application.log';
```

Or use a custom path:

```php
private static $logFile = 'logs/application.log';
```

---

# 🔒 Security Recommendations

For production environments:

### Store Logs Outside Public Directories

Avoid:

```text
public/logs.txt
```

Prefer:

```text
storage/logs/application.log
```

### Restrict Access

Prevent users from downloading log files through the browser.

### Never Log Sensitive Data

Avoid logging:

- Passwords
- Credit card details
- API secrets
- Authentication tokens
- Personal customer information

Bad Example:

```php
Logger::log(
    "Password entered: 123456"
);
```

Good Example:

```php
Logger::log(
    "User authentication failed"
);
```

---

# 🛠 Example Real-World Use Cases

### Database Errors

```php
try {
    // Database code
} catch(Exception $e) {
    Logger::log(
        $e->getMessage(),
        "ERROR"
    );
}
```

### User Login Tracking

```php
Logger::log(
    "User {$email} logged in",
    "INFO"
);
```

### Failed Payments

```php
Logger::log(
    "Payment failed for Order #123",
    "ERROR"
);
```

### Admin Actions

```php
Logger::log(
    "Admin deleted product #45",
    "INFO"
);
```

---

# ⚡ Advantages

- Extremely lightweight
- Easy to understand
- No configuration required
- Works on almost every PHP hosting environment
- Great for small and medium projects
- Perfect for learning logging concepts

---

# 🔥 Future Improvements

Possible enhancements include:

- Daily log rotation
- Separate log files by level
- Log archiving
- JSON log formatting
- Email alerts
- Slack notifications
- Error reporting dashboard
- Maximum file size handling
- Automatic cleanup

---

# 📋 Requirements

- PHP 7.0+
- File write permissions enabled

Make sure PHP can create and write to:

```text
logs.txt
```

---

# 👨‍💻 Author

**Frank Nwafor**

Full Stack Developer

🌐 Portfolio: https://frankstack.com.ng

---

# 📜 License

This project is free to use for personal and commercial projects.

You may modify, distribute, and use it in your own applications without restrictions.

---

## ⭐ Support

If this project helped you, consider giving it a star on GitHub and sharing it with other developers.

Happy Coding 🚀
