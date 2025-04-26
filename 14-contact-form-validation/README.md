# Project 14 – PHP Contact Form with Validation

This mini-project demonstrates how to create a basic contact form using PHP with server-side validation. It covers checking for empty fields, validating email format, and displaying appropriate success or error messages.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| Name validation | Ensures Name field is not empty |
| Email validation | Ensures Email field is not empty and in proper email format |
| Message field | Optional input from the user |
| Error messages | Displayed clearly if fields are missing or invalid |
| Success message | Shown when form is submitted correctly |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `index.php` | Contains the HTML form and PHP validation logic |
| `README.md` | Project documentation |

---

## 🧪 How to Test

1. **Start XAMPP Apache server.**
2. Place this folder in:
   ```
   C:\xampp\htdocs\14-contact-form-validation\
   ```
3. Open your browser and visit:
   ```
   http://localhost/14-contact-form-validation/
   ```

4. ✅ Fill out the form:
   - Leave fields empty → See error messages
   - Enter invalid email → See invalid email format warning
   - Fill all fields correctly → See green success message

---

## ✅ What I Learned

- How to validate form fields on the server side
- How to use `htmlspecialchars()` to prevent XSS (Cross-Site Scripting)
- How to validate email format using `filter_var()`
- How to retain user inputs after form submission
- How to display success or error feedback dynamically

---

## 🗂 Project Folder Structure

```
14-contact-form-validation/
├── index.php
└── README.md
```

---

## 📚 Note

This project is part of my PHP learning journey focused on mastering backend development for WordPress themes and plugins.
