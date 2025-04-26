<?php

namespace App\Core;

class Router
{
    protected static $routes = [];

    public static function add(string $method, string $route, callable $callback)
    {
        $method = strtoupper($method);
        $route = rtrim($route, '/') ?: '/';
        self::$routes[$method][$route] = $callback;
    }

    public static function get($route, $callback)
    {
        self::add('GET', $route, $callback);
    }

    public static function post($route, $callback)
    {
        self::add('POST', $route, $callback);
    }

    public static function dispatch(Request $request)
    {
        $method = $request->getMethod();
        $url = $request->getPath();

        if (isset(self::$routes[$method][$url])) {
            call_user_func(self::$routes[$method][$url], $request);
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
