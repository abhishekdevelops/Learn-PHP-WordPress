# Project 18 – PHP Session-Based Login and Logout System

This project demonstrates how to create a simple Login and Logout system in PHP using **Sessions**.  
User credentials are hardcoded, and session management controls access to a protected dashboard page.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| Login Form | Allow user to enter username and password |
| Hardcoded Authentication | Validate against predefined credentials |
| Session Management | Start session after successful login |
| Protected Dashboard | Accessible only to logged-in users |
| Logout Functionality | Destroy session and redirect to login page |
| Error Messaging | Inform user on invalid login attempts |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `login.php` | Display login form and handle user authentication |
| `dashboard.php` | Protected dashboard page for logged-in users |
| `logout.php` | Logout script to destroy the session and redirect |

---

## 🧪 How to Test

1. **Start XAMPP Apache server.**
2. Place this folder inside:
   ```
   C:\xampp\htdocs\18-session-login-logout\
   ```
3. Open your browser and visit:
   ```
   http://localhost/18-session-login-logout/login.php
   ```

4. ✅ Test scenarios:
   - Correct credentials (`admin` / `password123`) ➔ Redirect to dashboard.
   - Incorrect credentials ➔ Show error message.
   - Click Logout ➔ End session and return to login page.

---

## ✅ What I Learned

- How PHP sessions work to maintain user state
- How to secure protected pages
- How to handle login authentication manually
- How to redirect users using PHP header
- How to manage session destruction securely on logout

---

## 🗂 Project Folder Structure

```
18-session-login-logout/
├── login.php
├── dashboard.php
└── logout.php
```

---

## 📚 Note

This project is part of my PHP learning journey focused on mastering backend development for WordPress themes and plugins.
