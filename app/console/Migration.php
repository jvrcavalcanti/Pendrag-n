<?php

namespace App\Console;

require_once "./vendor/autoload.php";

class Migration
{
    private static $migrations = MIGRATIONS;

    public static function addMigration($class)
    {
        self::$migrations[] = $class;
    }

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