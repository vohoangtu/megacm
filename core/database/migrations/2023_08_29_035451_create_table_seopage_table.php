<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSeopageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_seopage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->nullable();
            $table->mediumText('options')->nullable();
            $table->string('type', 30)->nullable();
            $table->mediumText('titlevi')->nullable();
            $table->mediumText('keywordsvi')->nullable();
            $table->mediumText('descriptionvi')->nullable();
            $table->mediumText('titleen')->nullable();
            $table->mediumText('keywordsen')->nullable();
            $table->mediumText('descriptionen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_seopage');
    }
}
