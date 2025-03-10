<?php

namespace App\Core;

class Router
{
    protected $routes = [];

    public function add($route, $callback)
    {
        $this->routes[$route] = $callback;
    }

    public function dispatch($url)
    {
        if (array_key_exists($url, $this->routes)) {
            call_user_func($this->routes[$url]);
        } else {
            echo "404 Not Found";
        }
    }
}