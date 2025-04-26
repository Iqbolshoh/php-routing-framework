<?php

use App\Core\Router;
use App\Core\View;

Router::get('/', function () {
    View::render('home');
});

Router::get('/about', function () {
    echo "<h1>Hello this is About page</h1>";
});

Router::get('/user/profile', function () {
    echo "<h1>User Profile</h1>";
    echo "<h4>Iqolshoh Ilhomjonov</h4>";
    echo "<p>Full stack developer</p>";
});

Router::get('/user/profile/edit', function () {
    echo "<h1>Edit Profile</h1>";
});

Router::post('/submit', function () {
    echo "Form Submitted ✅";
});
