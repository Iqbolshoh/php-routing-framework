<?php

use App\Core\Router;

$router = new Router();

$router->get('/', function () {
    echo "Welcome to the homepage!";
});

$router->get('/about', function () {
    echo "About us page.";
});

$router->get('/submit', function () {
    echo "Form submitted.";
});
