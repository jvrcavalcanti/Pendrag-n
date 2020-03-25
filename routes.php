<?php

$app = new \Accolon\Route\Route;

$app->get("/", fn() => view("welcome"));

$app->get("/auth/login", "AuthController.login");