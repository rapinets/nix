<?php

use app\controllers\PostController;
use app\core\Application;

require_once __DIR__ . "/../vendor/autoload.php";

$app = new Application(dirname(__DIR__));

$app->router->get('/', [PostController::class, 'index']);

$app->run();
