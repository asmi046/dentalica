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
        Schema::create('selects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('order')->default(0)->comment('Порядок вывода');
            $table->string('title')->comment('Заголовок');
            $table->text('description')->comment('Текст');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selects');
    }
};
