<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('file_attach')->nullable();
            $table->string('subject')->nullable();
            $table->mediumText('content')->nullable();
            $table->mediumText('notes')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('status')->nullable();
            $table->integer('date_created')->default(0);
            $table->integer('date_updated')->default(0);
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
        Schema::dropIfExists('table_contact');
    }
}
