# Project 16 – PHP File Upload System

This project demonstrates how to upload files from a browser using PHP, with validation for file size and file type. Uploaded files are moved securely to a server folder.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| File Upload Form | Allow users to select files |
| PHP Upload Handling | Receive uploaded file using `$_FILES` |
| File Size Validation | Limit uploads to maximum 2MB |
| File Type Validation | Only allow JPG, PNG images and PDF files |
| Move Uploaded File | Save safely into `uploads/` folder |
| Success/Error Messages | Inform user clearly |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `index.php` | Handles file upload form, validations, file saving |
| `uploads/` | Folder where uploaded files are stored |

---

## 🧪 How to Test

1. **Start XAMPP Apache server.**
2. Place this folder inside:
   ```
   C:\xampp\htdocs\16-file-upload\
   ```
3. Open your browser and visit:
   ```
   http://localhost/16-file-upload/
   ```

4. ✅ Try uploading:
   - Small image or PDF file → Success
   - Large file (>2MB) → Blocked
   - Unsupported file types (.exe, .zip) → Blocked

5. ✅ Uploaded files will be saved inside the `uploads/` folder.

---

## ✅ What I Learned

- How file uploads work in PHP
- How to securely move uploaded files
- How to validate file size and types
- How to provide user feedback for file operations

---

## 🗂 Project Folder Structure

```
16-file-upload/
├── index.php
└── uploads/ (folder for saved files)
```

---

## 📚 Note

This project is part of my PHP learning journey focused on mastering backend development for WordPress themes and plugins.
