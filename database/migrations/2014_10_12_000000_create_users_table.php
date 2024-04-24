<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('full_name');
            $table->string('img')->nullable();

            $table->string('passport_sn')->unique();
            $table->string('passport_file_path')->nullable();
            $table->string('diplom')->nullable();
            $table->string('diplom_file_path')->nullable();
            $table->bigInteger('direction_id')->nullable();
            $table->bigInteger('role')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
