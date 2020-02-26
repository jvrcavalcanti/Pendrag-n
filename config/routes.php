<?php

use Accolon\Route\Route;

Route::get("/", function() {
    view("./pages/welcome");
});

// Route::get("/user", "UserController@index", App\Middleware\Auth::class);