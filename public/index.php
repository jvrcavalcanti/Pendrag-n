<?php

require_once "../vendor/autoload.php";

$router = new \Pendragon\Framework\App;

$router->registerMiddlewares(MIDDLEWARES);

$router->registerProviders(PROVIDERS);

require_once "../routes/web.php";

$router->bootProviders();

$router->dispatch();
