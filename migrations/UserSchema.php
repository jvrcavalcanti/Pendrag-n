<?php

use Accolon\Izanami\Migration\Migration;
use Accolon\Izanami\Migration\Schema;
use Accolon\Izanami\Migration\Blueprint;

class UserSchema implements Migration
{
    private string $table = "users";

    public function up()
    {
        return Schema::create($this->table, function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email")->unique();
            $table->string("password");
            $table->timestamps();
        });
    }

    public function down()
    {
        return Schema::dropIfExists($this->table);
    }
}
