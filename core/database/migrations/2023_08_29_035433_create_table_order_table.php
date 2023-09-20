<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->default(0);
            $table->string('code', 25)->nullable();
            $table->string('fullname')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('address')->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('order_payment')->default(0);
            $table->double('temp_price')->default(0);
            $table->double('total_price')->default(0);
            $table->integer('city')->default(0);
            $table->integer('district')->default(0);
            $table->integer('ward')->default(0);
            $table->double('ship_price')->default(0);
            $table->mediumText('requirements')->nullable();
            $table->mediumText('notes')->nullable();
            $table->integer('date_created')->default(0);
            $table->integer('order_status')->default(0);
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
        Schema::dropIfExists('table_order');
    }
}
