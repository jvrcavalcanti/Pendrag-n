<?php

$app = require '../bootstrap/app.php';

$router = $app->getRouter();

$router->registerMiddlewares(MIDDLEWARES);

require_once "../routes/web.php";

$app->bootProviders();

$router->dispatch();
