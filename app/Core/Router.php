<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, callable $callback): void
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function post(string $path, callable $callback): void
    {
        $this->routes['POST'][$path] = $callback;
    }

    public function resolve(): void
    {
        $requestUri = $_SERVER['REQUEST_URI'];

        $requestUri = str_replace('/public', '', $requestUri);

        $requestUri = explode('?', $requestUri)[0];

        $method = $_SERVER['REQUEST_METHOD'];

        $callback = $this->routes[$method][$requestUri] ?? null;

        if (!$callback) {
            http_response_code(404);
            echo "404 - Not Found";
            return;
        }

        echo call_user_func($callback);
    }
}
