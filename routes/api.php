<?php

use App\Core\Router;

$router = new Router();

$router->get('/api/users', function() {
    echo json_encode(['users' => []]);
});

// Add more API routes here