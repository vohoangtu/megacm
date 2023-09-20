<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_list')->default(0);
            $table->integer('id_item')->default(0);
            $table->integer('id_cat')->default(0);
            $table->integer('id_sub')->default(0);
            $table->integer('id_brand')->default(0);
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
            $table->string('code', 30)->nullable();
            $table->double('regular_price')->default(0);
            $table->double('discount')->default(0);
            $table->double('sale_price')->default(0);
            $table->integer('numb')->default(0);
            $table->string('status')->nullable();
            $table->string('type', 30)->nullable();
            $table->integer('date_created')->default(0);
            $table->integer('date_updated')->default(0);
            $table->integer('view')->default(0);
            $table->text('size')->nullable();
            $table->text('color')->nullable();
            $table->text('xuatxu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_product');
    }
}
