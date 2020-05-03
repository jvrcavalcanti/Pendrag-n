<?php

require_once "../vendor/autoload.php";
require_once "../routes.php";

$app = new \Accolon\Route\Route;

$app->middlewares(MIDDLEWARES);

$app->dispatch();

