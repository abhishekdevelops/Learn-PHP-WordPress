# PHP Scope & Built-in Functions – User Info Formatter

This project demonstrates variable scope handling and usage of built-in PHP functions through a simple user information formatter.

## ✅ What It Does

- Uses a global variable to calculate years left to age 100
- Uses a static variable to simulate login counter
- Uses built-in PHP string functions:
  - `strtoupper()`, `strtolower()`, `strlen()`

## 🔁 Scope Concepts

- **Global** – Sharing variables between global and function scope
- **Static** – Remembering variable values across multiple calls
- **Local** – Default variable scope inside functions

## 🧠 Built-in Functions Used

- `strtoupper()` – Convert name to uppercase
- `strtolower()` – Convert name to lowercase
- `strlen()` – Count characters in a string

## 📄 Sample Output

```
Original Name: Abhishek
Uppercase: ABHISHEK
Lowercase: abhishek
Name Length: 8
You have 74 years to turn 100.
Login count: 1
Login count: 2
Login count: 3
```

## 📁 File Structure

```
scope-project/
├── index.php
└── README.md
```

## 🔄 How to Run

1. Open terminal and navigate to the project folder
2. Run local server using: `php -S localhost:8000`
3. Visit `http://localhost:8000/index.php` in your browser
