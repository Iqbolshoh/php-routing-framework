<?php

$router->get('/', function() {
    return 'Welcome to the homepage!';
});

$router->get('/about', function() {
    return 'About us page';
});