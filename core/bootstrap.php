<?php

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

die(var_dump(App::get('config')));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));