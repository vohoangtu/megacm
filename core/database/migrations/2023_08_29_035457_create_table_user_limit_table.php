<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserLimitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user_limit', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('login_ip', 50);
            $table->integer('login_attempts');
            $table->integer('attempt_time');
            $table->integer('locked_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user_limit');
    }
}
