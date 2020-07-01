<?php

require_once "../vendor/autoload.php";

$app = new \Accolon\Route\Router;

$app->registerMiddlewares(MIDDLEWARES);

require_once "../routes.php";

$app->dispatch();

