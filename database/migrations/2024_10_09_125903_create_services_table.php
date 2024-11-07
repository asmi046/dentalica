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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Название разделе услуг');
            $table->string('price')->comment('Цена');
            $table->string('time')->comment('Время выполнени');
            $table->string('good_pacients')->nullable()->comment('Время выполнени');

            $table->json('resul')->nullable()->comment('Ожидаемые результаты');
            $table->json('adv')->nullable()->comment('Преимущества');

            $table->string('slug')->comment('Слаг');
            $table->string('img', 500)->nullable()->comment('Изображение');
            $table->integer('order')->default(0)->comment('Порядок');
            $table->mediumText('description')->nullable()->comment('Описание раздела');

            $table->string('seo_title')->nullable()->comment('SEO заголовок');
            $table->text('seo_description')->nullable()->comment('SEO описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
