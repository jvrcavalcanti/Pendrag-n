<?php

/** @var \Accolon\Route\Router $router */

$router->get("/", fn() => view("welcome"));

$router->post("/register", "App\Controller\AuthController->register");
