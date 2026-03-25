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
        Schema::create('text_materials', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Заголовок');
            $table->string('slug')->unique()->comment('Слаг');
            $table->string('img')->nullable()->comment('Изображение');
            $table->string('hash_tags')->nullable()->comment('Хештеги');
            $table->text('short_description')->nullable()->comment('Короткое описание');
            $table->longText('text')->comment('Текст');
            $table->string('author_name')->nullable()->comment('Имя автора');
            $table->string('author_photo')->nullable()->comment('Фото автора');
            $table->string('author_position')->nullable()->comment('Должность автора');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text_materials');
    }
};
