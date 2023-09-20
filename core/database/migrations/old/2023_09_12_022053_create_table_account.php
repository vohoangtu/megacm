<?php

use App\Models\Account;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Account::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(Account::FIRSTNAME);
            $table->string(Account::LASTNAME);
            $table->string(Account::USERNAME);
            $table->string(Account::EMAIL);
            $table->timestamp(Account::EMAIL_VERIFIED_AT)->nullable();
            $table->string(Account::PASSWORD);

            $table->string(Account::JOB_POSITION)->nullable();
            $table->string(Account::JOB_AT_COMPANY)->nullable();
            $table->integer(Account::COMPANY_ID)->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Account::TABLE);
    }
};
