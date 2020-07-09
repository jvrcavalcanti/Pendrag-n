<?php

define("DB_CONFIG", [
    "driver" => env("DB_DRIVER") ?? "mysql",
    "host" => env("DB_HOST") ?? "localhost",
    "port" => env("DB_PORT") ?? 3306,
    "name" => env("DB_NAME") ?? "pendragon",
    "charset" => env("DB_CHARSET") ?? "utf8",
    "user" => env("DB_USER") ?? "root",
    "password" => env("DB_PASSWORD") ?? "root"
]);