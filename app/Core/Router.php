<?php

namespace App\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => [],
        'PATCH' => [],
    ];

    public function get($route, $callback)
    {
        $this->routes['GET'][$route] = $callback;
    }

    public function post($route, $callback)
    {
        $this->routes['POST'][$route] = $callback;
    }

    public function put($route, $callback)
    {
        $this->routes['PUT'][$route] = $callback;
    }

    public function delete($route, $callback)
    {
        $this->routes['DELETE'][$route] = $callback;
    }

    public function patch($route, $callback)
    {
        $this->routes['PATCH'][$route] = $callback;
    }

    public function dispatch($url, $method)
    {
        $method = strtoupper($method);
        if (array_key_exists($url, $this->routes[$method])) {
            call_user_func($this->routes[$method][$url]);
        } else {
            echo "404 Not Found";
        }
    }
}