# Project 25 – PHP Search System with Pagination

This project demonstrates how to build a dynamic search system with pagination.  
Users can search by Name or Email and navigate through results page by page.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| Search Form | Allow users to search Name or Email |
| SQL LIKE Query | Find matching records dynamically |
| Pagination (LIMIT and OFFSET) | Display 5 users per page |
| Dynamic Page Links | Navigate through search results |
| No Result Handling | Gracefully handle if no matching users found |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `search_users_pagination.php` | Full search form, backend query, pagination logic, and result display |

---

## 🧪 How to Test

1. **Start XAMPP Apache and MySQL server.**
2. Place this folder inside:
   ```
   C:\xampp\htdocs\25-php-search-pagination\
   ```
3. Open your browser and visit:
   ```
   http://localhost/25-php-search-pagination/search_users_pagination.php
   ```
4. ✅ Enter a Name or Email in the search box.
5. ✅ View matching results dynamically in table format.
6. ✅ Navigate to different pages using pagination links.

---

## ✅ What I Learned

- How to build dynamic SQL queries using LIKE and LIMIT
- How to implement pagination logic with URL parameters
- How to manage search terms during page navigation
- How to properly handle empty search results

---

## 🗂 Project Folder Structure

```
25-php-search-pagination/
└── search_users_pagination.php
```

---

## 📚 Note

This project is part of my PHP + MySQL learning journey focused on mastering backend development and preparing for advanced WordPress plugin development.
