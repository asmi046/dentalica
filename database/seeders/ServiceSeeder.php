<?php

namespace Database\Seeders;

use DB;
use League\Csv\Reader;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'title' => "Отбеливание",
                'price' => "20000",
                'time' => "60 минут",
                'good_pacients' => "",
                'resul' => json_encode([
                    ['title' => 'осветление эмали зубов на 7-10 тонов'],
                    ['title' => 'заметный результат за 1,5 часа'],
                    ['title' => 'стойкий эффект белизны зубов  до 3 лет (при соблюдении рекомендации стоматолога и качественном ежедневном  уходе за зубами)'],
                    ['title' => 'возможность индивидуальной настройки оборудования для зубов с повышенной чувствительностью'],
                    ['title' => 'щадящее действие на эмаль'],
                    ['title' => 'синий свет исклюет риски ожогов'],
                    ['title' => 'эффективность при устранении стойкой никотиновой и пищевой пигментации, тетрациклиновых зубов и пятен флюороза'],
                ]),
                'adv' => json_encode([
                    ['title' => 'БЕЗОПАСНО'],
                    ['title' => 'УСТОЙЧИВЫЙ, ВИДИМЫЙ ЭФФЕКТ'],
                    ['title' => 'ДОСТУПНАЯ ЦЕНА'],
                ]),

                'img' => "white.webp",
                "slug" => Str::slug("Отбеливание"),
                'order' => 1,
                'description' => file_get_contents(public_path('old_data/services/white.html')),

            ],
            [
                'title' => "Имплантация",
                'price' => "30000",
                'time' => "60 минут",
                'good_pacients' => "",
                'resul' => json_encode([
                    ['title' => 'возможность восстановить дефект зубного ряда как при отсутствии 1 зуба, так и всех зубов челюсти'],
                    ['title' => 'не нужно препарировать здоровые зубы'],
                    ['title' => 'не нужно изготавливать съемные протезы'],
                    ['title' => 'восстановление функции жевания'],
                    ['title' => 'восстановление красоты улыбки'],
                    ['title' => 'безболезненно ( используем эффективную анестезию)'],
                ]),
                'adv' => json_encode([
                    ['title' => 'ПРОГНОЗИРУЕМЫЙ РЕЗУЛЬТАТ'],
                    ['title' => 'ВИДИМЫЙ ЭФФЕКТ'],
                    ['title' => 'АДЕКВАТНАЯ ЦЕНА'],
                ]) ,

                'title' => "Имплантация",
                'img' => "implant.webp",
                "slug" => Str::slug("Имплантация"),
                'order' => 2,
                'description' => file_get_contents(public_path('old_data/services/implant.html')),

            ],
            [
                'title' => "Плазмолифтинг",
                'price' => "6000",
                'time' => "30 минут",
                'good_pacients' => "",
                'resul' => json_encode([
                    ['title' => 'противовоспалительный эффект'],
                    ['title' => 'устранение кровоточивости десен'],
                    ['title' => 'снижение, а в некоторых случаях устранение патологической подвижности зубов'],
                    ['title' => 'усиление васкуляризации десены, восстановление ее анатомической формы и цвета'],
                    ['title' => 'устранение неприятного запаха изо рта'],
                    ['title' => 'улучшение приживаемости и снижение риска отторжения имплантатов'],
                    ['title' => 'ускорение заживления лунки зуба после удаления'],
                ]),
                'adv' => json_encode([
                    ['title' => 'БЕЗОПАСНО'],
                    ['title' => 'ЭФФЕКТИВНО'],
                    ['title' => 'ДОСТУПНАЯ ЦЕНА'],
                ]) ,

                'title' => "Плазмолифтинг",
                'img' => "lecenie.webp",
                "slug" => Str::slug("Плазмолифтинг"),
                'order' => 3,
                'description' => file_get_contents(public_path('old_data/services/plazma.html')),

            ],
            [
                'title' => "Протезирование",
                'price' => "10000",
                'time' => "60 минут",
                'good_pacients' => "",
                'resul' => json_encode([
                    ['title' => 'нормализация функции жевания и дикции'],
                    ['title' => 'полноценная коррекция улыбки'],
                    ['title' => 'безболезненно (используем эффективную анестезию)'],
                    ['title' => 'коррекция  формы и размера зубов'],

                    ['title' => 'придание зубам  желаемого оттенка'],
                    ['title' => 'восстановление утраченных зубов'],
                    ['title' => 'минимальное и нетравматичное препарирование зубов'],
                    ['title' => 'идеальное прилегают к зубу, закрытие излишних промежутков между зубами'],
                    ['title' => 'тонкие, но прочные конструкции'],
                    ['title' => 'легкая адаптация'],
                ]),
                'adv' => json_encode([
                    ['title' => 'ЭСТЕТИЧНО'],
                    ['title' => 'ЕСТЕСТВЕННО'],
                    ['title' => 'ДОЛГОВЕЧНО'],
                    ['title' => 'ГИПОАЛЛЕРГЕННО'],
                    ['title' => 'БЕЗОПАСНО'],
                    ['title' => 'ПРОГНОЗИРУЕМЫЙ РЕЗУЛЬТАТ'],
                    ['title' => 'ГАРАНТИЯ  БОЛЕЕ 3 ЛЕТ НА ВЫПОЛНЕННЫЕ РАБОТЫ'],
                ]) ,

                'title' => "Протезирование",
                'img' => "protez.webp",
                "slug" => Str::slug("Протезирование"),
                'order' => 4,
                'description' => file_get_contents(public_path('old_data/services/protez.html')),

            ],
            [
                'title' => "Гигиена и лечение заболеваний пародонта",
                'price' => "5000",
                'time' => "60 минут",
                'good_pacients' => "",
                'resul' => json_encode([
                    ['title' => 'профилактика  развитие кариеса, пародонтоза, гингивита и других заболеваний полости рта, является обязательным этапом в комплексном лечении патологии десен'],
                    ['title' => 'уменьшение кровоточивости десен'],
                    ['title' => 'уменьшение или устранение неприятного запаха изо рта'],
                    ['title' => 'зубы становятся светлее после удаления налета'],
                    ['title' => 'уменьшение болезненности и воспаления тканей десны в тч вокруг коронок и протезов, имплантатов без  их  повреждения'],
                    ['title' => 'лечение периимплантита'],
                    ['title' => 'очищение глубоких пародонтальных карманов без хирургического вмешательства'],
                ]),
                'adv' => json_encode([
                    ['title' => 'ВИДИМЫЙ РЕЗУЛЬТАТ'],
                    ['title' => 'БЕЗОПАСНО'],
                    ['title' => 'ПРОФИЛАКТИКА ЗАБОЛЕВАНИЙ ПОЛОСТИ РТА'],
                    ['title' => 'ДОСТУПНАЯ ЦЕНА'],
                ]),

                'title' => "Гигиена и лечение заболеваний пародонта",
                'img' => "gigiena.webp",
                "slug" => Str::slug("Гигиена и лечение заболеваний пародонта"),
                'order' => 5,
                'description' => file_get_contents(public_path('old_data/services/gigiena.html')),

            ],

            [
                'title' => "Хирургия полости рта",
                'price' => "4000",
                'time' => "от 30 минут",
                'good_pacients' => "31000+",
                'resul' => json_encode([
                    ['title' => 'избавление от боли'],
                    ['title' => 'купирование воспалительного процесса'],
                    ['title' => 'устранение неприятного запаха изо рта'],
                ]),
                'adv' => json_encode([
                    ['title' => 'БЕЗБОЛЕЗНЕННО'],
                    ['title' => 'БЕЗОПАСНО'],
                    ['title' => 'ПРОФЕССИОНАЛЬНО'],
                ]) ,

                'title' => "Хирургия полости рта",
                'img' => "hirurgia.webp",
                "slug" => Str::slug("Хирургия полости рта"),
                'order' => 6,
                'description' => file_get_contents(public_path('old_data/services/hirurg.html')),

            ],

            [
                'title' => "Лечение зубов",
                'price' => "4500",
                'time' => "60 минут",
                'good_pacients' => "25000+",
                'resul' => json_encode([
                    ['title' => 'восстановление формы и функции зуба'],
                    ['title' => 'избавление от боли и воспаления'],
                    ['title' => 'полноценная коррекция улыбки'],
                    ['title' => 'уменьшение  или устранение неприятного запаха изо рта'],
                    ['title' => 'возможность подбора идеально подходящего под ваши зубы цвета реставраций'],
                ]),
                'adv' => json_encode([
                    ['title' => 'БЕЗБОЛЕЗНЕННО'],
                    ['title' => 'БЕЗОПАСНО'],
                    ['title' => 'ГИПОАЛЛЕРГЕННО'],
                    ['title' => 'КОНТРОЛИРУЕМЫЙ РЕЗУЛЬТАТ'],
                    ['title' => 'ГАРАНТИЯ НА ВЫПОЛНЕННЫЕ РАБОТЫ'],
                ]) ,

                'title' => "Лечение зубов",
                'img' => "lecenie.webp",
                "slug" => Str::slug("Лечение зубов"),
                'order' => 7,
                'description' => file_get_contents(public_path('old_data/services/lec.html')),

            ],

            [
                'title' => "Диагностика",
                'price' => "500",
                'time' => "20 минут",
                'good_pacients' => "",
                'resul' => json_encode([]),
                'adv' => json_encode([]),

                'title' => "Диагностика",
                'img' => "diagnostika.webp",
                'order' => 8,
                "slug" => Str::slug("Диагностика"),
                'description' => file_get_contents(public_path('old_data/services/diagn.html')),
            ]


        ];

        foreach ($data as $item) {

            DB::table("seo_data")->insert(
                [
                    'url' => 'services/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );

            if ($item['img']) {
                Storage::disk('public')->put("service/".$item['img'], file_get_contents( public_path('old_data/services/'.$item['img'])), 'public');
                $item['img'] = "service/".$item['img'];
            }


            DB::table("services")->insert($item);
        }


    }
}
