<?php declare(strict_types=1);

use Service\Router;

require __DIR__.'/../vendor/autoload.php';

$app = new App(new Router());
$app->run();
