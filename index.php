<?php
// when using composer you must require autoloader
require 'vendor/autoload.php';

require 'core/bootstrap.php';

use App\Core\{Router, Request};

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// we don't need to require anything with newing up a controller
Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());