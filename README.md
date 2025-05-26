# 🔀 PHP Routing Framework

Welcome to `php-routing-framework` — your ultimate multi-functional PHP routing engine designed for modern web apps! 🚀

## 💡 Why Choose This Framework?

* **Lightweight & Fast** ⚡ — Minimal footprint, optimized for speed.
* **Multi-functional Routing** 🎯 — Supports GET, POST, PUT, DELETE routes and more.
* **Clean Code Structure** 📂 — Modular design: clear separation of concerns.
* **Middleware Ready** 🛡️ — Add pre/post-processing for requests (auth, logging).
* **REST API Friendly** 🌐 — Easily manage API endpoints alongside web routes.
* **Custom Response Handling** 📤 — Send JSON, HTML, redirects, or custom headers.
* **Environment Config Support** 🌍 — `.env` ready for flexible deployment.
* **Unit Tested** 🧪 — Stability ensured with built-in tests.


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
git clone https://github.com/Iqbolshoh/php-routing-framework
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
Router::get('/', function () {
    View::render('home');
});

Router::get('/about', function () {
    echo "<h1>Hello this is About page</h1>";
});
```

## 🖥 Technologies Used
![PHP](https://img.shields.io/badge/PHP-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-%234479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)

## 📜 License
This project is open-source and available under the **MIT License**.

## 🤝 Contributing  
🎯 Contributions are welcome! If you have suggestions or want to enhance the project, feel free to fork the repository and submit a pull request.

## 📬 Connect with Me  
💬 I love meeting new people and discussing tech, business, and creative ideas. Let’s connect! You can reach me on these platforms:

<div align="center">
  <table>
    <tr>
      <td>
        <a href="https://iqbolshoh.uz" target="_blank">
          <img src="https://img.icons8.com/color/48/domain.png" 
               height="40" width="40" alt="Website" title="Website" />
        </a>
      </td>
      <td>
        <a href="mailto:iilhomjonov777@gmail.com" target="_blank">
          <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/gmail.svg"
               height="40" width="40" alt="Email" title="Email" />
        </a>
      </td>
      <td>
        <a href="https://github.com/iqbolshoh" target="_blank">
          <img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/github.svg"
               height="40" width="40" alt="GitHub" title="GitHub" />
        </a>
      </td>
      <td>
        <a href="https://www.linkedin.com/in/iqbolshoh/" target="_blank">
          <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/linkedin.svg"
               height="40" width="40" alt="LinkedIn" title="LinkedIn" />
        </a>
      </td>
      <td>
        <a href="https://t.me/iqbolshoh_777" target="_blank">
          <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/telegram.svg"
               height="40" width="40" alt="Telegram" title="Telegram" />
        </a>
      </td>
      <td>
        <a href="https://wa.me/998997799333" target="_blank">
          <img src="https://github.com/gayanvoice/github-active-users-monitor/blob/master/public/images/icons/whatsapp.svg"
               height="40" width="40" alt="WhatsApp" title="WhatsApp" />
        </a>
      </td>
      <td>
        <a href="https://instagram.com/iqbolshoh_777" target="_blank">
          <img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/instagram.svg"
               height="40" width="40" alt="Instagram" title="Instagram" />
        </a>
      </td>
      <td>
        <a href="https://x.com/iqbolshoh_777" target="_blank">
          <img src="https://img.shields.io/badge/X-000000?style=for-the-badge&logo=x&logoColor=white"
               height="40" width="40" alt="X" title="X (Twitter)" />
        </a>
      </td>
      <td>
        <a href="https://www.youtube.com/@Iqbolshoh_777" target="_blank">
          <img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/youtube.svg"
               height="40" width="40" alt="YouTube" title="YouTube" />
        </a>
      </td>
    </tr>
  </table>
</div>
