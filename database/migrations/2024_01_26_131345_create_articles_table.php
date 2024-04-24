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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id');
            $table->string('authors');
            $table->string('article_title');
            $table->longtext('abstract_uz');
            $table->longtext('abstract_ru');
            $table->longtext('abstract_en');
            $table->string('key_words');
            $table->string('research_field');
            $table->string('published_in');
            $table->string('file_name');
            $table->longText('message')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
