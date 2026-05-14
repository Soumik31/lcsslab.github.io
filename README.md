# LCSS E-Commerce Web Project

🌐 **Live Demo:** [https://soumik31.github.io/lcsslab.github.io/](https://soumik31.github.io/lcsslab.github.io/)

A full-stack e-commerce web application built as part of a Master's degree project. It supports product browsing by category (Laptops, Phones, Music), a shopping cart, user registration/login, checkout with order placement, and an admin panel for managing products, users, and orders.

---

## Tech Stack

- HTML5 / CSS3 / JavaScript (ES6+)
- Supabase (PostgreSQL backend + REST API)
- Bootstrap 4.6
- jQuery 3.6
- Font Awesome 5.8

Hosted on **GitHub Pages** with **Supabase** as the backend database.

---

## Live Demo

Visit the live site: **[https://soumik31.github.io/lcsslab.github.io/](https://soumik31.github.io/lcsslab.github.io/)**

### Login Credentials

#### Admin Panel
| Username | Password  |
|----------|-----------|
| admin    | admin123  |

Access admin panel at: [/admin/adminlogin.html](https://soumik31.github.io/lcsslab.github.io/admin/adminlogin.html)

#### Sample Users
| Username | Password  |
|----------|-----------|
| alice    | alice123  |
| bob      | bob123    |
| carol    | carol123  |

---

## Features

- **Public Storefront** — Browse all products, filter by category (Laptops, Phones, Music), search by name
- **User Registration & Login** — Create account, login with credentials
- **Shopping Cart** — Add/remove products, view price summary
- **Checkout & Orders** — Place orders, view order history
- **Admin Panel** — Dashboard with stats, manage products (add/view), view users, view orders
- **Responsive Design** — Bootstrap 4.6 responsive layout

---

## Sample Products

| Category | Products |
|----------|----------|
| Laptop   | Dell XPS 15, MacBook Pro 14, Lenovo ThinkPad X1 |
| Phones   | Samsung Galaxy S24, iPhone 15 Pro, Google Pixel 8 |
| Music    | Sony WH-1000XM5, JBL Charge 5, Apple AirPods Pro |

---

## Project Structure

```
/
├── index.html              # Public homepage
├── login.html              # User login
├── registration.html       # User registration
├── laptop.html             # Laptop category
├── phone.html              # Phone category
├── music.html              # Music category
├── contact.html            # Contact page
├── aboutus.html            # About us
├── style.css               # Global styles
├── js/
│   └── supabase-config.js  # Supabase client + auth + cart utilities
│
├── admin/                  # Admin panel
│   ├── adminlogin.html     # Admin login
│   ├── index.html          # Dashboard
│   ├── products.html       # View products
│   ├── add_product.html    # Add product
│   ├── orders.html         # View orders
│   └── users.html          # View users
│
├── user/                   # Logged-in user area
│   ├── index.html          # User homepage
│   ├── cart.html           # Shopping cart
│   ├── checkout.html       # Checkout & place order
│   ├── profile.html        # User profile
│   ├── laptop.html         # Laptop category (user)
│   ├── phone.html          # Phone category (user)
│   └── music.html          # Music category (user)
│
└── img/                    # Product images
```

---

## Notes

- Passwords are stored in plaintext — this is an academic/portfolio project, not for production
- Backend powered by Supabase (PostgreSQL + REST API)
- No server-side code required — runs entirely as static files on GitHub Pages
- Built as a learning exercise for a Master's degree course (LCSS) at TH Köln
