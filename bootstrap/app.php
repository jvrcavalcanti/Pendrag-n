<?php

require_once "../vendor/autoload.php";

$app = new \Pendragon\Framework\App;

$app->registerProviders(PROVIDERS);

return $app;
