<?php

namespace App\Console;

require_once "./vendor/autoload.php";

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Make
{
    public static function migration(Event $event)
    {
        $template = file_get_contents("app/console/templates/migration.template.php");
        $args = $event->getArguments();
        $f = fopen("./migration/" . $args[0] . ".php", "w");
        $template = str_replace("className", $args[0], $template);
        $template = str_replace("%name%", strtolower(explode("Table", $args[0])[0]), $template);
        fwrite($f, $template);
    }
}