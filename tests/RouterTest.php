<?php

use PHPUnit\Framework\TestCase;
use App\Core\Router;

class RouterTest extends TestCase
{
    public function testAddRoute()
    {
        $router = new Router();
        $router->add('/test', function () {
            return 'test';
        });

        $this->expectOutputString('test');
        $router->dispatch('/test');
    }

    public function testRouteNotFound()
    {
        $router = new Router();

        $this->expectOutputString('404 Not Found');
        $router->dispatch('/non-existent-route');
    }
}