<?php

namespace App\Core;

class Request
{
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getPath(): string
    {
        return explode('?', $_SERVER['REQUEST_URI'])[0];
    }
}
