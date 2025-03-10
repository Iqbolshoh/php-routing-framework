<?php

$router->get('/api/users', function() {
    return json_encode(['user1', 'user2', 'user3']);
});