<?php

use App\Core\Router;

$router = new Router();

Router::get('/api/users', function () {
    echo json_encode(['users' => []]);
});

// Add more API routes here