<?php

use App\Core\Router;

Router::get('/home', function () {
    echo "Home Page";
});

Router::post('/submit', function () {
    echo "Form Submitted";
});