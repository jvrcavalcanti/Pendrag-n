<?php

/** @var \Accolon\Route\Router $router */

$router->get("/", fn() => view("welcome"));

$router->get("/users", "UserController.index");

$router->get("/register", "AuthController.register")->middleware("api.auth");
