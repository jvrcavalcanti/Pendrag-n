<?php

$app = require '../bootstrap/app.php';

$router = app()->getRouter();

$router->registerMiddlewares(MIDDLEWARES);

$router->attributeRoutes('../app/Controllers', 'App\\Controllers');

$router->router(require_once "../routes/web.php");

$router->router(require_once '../routes/api.php');

$app->bootProviders();

$router->dispatch();
