<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_list')->default(0);
            $table->integer('id_item')->default(0);
            $table->integer('id_cat')->default(0);
            $table->integer('id_sub')->default(0);
            $table->string('photo')->nullable();
            $table->string('photo2')->nullable();
            $table->mediumText('options')->nullable();
            $table->string('slugvi')->nullable();
            $table->string('slugen')->nullable();
            $table->string('old_slug')->nullable();
            $table->mediumText('contenten')->nullable();
            $table->mediumText('contentvi')->nullable();
            $table->mediumText('descen')->nullable();
            $table->mediumText('descvi')->nullable();
            $table->string('nameen')->nullable();
            $table->string('namevi')->nullable();
            $table->integer('numb')->default(0);
            $table->string('status')->nullable();
            $table->string('type', 30)->nullable();
            $table->integer('date_created')->default(0);
            $table->integer('date_updated')->default(0);
            $table->integer('view')->default(0);
            $table->string('link_video')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_news');
    }
}
