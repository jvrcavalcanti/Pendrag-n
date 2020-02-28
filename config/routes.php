<?php

use Accolon\Route\Route;

Route::get("/", function() {
    return view("./pages/welcome");
});

Route::get("/auth/login", "AuthController@login");