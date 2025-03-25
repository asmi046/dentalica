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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img', 800)->comment('Изображение');
            $table->integer('order')->default(0)->comment('Порядок');
            $table->string('title')->nullable()->comment('Заголовок');
            $table->text('short_description')->comment('Короткое описание');
            $table->text('description')->comment('Описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
