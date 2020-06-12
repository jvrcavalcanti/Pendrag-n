<?php

require_once "../vendor/autoload.php";

$app = new \Accolon\Route\Router;

require_once "../routes.php";

$app->middlewares(MIDDLEWARES);

$app->dispatch();

