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
            $table->string('banner', 800)->nullable()->comment('Баннер страницы');
            $table->string('template')->nullable()->comment('Шаблон страницы');
            $table->json('lending_data')->nullable()->comment('Данные для шаблона');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('banner');
            $table->dropColumn('template');
            $table->dropColumn('lending_data');
        });
    }
};
