<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_seo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent')->default(0);
            $table->string('com', 30)->nullable();
            $table->string('act', 30)->nullable();
            $table->string('type', 30)->nullable();
            $table->mediumText('titlevi')->nullable();
            $table->mediumText('keywordsvi')->nullable();
            $table->mediumText('descriptionvi')->nullable();
            $table->mediumText('titleen')->nullable();
            $table->mediumText('keywordsen')->nullable();
            $table->mediumText('descriptionen')->nullable();
            $table->text('schemavi')->nullable();
            $table->text('schemaen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_seo');
    }
}
