<?php

use App\Core\Router;

$router = new Router();

$router->add('/', function() {
    echo "Welcome to the homepage!";
});

$router->add('/about', function() {
    echo "About us page.";
});

// Add more routes here