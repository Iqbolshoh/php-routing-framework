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
        $uri = $this->sanitizeUri($requestUri);
        $callback = $this->routes[$requestMethod][$uri] ?? false;

        if ($callback === false) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        echo call_user_func($callback);
    }

    protected function sanitizeUri($uri)
    {
        return rtrim(parse_url($uri, PHP_URL_PATH), '/');
    }
}