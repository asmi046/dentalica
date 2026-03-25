<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TextMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('text_materials')->truncate();

        Storage::disk('public')->put('blog_specialist/korenev.webp', file_get_contents(public_path('old_data/blog/text/korenev.webp')), 'public');
        Storage::disk('public')->put('blog_specialist/korenev_ml.webp', file_get_contents(public_path('old_data/blog/text/korenev_ml.webp')), 'public');
        Storage::disk('public')->put('blog_specialist/alimova.webp', file_get_contents(public_path('old_data/blog/text/alimova.webp')), 'public');
        Storage::disk('public')->put('blog_specialist/lisova.webp', file_get_contents(public_path('old_data/blog/text/lisova.webp')), 'public');

        Storage::disk('public')->put('blog/text/s1.webp', file_get_contents(public_path('old_data/blog/text/s1.webp')), 'public');
        Storage::disk('public')->put('blog/text/s2.webp', file_get_contents(public_path('old_data/blog/text/s2.webp')), 'public');


        $now = now();

        $items = [
            [
                'title' => 'На что обращать внимание при выборе врача и клиники',
                'slug' => Str::slug('na-chto-obrashchat-vnimanie-pri-vybore-vracha-i-kliniki'),
                'img' => 'blog/text/s1.webp',
                'hash_tags' => '#стоматология #лечение #зубы #врач #клиника',
                'text' => file_get_contents(public_path('old_data/blog/text/s1.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s1_short.html')),
                'author_name' => 'Корнев Сергей Александрович',
                'author_photo' => 'blog_specialist/korenev.webp',
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Какую специализацию должен иметь врач, чтобы оказывать услуги по имплантации и эндодонтии',
                'slug' => Str::slug('kakuyu-specializatsiyu-dolzhen-imet-vrach-chtoby-okazyvat-uslugi-po-implantatsii-i-endodontii'),
                'img' => 'blog/text/s2.webp',
                'hash_tags' => '#стоматология #лечение #медицинская помощь #аккредитация #специализация #врач',
                'text' => file_get_contents(public_path('old_data/blog/text/s2.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s2_short.html')),
                'author_name' => 'Корнев Сергей Александрович',
                'author_photo' => 'blog_specialist/korenev.webp',
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],

        ];

        DB::table('text_materials')->upsert(
            $items,
            ['slug'],
            [
                'title',
                'img',
                'hash_tags',
                'short_description',
                'text',
                'author_name',
                'author_photo',
                'author_position',
                'updated_at',
            ]
        );

    }
}
