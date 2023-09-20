<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_order_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_order')->default(0);
            $table->integer('id_product')->default(0);
            $table->string('photo')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->double('regular_price')->default(0);
            $table->double('sale_price')->default(0);
            $table->integer('quantity')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_order_detail');
    }
}
