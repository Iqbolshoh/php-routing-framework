# php-route-core

## Introduction
`php-route-core` is a lightweight PHP routing engine designed to manage URL routes efficiently in web applications.

## File Structure
```
/php-route-core
│── /app                  # Core PHP code (Routing Engine)
│   ├── /Core             # Framework core (Kernel)
│   │   ├── Router.php    # Manages URL routing
│   │   ├── Request.php   # Handles user requests
│   │   ├── Response.php  # Sends responses
│   │
│   ├── /Middleware       # Middleware (Security & Authentication)
│   │   ├── AuthMiddleware.php # Checks user authentication
│   │   ├── CsrfMiddleware.php # Protects against CSRF attacks
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
│── /helpers              # Helper functions
│   ├── utils.php         # URL formatting, debugging, etc.
│
│── .env                  # Environment variables (if needed)
│── .htaccess             # Apache server configuration (Pretty URLs)
│── composer.json         # PHP dependencies (Composer)
│── README.md             # Project documentation
```

## Installation
1. **Clone the repository**
```bash
git clone https://github.com/Iqbolshoh/php-route-core.git
```

2. **Install dependencies using Composer**
```bash
composer install
```

3. **Ensure Apache is configured properly**  
   Check if `.htaccess` is enabled on your Apache server.

## Usage
### Adding a Route
To add a new route, modify the `routes/web.php` file:
```php
$router->get('/home', function() {
    echo 'Home Page';
});
```

### Using Middleware
Middleware files are stored in the `Middleware/` directory and can be applied to specific routes for added security.

## Testing
To run tests on the routing system:
```bash
php tests/RouterTest.php