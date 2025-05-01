# Project 28 – SQL JOIN Users and Profiles

This project demonstrates how to fetch user data along with their profiles by performing an INNER JOIN between two MySQL tables: `users` and `user_profiles`. Only users who have a matching profile are displayed in the results, following the natural behavior of INNER JOIN operations.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| INNER JOIN Query | Combine data from `users` and `user_profiles` tables |
| Display Full User Info | Show user details and profile information together |
| Handle Missing Profiles | Exclude users without matching profile entries |
| Organized Output Table | Display combined results in a clean table format |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `join_users_profiles.php` | Full INNER JOIN logic to fetch and display users and profiles |

---

## 🧪 How to Test

1. **Start XAMPP Apache and MySQL server.**
2. Place this folder inside:  
   ```
   C:\xampp\htdocs\28-sql-join-users-profiles\
   ```
3. Open your browser and visit:  
   ```
   http://localhost/28-sql-join-users-profiles/join_users_profiles.php
   ```
4. ✅ View the list of users who have matching profile information.
5. ✅ Users without profiles will not appear due to INNER JOIN behavior.

---

## ✅ What I Learned

- How to perform SQL INNER JOIN between related tables  
- How to fetch and display relational data properly in PHP  
- How INNER JOIN affects the result set based on matching records  
- How to organize and display joined data clearly

---

## 🗂 Project Folder Structure

```
28-sql-join-users-profiles/
└── join_users_profiles.php
```

---

## 📚 Note

This project is part of my PHP + MySQL learning journey focused on mastering backend development and preparing for advanced WordPress plugin building.
