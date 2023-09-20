<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('lang_define')->nullable();
            $table->mediumText('langvi')->nullable();
            $table->mediumText('langen')->nullable();
            $table->unsignedInteger('numb')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_lang');
    }
}
