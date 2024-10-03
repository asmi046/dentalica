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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('order')->default(0)->comment('Порядок вывода');
            $table->string('title')->comment('Заголовок акции');
            $table->string('subtitle')->comment('Подзаголовок акции');
            $table->string('img', 700)->comment('Изображение акции');
            $table->text('description')->comment('Описание акции');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
