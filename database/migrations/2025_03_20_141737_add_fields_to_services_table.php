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
        Schema::table('services', function (Blueprint $table) {
            $table->string('title_lend')->nullable()->comment('Заголовок лендинга');
            $table->string('sub_title_lend')->nullable()->comment('Подзаголовок лендинга');
            $table->string('banner', 800)->nullable()->comment('Баннер лендинга');
            $table->string('template')->nullable()->comment('Шаблон лендинга');
            $table->json('lending_data')->nullable()->comment('Данные для лендинга');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('title_lend');
            $table->dropColumn('sub_title_lend');
            $table->dropColumn('banner');
            $table->dropColumn('template');
            $table->dropColumn('lending_data');
        });
    }
};
