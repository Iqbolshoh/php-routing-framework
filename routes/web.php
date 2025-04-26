<?php

use App\Core\Router;

Router::get('/', function () {
    echo "<h1>Hello</h1>";
});

Router::get('/home', function () {
    echo "Home Page";
});

Router::post('/submit', function () {
    echo "Form Submitted";
});