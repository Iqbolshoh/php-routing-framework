<?php

use App\Core\Router;
use App\Core\View;

Router::get('/', function () {
    echo "<h1>Hello</h1>";
});

Router::get('/about', function () {
    View::render('about');
});

Router::post('/submit', function () {
    echo "Form Submitted ✅";
});
