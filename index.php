<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// when using composer you must require autoloader
require 'vendor/autoload.php';

require 'core/bootstrap.php';

// die(var_dump(Request::uri()));
// exit;

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());