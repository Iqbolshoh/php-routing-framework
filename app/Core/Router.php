<?php

namespace App\Core;

class Router
{
    protected $routes = [];

    public function get($uri, $callback)
    {
        $this->routes['GET'][$uri] = $callback;
    }

    public function post($uri, $callback)
    {
        $this->routes['POST'][$uri] = $callback;
    }

    public function resolve($requestUri, $requestMethod)
    {
        $callback = $this->routes[$requestMethod][$requestUri] ?? false;

        if ($callback === false) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        echo call_user_func($callback);
    }
}