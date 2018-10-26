<?php

ini_set('display_errors', 1);

$tasks = $app['database']->selectAll('todos');

require 'views/index.view.php';
