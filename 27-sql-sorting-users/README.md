# Project 27 – SQL Sorting Users

This project demonstrates how to sort users dynamically based on different columns such as Name, Age, or Email using PHP and SQL ORDER BY. A simple and clean HTML table is displayed showing users sorted according to the selected column. Dynamic links allow users to choose which field to sort by, and the backend uses secure SQL ORDER BY queries to handle the sorting based on user selection while preventing invalid inputs.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| Dynamic Sorting Links | Allow users to sort the user list by Name, Age, or Email |
| SQL ORDER BY Query | Sort user data directly in MySQL |
| Security Handling | Prevent invalid sort columns from being passed |
| Simple User Table Display | Display sorted users in a clean HTML table |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `sort_users.php` | Full logic to sort users dynamically based on selected column |

---

## 🧪 How to Test

1. **Start XAMPP Apache and MySQL server.**
2. Place this folder inside:  
   ```
   C:\xampp\htdocs\27-sql-sorting-users\
   ```
3. Open your browser and visit:  
   ```
   http://localhost/27-sql-sorting-users/sort_users.php
   ```
4. ✅ Click on Name, Age, or Email links to sort the user list.
5. ✅ View the users sorted dynamically based on the selected column.

---

## ✅ What I Learned

- How to build dynamic SQL queries using ORDER BY  
- How to handle user-selected sorting parameters securely  
- How to display sorted data neatly in PHP  
- How to prevent SQL injection by validating sorting parameters

---

## 🗂 Project Folder Structure

```
27-sql-sorting-users/
└── sort_users.php
```

---

## 📚 Note

This project is part of my PHP + MySQL learning journey focused on mastering backend development and preparing for advanced WordPress plugin building.
