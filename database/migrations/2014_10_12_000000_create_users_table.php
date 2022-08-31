<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('family_name');
            $table->string('first_name');
            $table->string('family_furigana');
            $table->string('first_furigana');
            $table->integer('birth_year');
            $table->integer('birth_month');
            $table->integer('birth_day');
            $table->integer('gender');
            $table->string('email')->unique();
            $table->string('telephone_number');
            $table->string('zip_code');
            $table->string('address');
            $table->string('address_furigana');
            $table->string('building')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
