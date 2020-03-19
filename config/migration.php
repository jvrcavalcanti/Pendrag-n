<?php

$json = json_decode(file_get_contents("./config/migrations.json"));

define("MIGRATIONS", $json);