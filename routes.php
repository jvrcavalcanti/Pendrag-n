<?php

$app = new \Accolon\Route\Route;

$app->get("/", fn() => view("welcome"));

$app->get("/user/{id}", fn($request) => $request->get("id"));

$app->get("/auth/login", "AuthController.login", \App\Middleware\JsonResponse::class);