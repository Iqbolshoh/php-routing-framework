<?php

use PHPUnit\Framework\TestCase;
use App\Core\Router;

class RouterTest extends TestCase
{
    public function testAddRoute()
    {
        Router::get('/test', function () {
            echo 'test';
        });

        $this->expectOutputString('test');
        Router::dispatch('/test', 'get');
    }

    public function testRouteNotFound()
    {
        $this->expectOutputString('404 Not Found');
        Router::dispatch('/non-existent-route', 'get');
    }
}