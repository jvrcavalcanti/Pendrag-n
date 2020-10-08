<?php

/** @var \Pendragon\Framework\App $router */

use App\Controller\UserController;

$router->get("/", fn() => view("welcome"));

$router->get("/users", [UserController::class, 'index']);

$router->post("/register", "App\Controller\AuthController->register");
