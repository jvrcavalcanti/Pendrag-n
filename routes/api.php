<?php

/** @var \Accolon\Route\Router $router */

use App\Controller\UserController;

$router->get('/', fn() => response()->json(['message' => 'Welcome API']));

$router->get("/users", [UserController::class, 'index']);
