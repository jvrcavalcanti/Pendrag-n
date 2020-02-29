<?php

namespace App\Console;

require_once "./vendor/autoload.php";

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Migration
{
    private static $migrations = [
        \Migration\TestTable::class
    ];

    public static function migrate()
    {
        foreach(self::$migrations as $migration) {
            $table = new $migration;
            $table->up();
            echo "Up: {$migration}\n";
        }
    }

    public static function rollback()
    {
        foreach(self::$migrations as $migration) {
            $table = new $migration;
            $table->down();
            echo "Down: {$migration}\n";
        }
    }

    public static function refresh()
    {
        foreach(self::$migrations as $migration) {
            $table = new $migration;
            $table->down();
            echo "Down: {$migration}\n";
            $table->up();
            echo "Up: {$migration}\n";
        }
    }
}