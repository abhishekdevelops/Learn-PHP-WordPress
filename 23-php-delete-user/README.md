# Project 23 – PHP Delete User from MySQL Database

This project demonstrates how to delete a user record from a MySQL database dynamically using PHP.  
Users can be selected and removed permanently by clicking a Delete link.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| List Users | Display all registered users |
| Delete Operation | Remove specific user from database |
| Confirmation Box | Confirm deletion before processing |
| Success/Error Messaging | Inform user about the delete result |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `fetch_users.php` | Display all users with Delete links |
| `delete_user.php` | PHP script to delete selected user from database |

---

## 🧪 How to Test

1. **Start XAMPP Apache and MySQL server.**
2. Place this folder inside:
   ```
   C:\xampp\htdocs\23-php-delete-user\
   ```
3. Open your browser and visit:
   ```
   http://localhost/23-php-delete-user/fetch_users.php
   ```
4. ✅ You will see a list of users.
5. ✅ Click "Delete" on any user ➔ Confirm deletion.
6. ✅ User record will be permanently deleted from the database.

---

## ✅ What I Learned

- How to dynamically delete records from MySQL
- How to securely pass data using GET method
- How to confirm destructive actions (Delete Confirmation)
- Full flow of backend CRUD operations

---

## 🗂 Project Folder Structure

```
23-php-delete-user/
├── fetch_users.php
└── delete_user.php
```

---

## 📚 Note

This project is part of my PHP + MySQL learning journey focused on mastering backend development and preparing for advanced WordPress plugin development.
