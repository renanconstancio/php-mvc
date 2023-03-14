<?php

require __DIR__ . '/vendor/autoload.php';

use App\Http\Router;
use App\Utils\View;
use WilliamCosta\DotEnv\Environment;

Environment::load(__DIR__);

View::init([]);


$router = new Router('');

include __DIR__ . '/routes/pages.php';

$router->run()
  ->sendResponse();
