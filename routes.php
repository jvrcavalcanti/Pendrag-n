<?php

/** @var \Pendragon\Framework\App $app */

$app->get("/", fn() => view("welcome"));

$app->get("/users", "UserController.index");

$app->post("/register", "AuthController.register");
