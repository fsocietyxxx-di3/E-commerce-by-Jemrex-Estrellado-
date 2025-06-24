
# 🛒 E-commerce Website by Jemrex Estrellado

An end-to-end **E-commerce Website** built using PHP and MySQL, designed to simulate a functional online shopping platform. This project allows users to browse products, add items to a cart, and manage purchases through a simple yet effective user interface. Ideal for learning the fundamentals of full-stack web development.

---

## 🚀 Features

- User-friendly product catalog
- Add to cart & shopping cart management
- Customer login and registration system
- Admin dashboard for product and order management
- Product category filtering
- Checkout and order processing
- Responsive design (basic mobile support)

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Server Environment:** XAMPP (Apache + MySQL)

---

## 💻 Installation Instructions

Follow these steps to run the project locally:

### 1. Clone the Repository

```bash
git clone https://github.com/leonBADassx/E-commerce-by-Jemrex-Estrellado-.git
```

### 2. Move Project to XAMPP

Copy the cloned folder into your XAMPP `htdocs` directory:

```bash
# Example path on Windows:
C:\xampp\htdocs\E-commerce-by-Jemrex-Estrellado-
```

### 3. Start Apache and MySQL

Open **XAMPP Control Panel** and start both **Apache** and **MySQL**.

---

## ⚙️ Configuration Steps

### 1. Import the Database

1. Open your browser and go to: `http://localhost/phpmyadmin`
2. Click **Import**
3. Upload the `.sql` file located in the project folder (commonly named like `ecommerce.sql`)
4. Click **Go** to import the database

### 2. Connect Database in Code

Make sure the database credentials in the PHP files match your local setup. Usually found in a config or connection file like:

```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ecommerce"; // Ensure this matches the imported database name
$conn = mysqli_connect($host, $user, $pass, $db);
```

> 🔒 **Note:** No password is required for `root` by default on XAMPP.

---

## 📁 Folder Structure

```bash
E-commerce-by-Jemrex-Estrellado-/
│
├── admin/              # Admin panel for managing products/orders
├── assets/             # CSS, JS, and images
├── includes/           # Header, footer, and reusable components
├── pages/              # Main site pages like home, products, etc.
├── sql/                # Database import file (if available)
├── index.php           # Landing page
└── config.php          # Database connection settings
```

---

## 📸 Screenshots / Demo

> ⚠️ *Screenshots and live demo not available yet.*

You can contribute by adding screenshots or hosting a demo version online!

---

## 👨‍💻 Credits

Developed by **Jemrex Estrellado**  
GitHub: [leonBADassx](https://github.com/leonBADassx)

---

## 📄 License

> This project is currently not licensed. You can add a license section here later.

---
