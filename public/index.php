<?php

use App\Core\Router;
use App\Core\Request;

require_once __DIR__ . '/../vendor/autoload.php';

$request = new Request();
$router = new Router();

require_once __DIR__ . '/../routes/web.php';

$router::dispatch($request);
