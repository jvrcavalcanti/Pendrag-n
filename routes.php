<?php

use Accolon\Route\Route;

Route::get("/", function() {
    return view("welcome");
});

Route::get("/auth/login", "AuthController@login");