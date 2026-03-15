<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('video_materials')->truncate();

        Storage::disk('public')->put('blog/video_1.webp', file_get_contents(public_path('old_data/blog/video_1.webp')), 'public');
        Storage::disk('public')->put('blog/video_2.webp', file_get_contents(public_path('old_data/blog/video_2.webp')), 'public');
        Storage::disk('public')->put('blog/video_3.webp', file_get_contents(public_path('old_data/blog/video_3.webp')), 'public');
        Storage::disk('public')->put('blog/video_4.webp', file_get_contents(public_path('old_data/blog/video_4.webp')), 'public');

        $now = now();
        $blogPath = public_path('old_data/blog');

        $readDescription = static function (string $fileName) use ($blogPath): ?string {
            $file = $blogPath.DIRECTORY_SEPARATOR.$fileName;

            return is_file($file) ? file_get_contents($file) : null;
        };

        $items = [
            [
                'title' => 'Весна — время перемен 🌺',
                'img' => 'blog/video_1.webp',
                'slug' => Str::slug('vesna-vremya-peremen'),
                'description' => $readDescription('vesna-vremya-peremen.html'),
                'video_frame' => '<iframe src="https://vk.com/clip_ext.php?oid=-228329352&id=456239613&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => '🛑 Почему фраза «Я только уколола губы» важнее, чем кажется?',
                'img' => 'blog/video_2.webp',
                'slug' => Str::slug('pochemu-vazhno-skazat-pro-botulotoksin'),
                'description' => $readDescription('pochemu-vazhno-skazat-pro-botulotoksin.html'),
                'video_frame' => '<iframe src="https://vk.com/clip_ext.php?oid=-228329352&id=456239610&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Хотите зафиксировать стоимость лечения и не переживать о росте цен?',
                'img' => 'blog/video_3.webp',
                'slug' => Str::slug('zafiksirovannaya-cena-lecheniya'),
                'description' => $readDescription('zafiksirovannaya-cena-lecheniya.html'),
                'video_frame' => '<iframe src="https://vk.com/clip_ext.php?oid=-228329352&id=456239607&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Интраоральная камера 🎦',
                'img' => 'blog/video_4.webp',
                'slug' => Str::slug('intraoralnaya-kamera'),
                'description' => $readDescription('intraoralnaya-kamera.html'),
                'video_frame' => '<iframe src="https://vk.com/clip_ext.php?oid=-228329352&id=456239603&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('video_materials')->upsert(
            $items,
            ['slug'],
            ['title', 'img', 'description', 'video_frame', 'updated_at']
        );
    }
}
