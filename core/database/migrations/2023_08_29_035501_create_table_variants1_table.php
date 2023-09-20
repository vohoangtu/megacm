<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVariants1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_variants1', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('id_parent');
            $table->integer('size');
            $table->double('price_new');
            $table->double('price_old');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_variants1');
    }
}
