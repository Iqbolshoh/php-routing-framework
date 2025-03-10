<?php

$router->get('/', function () {
    return 'Welcome to the homepage!';
});

$router->get('/about', function () {
    return 'About us page';
});

$router->get('/new', function () {
    return 'New page';
});