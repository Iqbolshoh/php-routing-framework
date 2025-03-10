<?php

use App\Core\Router;
use function App\Helpers\view;

Router::get('/', function () {
    return view('welcome');
});

Router::get('/about', function () {
    return view('about');
});

Router::get('/submit', function () {
    return view('submit');
});

Router::get('/user/{name}', function ($name) {
    return view('users.main', ['name' => $name]);
});

Router::get('/user/{name}', function ($name) {
    return view('users.main')->with('name', $name);
});