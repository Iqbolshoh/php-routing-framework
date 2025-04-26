<?php

use App\Core\Router;
use App\Core\View;

Router::get('/', function () {
    View::render('home');
});

Router::get('/about', function () {
    echo "<h1>Hello this is About page</h1>";
});

Router::get('/home/user/profile/edit', function () {
    echo "<h1>Edit Profile</h1>";
});

Router::post('/submit', function () {
    echo "Form Submitted ✅";
});
