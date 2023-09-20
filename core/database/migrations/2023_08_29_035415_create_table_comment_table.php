<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_comment', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('id_parent')->default(0);
            $table->integer('id_variant')->default(0);
            $table->integer('star')->default(0);
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('fullname')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('poster')->nullable();
            $table->string('status')->nullable();
            $table->string('type', 30)->nullable();
            $table->integer('date_posted')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_comment');
    }
}
