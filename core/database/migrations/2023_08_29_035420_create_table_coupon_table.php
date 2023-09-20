<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_coupon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma', 30)->nullable();
            $table->integer('stt')->default(0);
            $table->integer('loai')->default(0);
            $table->integer('tinhtrang')->default(0);
            $table->integer('chietkhau')->default(0);
            $table->integer('ngaybatdau')->default(0);
            $table->integer('ngayketthuc')->default(0);
            $table->integer('solan');
            $table->double('toithieu');
            $table->double('toida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_coupon');
    }
}
