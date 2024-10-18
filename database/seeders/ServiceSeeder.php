<?php

namespace Database\Seeders;

use DB;
use League\Csv\Reader;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
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
                'img' => "",
                "slug" => Str::slug("Отбеливание"),
                'order' => 1,
                'description' => file_get_contents(public_path('old_data/services/white.html')),
                'seo_title' => "Отбеливание",
                'seo_description' => "Отбеливание",
            ],
            [
                'title' => "Имплантация",
                'img' => "",
                "slug" => Str::slug("Имплантация"),
                'order' => 2,
                'description' => file_get_contents(public_path('old_data/services/implant.html')),
                'seo_title' => "Имплантация",
                'seo_description' => "Имплантация",
            ],
            [
                'title' => "Плазмолифтинг",
                'img' => "",
                "slug" => Str::slug("Плазмолифтинг"),
                'order' => 3,
                'description' => file_get_contents(public_path('old_data/services/plazma.html')),
                'seo_title' => "Плазмолифтинг",
                'seo_description' => "Плазмолифтинг",
            ],
            [
                'title' => "Протезирование",
                'img' => "",
                "slug" => Str::slug("Протезирование"),
                'order' => 4,
                'description' => file_get_contents(public_path('old_data/services/protez.html')),
                'seo_title' => "Протезирование",
                'seo_description' => "Протезирование",
            ],
            [
                'title' => "Гигиена и лечение заболеваний пародонта",
                'img' => "",
                "slug" => Str::slug("Гигиена и лечение заболеваний пародонта"),
                'order' => 5,
                'description' => file_get_contents(public_path('old_data/services/gigiena.html')),
                'seo_title' => "Гигиена и лечение заболеваний пародонта",
                'seo_description' => "Гигиена и лечение заболеваний пародонта",
            ],
            [
                'title' => "Хирургия полости рта",
                'img' => "",
                "slug" => Str::slug("Хирургия полости рта"),
                'order' => 6,
                'description' => file_get_contents(public_path('old_data/services/hirurg.html')),
                'seo_title' => "Хирургия полости рта",
                'seo_description' => "Хирургия полости рта",
            ],
            [
                'title' => "Лечение зубов",
                'img' => "",
                "slug" => Str::slug("Лечение зубов"),
                'order' => 7,
                'description' => file_get_contents(public_path('old_data/services/lec.html')),
                'seo_title' => "Лечение зубов",
                'seo_description' => "Лечение зубов",
            ],
            [
                'title' => "Диагностика",
                'img' => "",
                'order' => 8,
                "slug" => Str::slug("Диагностика"),
                'description' => file_get_contents(public_path('old_data/services/diagn.html')),
                'seo_title' => "Диагностика",
                'seo_description' => "Диагностика",
            ],
        ];

        foreach ($data as $item) {

            DB::table("seo_data")->insert(
                [
                    'url' => 'doctors/'.$item['slug'],
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
            DB::table("services")->insert($item);
        }


    }
}
