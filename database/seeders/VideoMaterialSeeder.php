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
            // [
            //     'title' => 'Ирригатор за или против',
            //     'img_source' => 'Ирригатор за или против .webp',
            //     'video_source' => 'Ирригатор за или против .mp4',
            //     'description' => null,
            // ],
            // [
            //     'title' => 'Как выбрать зубную щетку',
            //     'img_source' => 'Как выбрать зубную щетку.webp',
            //     'video_source' => 'Как выбрать зубную щетку.mp4',
            //     'description' => null,
            // ],
            // [
            //     'title' => 'Как подобрать зубную пасту',
            //     'img_source' => 'Как подобрать зубную пасту.webp',
            //     'video_source' => 'Как подобрать зубную пасту.mp4',
            //     'description' => null,
            // ],
            // [
            //     'title' => 'Как пользоваться флоссом',
            //     'img_source' => 'Как пользоваться флоссом .webp',
            //     'video_source' => 'Как пользоваться флоссом .mp4',
            //     'description' => null,
            // ],
            // [
            //     'title' => 'Техника чистки зубов СА',
            //     'img_source' => 'Техника чистки зубов СА.webp',
            //     'video_source' => 'Техника чистки зубов СА.mp4',
            //     'description' => null,
            // ],
            // [
            //     'title' => 'Техника чистки зубов',
            //     'img_source' => 'Техника чистки зубов.webp',
            //     'video_source' => 'Техника чистки зубов.mp4',
            //     'description' => null,
            // ],
            // [
            //     'title' => 'Товары',
            //     'img_source' => 'Товары.webp',
            //     'video_source' => 'Товары.mp4',
            //     'description' => null,
            // ],
            // [
            //     'title' => 'Cколько надо зубной пасты',
            //     'img_source' => 'сколько надо зубной пасты.webp',
            //     'video_source' => 'сколько надо зубной пасты.mp4',
            //     'description' => null,
            // ],
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
            [
                'title' => 'Поговорим о витаминах, которые нужны для здоров',
                'img_source' => 'v6.jpg',
                'video_source' => null,
                'description' => null,
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239321&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Здоровье зубов начинается с правильной гигиены полости рта!',
                'img_source' => 'v7.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v7.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239314&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Зубные щетки, которыми наши стоматологи никогда не будут пользоваться',
                'img_source' => 'v8.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v8.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239309&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Хотите сохранить улыбку здоровой?',
                'img_source' => 'v9.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v9.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239302&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'А как вы ухаживаете за зубами?',
                'img_source' => 'v10.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v10.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239300&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Как выбрать ту самую пасту?',
                'img_source' => 'v11.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v11.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239342&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Правильный выбор зубной щетки',
                'img_source' => 'v12.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v12.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239343&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Как правильно чистить зубы',
                'img_source' => 'v13.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v13.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239344&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Тратите много денег на зубную пасту? 😱',
                'img_source' => 'v14.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v14.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239349&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Учимся чистить зубы как профессионалы!',
                'img_source' => 'v15.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v15.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239407&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => '🌟 Делимся вашими впечатлениями!',
                'img_source' => 'v16.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v16.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239408&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Уход за зубами',
                'img_source' => 'v17.jpg',
                'video_source' => null,
                'description' => null,
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239501&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Я буду делать проф. гигиену, потому что не хочу что бы у меня было:',
                'img_source' => 'v18.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v18.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239521&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Бокс для чувствительных десен',
                'img_source' => 'v19.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v19.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239522&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Сделай правильный выбор',
                'img_source' => 'v20.jpg',
                'video_source' => null,
                'description' => null,
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239545&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Новый зуб — новая щетка❓',
                'img_source' => 'v21.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v21.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239594&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Почему важно вовремя делать имплантацию❓',
                'img_source' => 'v22.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v22.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239351&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Вы поставили имплантат. Что дальше❓',
                'img_source' => 'v23.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v23.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239365&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Как подготовиться к имплантации?',
                'img_source' => 'v24.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v24.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239394&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Рекомендации после имплантации',
                'img_source' => 'v25.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v25.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239415&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Успешная имплантация',
                'img_source' => 'v26.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v26.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239420&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Как проверить подлинность имплантата?',
                'img_source' => 'v27.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v27.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239471&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Имплантация зуба: как правильно подготовиться и легко восстановиться!',
                'img_source' => 'v28.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v28.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239572&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => '🤕 Послеоперационный период. Правила комфортного восстановления',
                'img_source' => 'v29.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v29.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239577&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Зубы мудрости удалять или нет?',
                'img_source' => 'v30.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v30.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239353&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Чем сложное удаление зуба отличается от простого?',
                'img_source' => 'v31.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v31.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239403&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Белое после операции — это не всегда гной! Разбираем «фибриновый налет»',
                'img_source' => 'v32.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v32.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239583&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Как отличить фибрин от гноя? 🩹🦷',
                'img_source' => 'v33.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v33.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239590&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Гиперестезия или повышенная чувствительность зубов',
                'img_source' => 'v34.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v34.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239383&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Ирригатор. За или против?',
                'img_source' => 'v36.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v36.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239436&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Минутка юмора 😄',
                'img_source' => 'v37.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v37.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239446&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Как правильно пользоваться флоссом',
                'img_source' => 'v38.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v38.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239468&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Имплантация и отбеливание не для вас, если…',
                'img_source' => 'v39.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v39.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239472&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Галитоз или неприятный запах изо рта',
                'img_source' => 'v40.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v40.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239484&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Что нужно знать о герпесе?',
                'img_source' => 'v41.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v41.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239488&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Что нужно знать о лечение герпеса',
                'img_source' => 'v42.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v42.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239503&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Виниры и реставрации - ОТКАЗАНО',
                'img_source' => 'v43.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v43.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239519&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Зубы и остеопороз!',
                'img_source' => 'v44.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v44.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239525&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Почему зуб болит именно сейчас?',
                'img_source' => 'v45.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v45.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239535&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Однотогенный синусит!',
                'img_source' => 'v46.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v46.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239542&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Все есть яд и все есть лекарство, то и другое определяет доза',
                'img_source' => 'v47.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v47.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239550&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Основа успешной методики лечения',
                'img_source' => 'v48.jpg',
                'video_source' => null,
                'description' => null,
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239559&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => '🤰🏻🦷 Можно ли лечить зубы беременным? Спойлер: НУЖНО',
                'img_source' => 'v49.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v49.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239616&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Антибиотики в стоматологии: давайте обсудим этот вопрос👇🏻',
                'img_source' => 'v50.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v50.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239623&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Не дяоверяй, а проверяй!',
                'img_source' => 'v51.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v51.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239398&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Врачебная тайна или по секрету всему свету…',
                'img_source' => 'v52.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v52.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239426&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Диплом на стол',
                'img_source' => 'v53.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v53.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239455&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Монопрофильные клиники уходят в прошлое',
                'img_source' => 'v54.jpg',
                'video_source' => null,
                'description' => null,
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239477&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Лечи умом, а не …',
                'img_source' => 'v55.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v55.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239511&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'У врача нет специализации?',
                'img_source' => 'v56.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v56.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239529&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Важное про план лечения!',
                'img_source' => 'v57.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v57.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239601&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
            ],
            [
                'title' => 'Хотите зафиксировать стоимость лечения и не переживать о росте цен?',
                'img_source' => 'v58.jpg',
                'video_source' => null,
                'description' => file_get_contents(public_path('old_data/blog/video/v58.html')),
                'video_frame' => '<iframe src="https://vk.ru/clip_ext.php?oid=-228329352&id=456239607&autoplay=1" width="325" height="646" style="background-color: #000" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>'
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
            // $videoSourcePath = $videoDirPath.DIRECTORY_SEPARATOR.$config['video_frame'];

            // if (!is_file($imgSourcePath) || !is_file($videoSourcePath)) {
            //     continue;
            // }

            $imgExt = strtolower(pathinfo($config['img_source'], PATHINFO_EXTENSION));
            // $videoExt = strtolower(pathinfo($config['video_frame'], PATHINFO_EXTENSION));

            $imgPath = "blog/video/{$slug}.{$imgExt}";
            // $videoPath = "blog/video/{$slug}.{$videoExt}";

            Storage::disk('public')->put($imgPath, file_get_contents($imgSourcePath), 'public');
            // Storage::disk('public')->put($videoPath, file_get_contents($videoSourcePath), 'public');

            $items[] = [
                'title' => $title,
                'img' => $imgPath,
                'slug' => $slug,
                'description' => $config['description'] ?? null,
                'video_frame' => $config['video_frame'],
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
