<?php

require_once "../vendor/autoload.php";

$app = new \Pendragon\Framework\App;

$app->registerMiddlewares(MIDDLEWARES);

require_once "../routes.php";

$app->dispatch();
