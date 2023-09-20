<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent')->default(0);
            $table->string('photo')->nullable();
            $table->string('hash', 20)->nullable();
            $table->string('nameen')->nullable();
            $table->string('namevi')->nullable();
            $table->integer('id_color')->default(0);
            $table->string('file_attach')->nullable();
            $table->mediumText('link_video')->nullable();
            $table->integer('numb')->default(0);
            $table->string('type', 30)->nullable();
            $table->string('com')->nullable();
            $table->string('kind', 30)->nullable();
            $table->string('val', 30)->nullable();
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
        Schema::dropIfExists('table_gallery');
    }
}
