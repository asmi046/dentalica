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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->comment('Имя доктора');
            $table->string('slug')->unicue()->comment('Ссылка');
            $table->string('photo', 500)->comment('Фото доктора');
            $table->integer('order')->default(0)->comment('Порядок вывода');
            $table->string('dolgnost')->nullable()->default('Стоматолог')->comment('Должность');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('short_description')->nullable()->comment('Короткое описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
