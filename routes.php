<?php

use Accolon\Route\Route;

Route::get("/", fn() => view("welcome"));

Route::get("/auth/login", "AuthController.login");