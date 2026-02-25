<?php

namespace Database\Seeders;

use App\Models\TextMaterial;
use Illuminate\Database\Seeder;

class TextMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TextMaterial::create([
            'title' => 'Как правильно ухаживать за зубами',
            'slug' => 'kak-pravilno-uxodit-za-zubami',
            'short_description' => 'Советы стоматолога по уходу за ротовой полостью',
            'text' => 'Полная статья о правильном уходе за зубами и профилактике кариеса.',
            'author_name' => 'Иван Петров',
            'author_photo' => null,
            'author_position' => 'Главный стоматолог',
            'seo_title' => 'Уход за зубами - рекомендации стоматолога',
            'seo_description' => 'Узнайте как правильно ухаживать за зубами и сохранить здоровье полости рта',
        ]);

        TextMaterial::create([
            'title' => 'Причины и лечение чувствительности зубов',
            'slug' => 'prichiny-i-lechenie-chuvstvitelnosti',
            'short_description' => 'Информация о причинах и методах лечения чувствительности зубов',
            'text' => 'Подробная статья о чувствительности зубов и способах её лечения.',
            'author_name' => 'Мария Сидорова',
            'author_photo' => null,
            'author_position' => 'Детский стоматолог',
            'seo_title' => 'Чувствительность зубов - причины и лечение',
            'seo_description' => 'Узнайте почему болят зубы и как избавиться от чувствительности',
        ]);
    }
}
