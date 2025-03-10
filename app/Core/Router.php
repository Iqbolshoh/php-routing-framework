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
        foreach (self::$routes[$method] as $route => $callback) {
            if (preg_match(self::convertToRegex($route), $url, $matches)) {
                array_shift($matches);
                return call_user_func_array($callback, $matches);
            }
        }
        echo "404 Not Found";
    }

    private static function convertToRegex($route)
    {
        return '/^' . str_replace(['{', '}'], ['(?P<', '>[^\/]+)'], $route) . '$/';
    }
}