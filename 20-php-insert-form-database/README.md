# Project 20 – PHP Insert Form Data into MySQL Database

This project demonstrates how to capture user input from an HTML form and insert it into a MySQL database using PHP.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| HTML Form | Collect user input (Name, Email, Password) |
| PHP Form Handling | Capture form data securely using POST method |
| MySQL Database Connection | Connect PHP script to MySQL database |
| Insert Operation | Save form data into database table (`users`) |
| Success/Error Handling | Inform user about insertion result |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `index.php` | HTML form to collect user input |
| `insert_user.php` | PHP script to insert data into MySQL database |

---

## 🧪 How to Test

1. **Start XAMPP Apache and MySQL server.**
2. Place this folder inside:
   ```
   C:\xampp\htdocs\20-php-insert-form-database\
   ```
3. Open your browser and visit:
   ```
   http://localhost/20-php-insert-form-database/index.php
   ```
4. ✅ Fill out the form and submit.  
5. ✅ Check `learning_php` ➔ `users` table in phpMyAdmin to confirm data insertion.

---

## ✅ What I Learned

- How to build a basic HTML form
- How to capture POST data in PHP
- How to insert form data dynamically into MySQL
- How to handle database connection and insertion errors

---

## 🗂 Project Folder Structure

```
20-php-insert-form-database/
├── index.php
└── insert_user.php
```

---

## 📚 Note

This project is part of my PHP + MySQL learning journey focused on mastering backend development and preparing for WordPress plugin building.
