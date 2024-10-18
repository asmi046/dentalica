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
        Schema::create('before_afters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('before_photo', 500)->comment('Фото до');
            $table->string('after_photo', 500)->comment('Фото после');
            $table->string('razdel')->nullable()->comment('Раздел');
            $table->string('title')->comment('Название');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('before_afters');
    }
};
