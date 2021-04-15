<?php

$router = app()->getRouter();

$router->get("/", fn() => view("welcome"));

return $router;

// $router->post("/register", "App\Controller\AuthController->register");
