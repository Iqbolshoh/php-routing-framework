<?php

require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Core/Request.php';
require_once __DIR__ . '/../app/Core/Response.php';

use App\Core\Router;

$router = new Router();

$router->get('/', function () {
    return "Salom!";
});

$router->get('/home', function () {
    return "Bosh sahifa!";
});

$router->resolve();
