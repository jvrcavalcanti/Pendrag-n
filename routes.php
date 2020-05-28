<?php

/** @var \Accolon\Route\Route $app */

$app->get("/", fn() => view("welcome"));

$app->get("/users", "UserController.index");