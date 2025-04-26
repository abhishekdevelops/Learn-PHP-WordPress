# Project 13 – PHP Include, Require, and Error Handling

This project demonstrates the use of `include()`, `require()`, and basic error handling in PHP. It covers how PHP handles missing files, warnings, and fatal errors when using different file inclusion methods.

---

## 🔍 Concepts Practiced

| Concept | Purpose |
|---------|---------|
| `include()` | Includes external files, gives a warning if missing but script continues |
| `require()` | Includes external files, but stops execution if file is missing (fatal error) |
| `include_once()` / `require_once()` | Prevents multiple inclusions of the same file |
| `error_reporting()` + `ini_set()` | Enables full error visibility during development |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `index.php`       | Main file demonstrating `include`, `require`, and error reporting |
| `header.php`      | Simulated header section |
| `footer.php`      | Simulated footer section |
| `missingfile.php` | Intentionally left empty to show how PHP handles missing or empty includes |

---

## 🧪 How to Test

1. **Start XAMPP Apache server.**
2. Place this folder in:
   ```
   C:\xampp\htdocs\13-include-require-error-handling\
   ```
3. Open your browser and visit:
   ```
   http://localhost/13-include-require-error-handling/
   ```

4. ✅ You should see:
   - Header output
   - (If `missingfile.php` is missing, a warning)
   - Footer output

5. ⚠️ To test a **fatal error**:
   - Uncomment the line:
     ```php
     // require("doesnotexist.php");
     ```
   - Reload the page
   - PHP will throw a fatal error and stop executing the script.

---

## ✅ What I Learned

- How `include()` continues execution even when a file is missing
- How `require()` stops execution when a file is missing
- The importance of error visibility during PHP development
- How WordPress and large applications use modular file structures safely

---

## 🗂 Project Folder Structure

```
13-include-require-error-handling/
├── index.php
├── header.php
├── footer.php
├── missingfile.php
└── README.md
```

---

## 📚 Note

This project is part of my PHP learning journey focused on mastering backend development for WordPress themes and plugins.

