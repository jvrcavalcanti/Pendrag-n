<?php

/** @var \Accolon\Route\Route $app */

$app->get("/", fn() => view("welcome"));

$app->get("/auth/login", "AuthController.login", \Accolon\Route\Middlewares\JsonResponse::class);