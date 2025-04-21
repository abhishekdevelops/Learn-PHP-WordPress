# 📁 10-form-handling-validation – PHP Form Handling with POST and GET

This project demonstrates how to handle form submissions in PHP using the `POST` method with validation and feedback. It also includes a `GET` parameter example to simulate a source label passed through the URL.

---

## 🧠 Features and Concepts Covered:

### 🔹 POST Handling (Form Submission)
- `$_POST` to receive form data
- `htmlspecialchars()` to sanitize input
- Form fields: Name, Email, Message
- Displays a success message if all fields are filled
- Displays an error message if any field is empty

### 🔹 GET Handling (Bonus)
- Uses `$_GET["source"]` to read data from the URL
- Displays a message like:
  ```
  🔍 Page visited via: google
  ```
- Helps simulate traffic sources (like `?source=google`)

---

## 🧪 How to Test the GET Parameter:

Open the following URL in your browser:

```
http://localhost:8000/?source=google
```

You will see:

```
🔍 Page visited via: google
```

Clicking the link on the page does the same.

---

## 📂 Files Included:

| File        | Description                        |
|-------------|------------------------------------|
| `index.php` | Contains the complete PHP logic for both GET and POST handling |

---

## ✅ Goal:

To understand:
- How to collect and validate form data using `POST`
- How to dynamically display content from a `GET` parameter
- How PHP can react to URL-based input and user-submitted data

---

## 📌 Part of:

📁 `Learn-PHP-WordPress` – A GitHub roadmap for becoming a skilled WordPress + PHP developer.
