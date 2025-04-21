# 📁 11-form-validation-sanitization – Advanced PHP Form Validation with Field-Level Feedback

This project demonstrates advanced form handling in PHP. It extends basic validation by adding field-specific error messages, proper input sanitization, and persistent form values after submission.

---

## 🧠 Features and Concepts Covered:

### 🔹 Input Sanitization
- `trim()` – Removes unwanted spaces
- `htmlspecialchars()` – Prevents XSS or special character issues

### 🔹 Field-Level Validation
- Validates each field separately
- Uses `strlen()` to check input length
- Uses `filter_var()` to validate email format
- Custom error messages for each field

### 🔹 Form Value Retention
- Keeps user input in form fields after submission
- Helpful for improving user experience during validation

---

## 📂 Files Included:

| File        | Description                                    |
|-------------|------------------------------------------------|
| `index.php` | Full form handling code with error logic and field value retention |

---

## ✅ Validation Rules Applied:

| Field    | Rule                                         |
|----------|----------------------------------------------|
| Name     | Minimum 3 characters (`strlen()`)            |
| Email    | Must be a valid format (`filter_var()`)      |
| Message  | Minimum 5 characters (`strlen()`)            |

---

## 🧪 User Feedback Examples:

- If all inputs are valid:
  ```
  ✅ Thank you, Abhishek! Your message has been received.
  ```

- If fields are invalid:
  - Shows specific red error messages below each field
  - Form keeps the previous values for correction

---

## 🧪 How to Run This Project

You can test this project using either:

### 🔹 Option 1: PHP Built-in Server

1. Open Command Prompt or Terminal
2. Navigate to the project folder:
   ```
   cd path/to/11-form-validation-sanitization
   ```
3. Start the server:
   ```
   php -S localhost:8000
   ```
4. Open your browser and go to:
   ```
   http://localhost:8000
   ```

---

### 🔹 Option 2: XAMPP (Apache Server)

1. Place the project folder inside your `htdocs` directory:
   ```
   C:\xampp\htdocs\11-form-validation-sanitization
   ```
2. Start Apache via XAMPP control panel
3. Open your browser and visit:
   ```
   http://localhost/11-form-validation-sanitization/
   ```

---

✅ The form will be displayed, and you can test field validation, success messages, and input behavior.


## ✅ Goal:

To gain real-world practice in building user-friendly, secure, and smart forms in PHP with:
- Clean input handling
- Detailed validation feedback
- Better UI experience through value persistence

---

## 📌 Part of:

📁 `Learn-PHP-WordPress` – A GitHub roadmap to becoming a skilled WordPress + PHP developer.
