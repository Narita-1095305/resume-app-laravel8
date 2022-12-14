<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('result')->nullable();
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->integer('spouse_num')->nullable();
            $table->integer('commuting_hour')->nullable();
            $table->integer('commuting_minutes')->nullable();
            $table->integer('is_spouse')->nullable();
            $table->integer('is_spouse_dependent')->nullable();
            $table->text('self_pr')->nullable();
            $table->text('other')->nullable();
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
        Schema::dropIfExists('resumes');
    }
}
