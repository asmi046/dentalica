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
        Schema::create('video_materials', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->string('slug')->unique()->comment('Слаг');
            $table->text('short_description')->nullable()->comment('Короткое описание');
            $table->string('author_name')->nullable()->comment('Имя автора');
            $table->string('author_position')->nullable()->comment('Должность автора');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_materials');
    }
};
