<?php

date_default_timezone_set('America/Sao_Paulo');

define("APP_ROOT", dirname(__DIR__) . "/");

define("PROVIDERS", [
    \App\Providers\AppProvider::class,
    \App\Providers\AuthProvider::class
]);
