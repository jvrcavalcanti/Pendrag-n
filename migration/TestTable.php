<?php

namespace Migration;

use Accolon\Migration\Migration;
use Accolon\Migration\Schema;
use Accolon\Migration\Blueprint;

class TestTable implements Migration
{
    private string $table = "test";
    
    public function up(): bool
    {
        return Schema::create($this->table, function (Blueprint $table) {
            $table->increments("id");
            $table->string("title");
        });
    }

    public function down(): bool
    {
        return Schema::dropIfExists($this->table);
    }
}