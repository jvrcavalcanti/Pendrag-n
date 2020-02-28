<?php

use Accolon\Route\Route;

Route::get("/", function() {
    view("./pages/welcome");
}, App\Middleware\Auth::class);

Route::get("/auth/login", "AuthController@login");

// Route::get("/user", "UserController@index", App\Middleware\Auth::class);