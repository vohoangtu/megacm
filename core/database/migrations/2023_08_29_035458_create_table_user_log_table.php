<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->default(0);
            $table->string('ip', 16)->default('0.0.0.0');
            $table->integer('timelog')->default(0);
            $table->mediumText('user_agent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user_log');
    }
}
