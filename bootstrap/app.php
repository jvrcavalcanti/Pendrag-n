<?php

require_once "../vendor/autoload.php";

$app = new \Pendragon\Framework\App;

container()->singletons(Accolon\Container\Container::class, new Accolon\Container\Container);

$app->registerProviders(PROVIDERS);

return $app;
