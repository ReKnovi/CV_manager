<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('references')->nullable();
            $table->string('technology');
            $table->enum('level', ['Junior', 'Mid', 'Senior']);
            $table->integer('salary_expectation')->unsigned(); // Removed auto_increment
            $table->integer('experience')->nullable();
            $table->string('application_status')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
