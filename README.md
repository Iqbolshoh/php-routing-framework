# php-route-core

`php-route-core` is a lightweight and efficient PHP routing engine designed to manage URL routes in web applications.

## 📂 Project Structure
```
/php-route-core
│── /app                  # Core PHP code (Routing Engine)
│   ├── /Core             # Framework core files
│   │   ├── Router.php    # Manages URL routing
│   │   ├── Request.php   # Handles user requests
│   │   ├── Response.php  # Sends responses
│
│── /routes               # Routing files
│   ├── web.php           # Frontend routes
│   ├── api.php           # Backend API routes
│
│── /public               # Public directory (Entry point)
│   ├── index.php         # Initializes the routing system
│
│── /tests                # Unit tests
│   ├── RouterTest.php    # Tests for the routing system
│
│── .env                  # Environment variables (if needed)
│── .htaccess             # Apache server configuration (Pretty URLs)
│── composer.json         # PHP dependencies (Composer)
│── README.md             # Project documentation
```

## 📌 Installation

1️⃣ **Clone the repository**
```bash
git clone https://github.com/Iqbolshoh/php-route-core.git
```

2️⃣ **Install dependencies using Composer**
```bash
composer install
```

3️⃣ **Ensure Apache is properly configured**  
Make sure `.htaccess` is enabled for pretty URLs.

## 🚀 Usage

### ➕ Adding a New Route
To add a new route, modify the `routes/web.php` file:
```php
$router->get('/home', function() {
    echo 'Home Page';
});
```

### 🔒 Using Middleware
Middleware files are stored in the `Middleware/` directory and can be used to add security layers and request validations.

## ✅ Running Tests
To run tests for the routing system, execute:
```bash
php tests/RouterTest.php
```