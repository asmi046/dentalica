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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->comment('Имя вложения');
            $table->string('title')->nullable()->comment('Заголовок вложения');
            $table->string('description')->nullable()->comment('Описание вложения');
            $table->string('lnk')->comment('Ссылка на файл');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploads');
    }
};
