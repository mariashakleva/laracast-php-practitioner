<?php

$router->get('','PageController@home');

$router->get('about','PageController@about');

$router->get('contact','PageController@contact');

$router->get('users', 'UsersController@index');

$router->post('users', 'UsersController@store');

// $router->post('tasks','controllers/add-task.php');

// var_dump($router->routes);