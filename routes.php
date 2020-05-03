<?php

/** @var \Accolon\Route\Route $app */

$app->get("/", fn() => view("welcome"));

$app->get("/auth/login", "AuthController.login", \App\Middleware\JsonResponse::class);