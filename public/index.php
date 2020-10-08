<?php

require_once "../vendor/autoload.php";

$router = new \Pendragon\Framework\App;

$router->registerMiddlewares(MIDDLEWARES);

$router->registerProviders(PROVIDERS);

$router->bootProviders();

require_once "../routes.php";

$router->dispatch();
