<?php

/** @var \Accolon\Route\Route $app */

$app->get("/", fn() => view("welcome"), \App\Middleware\AuthMiddleware::class);

$app->get("/users", "UserController.index");

$app->get("/register", "AuthController.register");