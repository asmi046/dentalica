<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VideoMaterialSeeder extends Seeder
{
    /**
     * Транслитерация кириллицы в латиницу
     */
    private function transliterate(string $text): string
    {
        $replacement = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
            'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
            'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
            'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
            'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch',
            'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
            'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
            'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D',
            'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I',
            'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N',
            'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
            'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'Ts', 'Ч' => 'Ch',
            'Ш' => 'Sh', 'Щ' => 'Sch', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '',
            'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
        ];

        return strtr($text, $replacement);
    }

    /**
     * Массив для ручного управления данными сидера
     */
    private function itemsConfig(): array
    {
        return [
            [
                'title' => 'Ирригатор за или против',
                'img_source' => 'Ирригатор за или против .webp',
                'video_source' => 'Ирригатор за или против .mp4',
                'description' => null,
            ],
            [
                'title' => 'Как выбрать зубную щетку',
                'img_source' => 'Как выбрать зубную щетку.webp',
                'video_source' => 'Как выбрать зубную щетку.mp4',
                'description' => null,
            ],
            [
                'title' => 'Как подобрать зубную пасту',
                'img_source' => 'Как подобрать зубную пасту.webp',
                'video_source' => 'Как подобрать зубную пасту.mp4',
                'description' => null,
            ],
            [
                'title' => 'Как пользоваться флоссом',
                'img_source' => 'Как пользоваться флоссом .webp',
                'video_source' => 'Как пользоваться флоссом .mp4',
                'description' => null,
            ],
            [
                'title' => 'Техника чистки зубов СА',
                'img_source' => 'Техника чистки зубов СА.webp',
                'video_source' => 'Техника чистки зубов СА.mp4',
                'description' => null,
            ],
            [
                'title' => 'Техника чистки зубов',
                'img_source' => 'Техника чистки зубов.webp',
                'video_source' => 'Техника чистки зубов.mp4',
                'description' => null,
            ],
            [
                'title' => 'Товары',
                'img_source' => 'Товары.webp',
                'video_source' => 'Товары.mp4',
                'description' => null,
            ],
            [
                'title' => 'Cколько надо зубной пасты',
                'img_source' => 'сколько надо зубной пасты.webp',
                'video_source' => 'сколько надо зубной пасты.mp4',
                'description' => null,
            ],
            [
                'title' => 'Почему стерильность в стоматологии — это важно?',
                'img_source' => 'v1.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v1.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239341&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Что происходит с инструментами после вашего приема?',
                'img_source' => 'v2.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v2.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239360&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Одноразовые материалы - минимум рисков!',
                'img_source' => 'v3.webp',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v3.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239378&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Хотите убедиться что все безопасно?',
                'img_source' => 'v4.jpg',
                'video_source' => null,
                'description' => null,
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239443&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Будут ли инструменты после обработки спиртом стерильны?',
                'img_source' => 'v5.jpg',
                'video_source' => null,
                'description' => null,
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239480&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
        ];
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('video_materials')->truncate();

        $now = now();
        $videoDirPath = public_path('old_data/blog/video');
        $items = [];

        foreach ($this->itemsConfig() as $config) {
            $title = trim($config['title']);
            $slug = Str::slug($this->transliterate($title));

            $imgSourcePath = $videoDirPath.DIRECTORY_SEPARATOR.$config['img_source'];
            $videoSourcePath = $videoDirPath.DIRECTORY_SEPARATOR.$config['video_source'];

            if (!is_file($imgSourcePath) || !is_file($videoSourcePath)) {
                continue;
            }

            $imgExt = strtolower(pathinfo($config['img_source'], PATHINFO_EXTENSION));
            $videoExt = strtolower(pathinfo($config['video_source'], PATHINFO_EXTENSION));

            $imgPath = "blog/video/{$slug}.{$imgExt}";
            $videoPath = "blog/video/{$slug}.{$videoExt}";

            Storage::disk('public')->put($imgPath, file_get_contents($imgSourcePath), 'public');
            Storage::disk('public')->put($videoPath, file_get_contents($videoSourcePath), 'public');

            $items[] = [
                'title' => $title,
                'img' => $imgPath,
                'slug' => $slug,
                'description' => $config['description'] ?? null,
                'video_frame' => $videoPath,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        if (!empty($items)) {
            DB::table('video_materials')->upsert(
                $items,
                ['slug'],
                ['title', 'img', 'description', 'video_frame', 'updated_at']
            );
        }
    }
}
