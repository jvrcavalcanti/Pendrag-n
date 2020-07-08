<?php

require_once "../vendor/autoload.php";

$router = new \Accolon\Route\Router;

$router->registerMiddlewares(MIDDLEWARES);

require_once "../routes.php";

$router->dispatch();
