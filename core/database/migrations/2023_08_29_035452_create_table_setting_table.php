<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_setting', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->mediumText('options')->nullable();
            $table->mediumText('mastertool')->nullable();
            $table->mediumText('headjs')->nullable();
            $table->mediumText('bodyjs')->nullable();
            $table->string('namevi')->nullable();
            $table->string('nameen')->nullable();
            $table->mediumText('analytics')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_setting');
    }
}
