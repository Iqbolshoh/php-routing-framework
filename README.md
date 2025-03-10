# php-route-core

## Loyihaga kirish
`php-route-core` - bu PHP asosida yaratilgan yengil routing tizimi bo‘lib, veb-ilovalarda URL marshrutlarini boshqarish uchun ishlatiladi.

## File Strukture
```
/php-route-core
│── /app                  # Asosiy PHP kodlar (Routing Engine)
│   ├── /Core             # Framework yuragi (Kernel)
│   │   ├── Router.php    # URL marshrutlarni boshqaruvchi class
│   │   ├── Request.php   # Foydalanuvchi so‘rovlarini boshqarish classi
│   │   ├── Response.php  # Javob qaytarish uchun class
│   │
│   ├── /Middleware       # Oraliq qatlam (Security & Authentication)
│   │   ├── AuthMiddleware.php # Foydalanuvchi autentifikatsiyasini tekshiradi
│   │   ├── CsrfMiddleware.php # CSRF hujumlaridan himoya qiladi
│
│── /routes               # Routing fayllari
│   ├── web.php           # Sayt yo‘nalishlari (Frontend routes)
│   ├── api.php           # API yo‘nalishlari (Backend API routes)
│
│── /public               # Foydalanuvchi ko‘radigan asosiy katalog
│   ├── index.php         # Routing tizimini ishga tushiruvchi fayl (Entry point)
│
│── /tests                # Testlar
│   ├── RouterTest.php    # Routing tizimini sinash uchun testlar
│
│── /helpers              # Qo‘shimcha yordamchi funksiyalar
│   ├── utils.php         # URL larni formatlash, debugger va boshqalar
│
│── .env                  # Maxfiy ma’lumotlar (agar kerak bo‘lsa)
│── .htaccess             # Apache server sozlamalari (Pretty URLs)
│── composer.json         # PHP kutubxonalar ro‘yxati (Composer)
│── README.md             # Loyiha haqida qisqacha ma’lumot
```

## O‘rnatish
1. **Git repositoryni yuklab olish**
```
git clone https://github.com/Iqbolshoh/php-route-core.git
```

2. **Composer orqali bog‘liqliklarni o‘rnatish**
```
composer install
```

3. **Apache konfiguratsiyasini tekshirish**
   `.htaccess` fayli Apache serverda ishlashini tekshiring.

## Foydalanish
### Routing qo‘shish
`routes/web.php` faylida yangi yo‘nalishlarni qo‘shing:
```php
$router->get('/home', function() {
    echo 'Bosh sahifa';
});
```

### Middleware ishlatish
Middleware-larni `Middleware/` papkasida yaratish mumkin va kerakli yo‘nalishlarga qo‘shish mumkin.

## Testlash
Router tizimini test qilish uchun:
```
php tests/RouterTest.php
```