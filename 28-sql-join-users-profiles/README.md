# Project 28 – SQL JOIN Users and Profiles

This project demonstrates how to fetch user data along with their profiles by performing an INNER JOIN between two MySQL tables: `users` and `user_profiles`. Only users who have a matching profile are displayed in the results, following the natural behavior of INNER JOIN operations.

---

| Feature | Purpose |
|---------|---------|
| INNER JOIN Query | Combine data from `users` and `user_profiles` tables |
| Display Full User Info | Show user details and profile information together |
| Handle Missing Profiles | Exclude users without matching profile entries |
| Organized Output Table | Display combined results in a clean table format |

| File | Purpose |
|------|---------|
| `join_users_profiles.php` | Full INNER JOIN logic to fetch and display users and profiles |

To test this project, start the XAMPP Apache and MySQL servers. Place the project folder inside `C:\xampp\htdocs\28-sql-join-users-profiles\` and then open your browser and visit `http://localhost/28-sql-join-users-profiles/join_users_profiles.php`. You will see the list of users who have matching profile information, and users without profiles will not appear due to the INNER JOIN behavior.

What I learned in this project:
- How to perform SQL INNER JOIN between related tables
- How to fetch and display relational data properly in PHP
- How INNER JOIN affects the result set based on matching records
- How to organize and display joined data clearly


## 📚 Note

This project is part of my PHP + MySQL learning journey focused on mastering backend development and preparing for advanced WordPress plugin building.

