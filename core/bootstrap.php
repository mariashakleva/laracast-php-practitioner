<?php

use App\Core\App;

// $app = [];

// $app['config'] = require 'config.php';

//don't need it because we use autoloader
// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );

// instead of storing everything in an array
App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = []){

    extract($data);

    //reverse than compact
    //if we have ['name' => 'joe', 'age' => 25]
    //extract creates variables from the keys and assigns a value ex. $name = 'joe'


    return require "app/views/{$name}.view.php";    
}

function redirect($path){

    header("Location: /{$path}");

}