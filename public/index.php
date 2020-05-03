<?php

require_once "../vendor/autoload.php";

$app = new \Accolon\Route\Route;

require_once "../routes.php";

$app->middlewares(MIDDLEWARES);

$app->dispatch();

