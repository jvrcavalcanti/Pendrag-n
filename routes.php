<?php

/** @var \Accolon\Route\Router $app */

$app->get("/", fn() => view("welcome"));

$app->get("/users", "UserController.index");

$app->get("/register", "AuthController.register");