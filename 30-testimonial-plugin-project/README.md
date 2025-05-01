# Project 30 – Testimonials Plugin

This project demonstrates how to create a custom WordPress plugin that registers a new post type called “Testimonials” and displays them using a shortcode.

---

## 🔍 Features Implemented

| Feature | Purpose |
|---------|---------|
| Custom Post Type | Register a new post type: Testimonials |
| Admin UI | Add testimonials from the WordPress admin panel |
| Shortcode | Display testimonials dynamically using `[myplugin_testimonials]` |
| WP_Query Integration | Fetch and loop through testimonials |
| Clean Frontend Display | Show testimonials in a styled HTML block |

---

## 📁 Files in This Project

| File | Purpose |
|------|---------|
| `myfirstplugin.php` | Registers the post type and shortcode logic |

---

## 🧪 How to Test

1. **Start LocalWP and open your WordPress site.**
2. Place this folder inside:
   ```
   Local Sites > custom-theme-dev > app > public > wp-content > plugins > myfirstplugin
   ```
3. Go to WordPress admin → **Plugins → Installed Plugins**
4. Activate **My First Plugin**
5. ✅ Go to **Testimonials → Add New** and create a few testimonials
6. ✅ Create a page and paste `[myplugin_testimonials]` into the content
7. ✅ View the page and see your testimonials displayed dynamically

---

## ✅ What I Learned

- How to register a custom post type using `register_post_type()`  
- How to build and register a WordPress shortcode  
- How to use `WP_Query` to fetch custom posts  
- How to loop and render data inside a shortcode output  
- How to create functional admin+frontend plugin architecture

---

## 🗂 Project Folder Structure

```
30-testimonial-plugin-project/
└── myfirstplugin/
    └── myfirstplugin.php
```

---

## 📚 Note

This project is part of my advanced WordPress plugin development journey, focusing on shortcodes, admin integration, and frontend output using WP best practices.
