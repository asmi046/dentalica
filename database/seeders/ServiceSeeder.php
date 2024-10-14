<?php

namespace Database\Seeders;

use DB;
use League\Csv\Reader;

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
                'order' => 1,
                'description' => file_get_contents(public_path('old_data/services/white.html')),
                'seo_title' => "Отбеливание",
                'seo_description' => "Отбеливание",
            ],
            [
                'title' => "Имплантация",
                'img' => "",
                'order' => 2,
                'description' => file_get_contents(public_path('old_data/services/implant.html')),
                'seo_title' => "Имплантация",
                'seo_description' => "Имплантация",
            ],
            [
                'title' => "Плазмолифтинг",
                'img' => "",
                'order' => 3,
                'description' => file_get_contents(public_path('old_data/services/plazma.html')),
                'seo_title' => "Плазмолифтинг",
                'seo_description' => "Плазмолифтинг",
            ],
            [
                'title' => "Протезирование",
                'img' => "",
                'order' => 4,
                'description' => file_get_contents(public_path('old_data/services/protez.html')),
                'seo_title' => "Протезирование",
                'seo_description' => "Протезирование",
            ],
            [
                'title' => "Гигиена и лечение заболеваний пародонта",
                'img' => "",
                'order' => 5,
                'description' => file_get_contents(public_path('old_data/services/gigiena.html')),
                'seo_title' => "Гигиена и лечение заболеваний пародонта",
                'seo_description' => "Гигиена и лечение заболеваний пародонта",
            ],
            [
                'title' => "Хирургия полости рта",
                'img' => "",
                'order' => 6,
                'description' => file_get_contents(public_path('old_data/services/hirurg.html')),
                'seo_title' => "Хирургия полости рта",
                'seo_description' => "Хирургия полости рта",
            ],
            [
                'title' => "Лечение зубов",
                'img' => "",
                'order' => 7,
                'description' => file_get_contents(public_path('old_data/services/lec.html')),
                'seo_title' => "Лечение зубов",
                'seo_description' => "Лечение зубов",
            ],
            [
                'title' => "Диагностика",
                'img' => "",
                'order' => 7,
                'description' => file_get_contents(public_path('old_data/services/diagn.html')),
                'seo_title' => "Диагностика",
                'seo_description' => "Диагностика",
            ],
        ];

        DB::table("services")->insert($data);
    }
}
