<?php

use Accolon\Migration\Migration;
use Accolon\Migration\Schema;
use Accolon\Migration\Blueprint;

class UserTable implements Migration
{
    private string $table = "users";
    
    public function up(): bool
    {
        return Schema::create($this->table, function (Blueprint $table) {
            $table->increments("id");
        });
    }

    public function down(): bool
    {
        return Schema::dropIfExists($this->table);
    }
}