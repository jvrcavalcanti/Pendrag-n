<?php

use App\Controller\UserController;

$router = app()->getRouter();

$router->pushPrefix('/api');

$router->get('/', fn() => response()->json(['message' => 'Welcome API']));

$router->get("/users", [UserController::class, 'index']);

$router->popPrefix();

return $router;
