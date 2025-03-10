<?php

namespace App\Middleware;

class AuthMiddleware
{
    public function handle()
    {
        // Auth logic here
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
    }
}