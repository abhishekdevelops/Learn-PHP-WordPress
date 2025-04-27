# Project 22 – PHP Update User Information in MySQL Database

This project demonstrates how to fetch a user's existing information from a MySQL database, allow the user to edit it through a pre-filled form, and update the database record dynamically using PHP.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| Fetch Single User Data | Fetch user info using the user ID |
| Pre-filled HTML Form | Show existing user data for easy editing |
| Update Operation | Update user record in MySQL database |
| Success/Error Messaging | Inform user about the update result |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `fetch_users.php` | Display all users with Edit links |
| `edit_user.php` | Show pre-filled form with selected user's data |
| `update_user.php` | Update the user data into MySQL database |

---

## 🧪 How to Test

1. **Start XAMPP Apache and MySQL server.**
2. Place this folder inside:
   ```
   C:\xampp\htdocs\22-php-update-user\
   ```
3. Open your browser and visit:
   ```
   http://localhost/22-php-update-user/fetch_users.php
   ```
4. ✅ You will see a list of users.
5. ✅ Click "Edit" on any user.
6. ✅ Update the information in the form and submit.
7. ✅ Check updated records in the database (`users` table).

---

## ✅ What I Learned

- How to fetch specific records from MySQL using PHP
- How to build dynamic edit/update forms
- How to update MySQL database records safely
- How to organize backend PHP scripts for clean flow

---

## 🗂 Project Folder Structure

```
22-php-update-user/
├── fetch_users.php
├── edit_user.php
└── update_user.php
```

---

## 📚 Note

This project is part of my PHP + MySQL learning journey focused on mastering backend development and preparing for advanced WordPress plugin development.
