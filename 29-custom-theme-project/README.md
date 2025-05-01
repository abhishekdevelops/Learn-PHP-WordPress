# Project 29 – Custom WordPress Theme

This project demonstrates how to build a fully functional WordPress theme from scratch.  
The theme supports dynamic blog posts, pages, navigation menus, and includes reusable header and footer templates.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| WordPress Loop | Display dynamic blog posts on the homepage |
| Template Files | Separate templates for posts, pages, 404 errors |
| Header/Footer | Modular and reusable header and footer layout |
| Menu Support | Custom menu registration and display |
| Style Enqueueing | Load theme styles using `functions.php` |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `style.css` | Theme identification and basic styling |
| `index.php` | Homepage structure using the WordPress loop |
| `functions.php` | Load CSS and enable menu support |
| `header.php` | Site header layout and meta info |
| `footer.php` | Footer structure and copyright |
| `single.php` | Template for individual blog posts |
| `page.php` | Template for WordPress static pages |
| `404.php` | Custom “Page Not Found” template |

---

## 🧪 How to Test

1. **Start LocalWP and open your WordPress site.**
2. Place this folder inside:
   ```
   Local Sites > custom-theme-dev > app > public > wp-content > themes > mycustomtheme
   ```
3. Go to WordPress admin → **Appearance → Themes**
4. Activate **My Custom Theme**
5. ✅ Visit the homepage to see blog posts rendered via the loop.
6. ✅ Create a page or blog post to test `page.php` and `single.php`.
7. ✅ Visit a non-existent URL to test the `404.php` page.
8. ✅ Add a custom menu and verify it displays in the header.

---

## ✅ What I Learned

- How to structure and build a custom WordPress theme  
- How to implement the WordPress loop to show dynamic posts  
- How to use template files to control layout for posts and pages  
- How to register and display custom menus using `functions.php`  
- How to modularize header and footer with reusable templates

---

## 🗂 Project Folder Structure

```
29-custom-theme-project/
└── mycustomtheme/
    ├── style.css
    ├── index.php
    ├── functions.php
    ├── header.php
    ├── footer.php
    ├── single.php
    ├── page.php
    └── 404.php
```

---

## 📚 Note

This project is part of my PHP + WordPress development journey focused on mastering theme creation, layout structuring, and template logic.
