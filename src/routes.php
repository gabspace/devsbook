<?php
use core\Router;

$router = new Router();
// HomeController
$router->get('/', 'HomeController@index');
// LoginController
$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');
//
$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');
