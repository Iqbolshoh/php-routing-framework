<?php

namespace App\Middleware;

class CsrfMiddleware
{
    public function handle()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['_token']) || $_POST['_token'] !== $_SESSION['_token']) {
                die('Invalid CSRF token');
            }
        }
    }
}