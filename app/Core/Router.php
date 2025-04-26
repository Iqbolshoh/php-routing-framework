<?php

namespace App\Core;

class Router
{
    protected static $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => [],
        'PATCH' => [],
    ];

    public static function get($route, $callback)
    {
        self::$routes['GET'][$route] = $callback;
    }

    public static function post($route, $callback)
    {
        self::$routes['POST'][$route] = $callback;
    }

    public static function put($route, $callback)
    {
        self::$routes['PUT'][$route] = $callback;
    }

    public static function delete($route, $callback)
    {
        self::$routes['DELETE'][$route] = $callback;
    }

    public static function patch($route, $callback)
    {
        self::$routes['PATCH'][$route] = $callback;
    }

    public static function dispatch($url, $method)
    {
        $method = strtoupper($method);
        if (array_key_exists($url, self::$routes[$method])) {
            call_user_func(self::$routes[$method][$url]);
        } else {
            self::render404();
        }
    }

    protected static function render404()
    {
        http_response_code(404);
        require_once __DIR__ . '/../Views/errors/404.php';
    }
}