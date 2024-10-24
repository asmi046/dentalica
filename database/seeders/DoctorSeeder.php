<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("doctors/kornev.webp", file_get_contents(public_path('img/tmp_img/kornev.webp')), 'public');
        Storage::disk('public')->put("doctors/kornev-j.webp", file_get_contents(public_path('img/tmp_img/kornev-j.webp')), 'public');
        Storage::disk('public')->put("doctors/alimova.webp", file_get_contents(public_path('img/tmp_img/alimova.webp')), 'public');
        Storage::disk('public')->put("doctors/lisova.webp", file_get_contents(public_path('img/tmp_img/lisova.webp')), 'public');
        Storage::disk('public')->put("doctors/maslihova.webp", file_get_contents(public_path('img/tmp_img/maslihova.webp')), 'public');

        $data = [
            [
                'name' => 'Корнев Сергей Александрович',
                'slug' => Str::slug('Корнев Сергей Александрович'),
                'photo' => "doctors/kornev.webp",
                'order' => 1,
                'dolgnost' => "Стоматолог хирург / Ортопед / Терапевт",
                'description' => file_get_contents(public_path('old_data/doctors/kornev.html')),
                'short_description' => file_get_contents(public_path('old_data/doctors/kornev-short.html'))
            ],

            [
                'name' => 'Алымова Виктория Викторовна',
                'slug' => Str::slug('Алымова Виктория Викторовна'),
                'photo' => "doctors/alimova.webp",
                'order' => 2,
                'dolgnost' => "Стоматолог терапевт",
                'description' => file_get_contents(public_path('old_data/doctors/alimova.html')),
                'short_description' => file_get_contents(public_path('old_data/doctors/alimova-short.html'))
            ],

            [
                'name' => 'Маслихова Римма Ивановна',
                'slug' => Str::slug('Маслихова Римма Ивановна'),
                'photo' => "doctors/maslihova.webp",
                'order' => 3,
                'dolgnost' => "Cтоматолог терапевт / Ортопед / Хирург",
                'description' => file_get_contents(public_path('old_data/doctors/maslihova.html')),
                'short_description' => file_get_contents(public_path('old_data/doctors/maslihova-short.html'))
            ],

            [
                'name' => 'Лисова Татьяна Олеговна',
                'slug' => Str::slug('Лисова Татьяна Олеговна'),
                'photo' => "doctors/lisova.webp",
                'order' => 4,
                'dolgnost' => "Стоматолог терапевт",
                'description' => file_get_contents(public_path('old_data/doctors/lisova.html')),
                'short_description' => file_get_contents(public_path('old_data/doctors/lisova-short.html'))
            ],

            // [
            //     'name' => 'Фирсов Евгений Игоревич',
            //     'slug' => Str::slug('Фирсов Евгений Игоревич'),
            //     'photo' => "doctors/doctor_1.webp",
            //     'order' => 5,
            //     'dolgnost' => "Врач-рентгенолог",
            //     'description' => file_get_contents(public_path('old_data/doctors/firsov.html')),
            //     'short_description' => file_get_contents(public_path('old_data/doctors/firsov-short.html'))
            // ],

            // [
            //     'name' => 'Корнева Евгения Леонидовна',
            //     'slug' => Str::slug('Корнева Евгения Леонидовна'),
            //     'photo' => "doctors/doctor_2.webp",
            //     'order' => 6,
            //     'dolgnost' => "Главный врач",
            //     'description' => file_get_contents(public_path('old_data/doctors/korneva.html')),
            //     'short_description' => file_get_contents(public_path('old_data/doctors/korneva-short.html'))
            // ],

            [
                'name' => 'Корнев Никита Сергеевич',
                'slug' => Str::slug('Корнев Никита Сергеевич'),
                'photo' => "doctors/kornev-j.webp",
                'order' => 5,
                'dolgnost' => "Гигиенист",
                'description' => file_get_contents(public_path('old_data/doctors/kornev_n.html')),
                'short_description' => file_get_contents(public_path('old_data/doctors/kornev_n-short.html'))
            ],
        ];



        foreach ($data as $item) {

            DB::table("seo_data")->insert(
                [
                    'url' => 'doctors/'.$item['slug'],
                    'seo_title' => $item['name'],
                    'seo_description' => $item['name'],
                ]
            );
            DB::table("doctors")->insert($item);
        }
    }
}
