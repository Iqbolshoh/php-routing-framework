<?php

namespace App\Core;

use App\Core\Request;
use App\Core\Response;

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
        $request = new Request();
        $response = new Response();

        $method = $request->getMethod();
        $path = $request->getPath();

        $callback = $this->routes[$method][$path] ?? null;

        if (!$callback) {
            $response->setStatusCode(404);
            echo "404 - Not Found";
            return;
        }

        echo call_user_func($callback, $request, $response);
    }
}
