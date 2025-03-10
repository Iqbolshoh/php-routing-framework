<?php

use PHPUnit\Framework\TestCase;
use App\Core\Router;

class RouterTest extends TestCase
{
    public function testGetRoute()
    {
        $router = new Router();
        $router->get('/test', function () {
            return 'Test route';
        });

        $_SERVER['REQUEST_URI'] = '/test';
        $_SERVER['REQUEST_METHOD'] = 'GET';

        ob_start();
        $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
        $output = ob_get_clean();

        $this->assertEquals('Test route', $output);
    }

    public function testNotFoundRoute()
    {
        $router = new Router();

        $_SERVER['REQUEST_URI'] = '/not-found';
        $_SERVER['REQUEST_METHOD'] = 'GET';

        ob_start();
        $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
        $output = ob_get_clean();

        $this->assertEquals('404 Not Found', $output);
    }

    public function testAboutRoute()
    {
        $router = new Router();
        $router->get('/about', function () {
            return 'About us page';
        });

        $_SERVER['REQUEST_URI'] = '/about';
        $_SERVER['REQUEST_METHOD'] = 'GET';

        ob_start();
        $router->resolve($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
        $output = ob_get_clean();

        $this->assertEquals('About us page', $output);
    }
}