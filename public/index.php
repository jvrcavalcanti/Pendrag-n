<?php

require_once "../vendor/autoload.php";

$app = new \Pendragon\Framework\App;

$app->registerMiddlewares(MIDDLEWARES);

$app->registerProviders(PROVIDERS);

$app->bootProviders();

require_once "../routes.php";

$app->dispatch();
