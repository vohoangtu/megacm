<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_permission')->default(0);
            $table->string('username', 225)->nullable();
            $table->string('password', 225)->nullable();
            $table->string('confirm_code')->nullable();
            $table->string('avatar')->nullable();
            $table->string('fullname', 225)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('address', 225)->nullable();
            $table->boolean('gender')->default(0);
            $table->string('login_session')->nullable();
            $table->string('user_token')->nullable();
            $table->string('lastlogin')->nullable();
            $table->string('status')->nullable();
            $table->boolean('role')->default(1);
            $table->string('secret_key')->nullable();
            $table->integer('birthday')->default(0);
            $table->integer('numb')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user');
    }
}
