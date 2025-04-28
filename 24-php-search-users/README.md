# Project 24 – PHP Search System (User Search)

This project demonstrates how to build a simple search system where users can search by Name or Email from a MySQL database using PHP.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| Search Form | Allow users to search Name or Email |
| SQL LIKE Query | Find matching records dynamically |
| Display Results | Show matching users in a clean HTML table |
| No Result Handling | Gracefully handle if no matching users found |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `search_users.php` | Full search form, backend query, and dynamic result display |

---

## 🧪 How to Test

1. **Start XAMPP Apache and MySQL server.**
2. Place this folder inside:
   ```
   C:\xampp\htdocs\24-php-search-users\
   ```
3. Open your browser and visit:
   ```
   http://localhost/24-php-search-users/search_users.php
   ```
4. ✅ Enter a Name or Email in the search box.
5. ✅ View matching results dynamically in table format.
6. ✅ If no match, a clean "No results found." message will appear.

---

## ✅ What I Learned

- How to build dynamic SQL queries using LIKE operator
- How to capture and sanitize user input securely
- How to build clean search result tables
- How to handle empty result sets

---

## 🗂 Project Folder Structure

```
24-php-search-users/
└── search_users.php
```

---

## 📚 Note

This project is part of my PHP + MySQL learning journey focused on mastering backend development and preparing for advanced WordPress plugin building.
