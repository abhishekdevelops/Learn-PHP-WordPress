# Project 12 – PHP Superglobals Overview

This mini-project demonstrates the use of PHP superglobals in real-world form and session handling. It covers core superglobals used in server communication, user input handling, and session tracking.

---

## 🔍 Superglobals Covered

| Superglobal     | Purpose |
|------------------|---------|
| `$_SERVER`       | Info about server, current file, request method, browser info |
| `$_GET`          | Captures query parameters from the URL |
| `$_POST`         | Handles form data submitted via POST |
| `$_REQUEST`      | Combines `$_GET`, `$_POST`, and `$_COOKIE` |
| `$_SESSION`      | Stores data across multiple pages (e.g., login state) |
| `$_COOKIE`       | Stores small pieces of data on the client browser |

---

## 📁 Files in This Folder

| File | Description |
|------|-------------|
| `index.php`         | Displays server info, GET parameter, and handles a POST form submission |
| `session-demo.php`  | Stores submitted username using `$_SESSION` |
| `cookie-demo.php`   | Sets and reads a cookie using `$_COOKIE` |

---

## 🧪 How to Test

1. **Start XAMPP Apache server**
2. Place this folder in `C:\xampp\htdocs\12-superglobals-overview\`
3. Open browser and navigate to:

```
http://localhost/12-superglobals-overview/
```

- Use the form → Check POST & REQUEST handling
- Click the `?source=github` link → Test GET handling

4. Navigate to:

```
http://localhost/12-superglobals-overview/session-demo.php
```
- Submit your name → Stored using `$_SESSION`

5. Navigate to:

```
http://localhost/12-superglobals-overview/cookie-demo.php
```
- Refresh page → Shows stored cookie value

---

## ✅ What I Learned

- How superglobals interact with forms and requests
- Differences between `$_GET`, `$_POST`, and `$_REQUEST`
- How to start and use PHP sessions
- How to set and retrieve cookies with expiration

---

## 🗂 Project Folder Structure

```
12-superglobals-overview/
├── index.php
├── session-demo.php
├── cookie-demo.php
└── README.md
```
