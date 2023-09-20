<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableColorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_color', function (Blueprint $table) {
            $table->increments('id');
            $table->string('photo')->nullable();
            $table->string('namevi')->nullable();
            $table->string('nameen')->nullable();
            $table->string('color', 15)->nullable();
            $table->boolean('type_show')->default(0);
            $table->string('type', 30)->nullable();
            $table->integer('numb')->default(0);
            $table->string('status')->nullable();
            $table->integer('date_created')->default(0);
            $table->integer('date_updated')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_color');
    }
}
