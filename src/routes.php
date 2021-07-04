<?php
use core\Router;

$router = new Router();
// HomeController
$router->get('/', 'HomeController@index');
// LoginController
$router->get('/login', 'LoginController@signin');
$router->get('/cadastro', 'LoginController@signup');

