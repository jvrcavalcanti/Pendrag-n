<?php

$app = require '../bootstrap/app.php';

$router = $app->getRouter();

$router->registerMiddlewares(MIDDLEWARES);

require_once "../routes/web.php";

$router->prefix('api');

require_once '../routes/api.php';

$app->bootProviders();

$router->dispatch();
