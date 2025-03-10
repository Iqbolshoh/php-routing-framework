<?php

namespace App\Helpers;

function view($view, $data = [])
{
    extract($data);
    $viewPath = __DIR__ . '/../views/' . str_replace('.', '/', $view) . '.php';
    if (file_exists($viewPath)) {
        include $viewPath;
    } else {
        echo "View not found: $viewPath";
    }
}