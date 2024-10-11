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
        Storage::disk('public')->put("doctors/doctor_1.webp", file_get_contents(public_path('img/tmp_img/doctor_1.webp')), 'public');
        Storage::disk('public')->put("doctors/doctor_2.webp", file_get_contents(public_path('img/tmp_img/doctor_2.webp')), 'public');
        Storage::disk('public')->put("doctors/doctor_3.webp", file_get_contents(public_path('img/tmp_img/doctor_3.webp')), 'public');
        Storage::disk('public')->put("doctors/doctor_4.webp", file_get_contents(public_path('img/tmp_img/doctor_4.webp')), 'public');

        $data = [
            [
                'name' => 'Корнев Сергей Александрович',
                'slug' => Str::slug('Корнев Сергей Александрович'),
                'photo' => "doctors/doctor_2.webp",
                'order' => 1,
                'dolgnost' => "Стоматолог хирург / Ортопед / Терапевт",
                'description' => file_get_contents(public_path('old_data/doctors/kornev.html')),
                'short_description' => file_get_contents(public_path('old_data/doctors/kornev-short.html'))
            ],

            [
                'name' => 'Алымова Виктория Викторовна',
                'slug' => Str::slug('Алымова Виктория Викторовна'),
                'photo' => "doctors/doctor_3.webp",
                'order' => 2,
                'dolgnost' => "Стоматолог терапевт",
                'description' => file_get_contents(public_path('old_data/doctors/alimova.html')),
                'short_description' => file_get_contents(public_path('old_data/doctors/alimova-short.html'))
            ],

            [
                'name' => 'Маслихова Римма Ивановна',
                'slug' => Str::slug('Маслихова Римма Ивановна'),
                'photo' => "doctors/doctor_1.webp",
                'order' => 3,
                'dolgnost' => "Cтоматолог терапевт / Ортопед / Хирург",
                'description' => file_get_contents(public_path('old_data/doctors/maslihova.html')),
                'short_description' => file_get_contents(public_path('old_data/doctors/maslihova-short.html'))
            ],

            [
                'name' => 'Лисова Татьяна Олеговна',
                'slug' => Str::slug('Лисова Татьяна Олеговна'),
                'photo' => "doctors/doctor_4.webp",
                'order' => 4,
                'dolgnost' => "Стоматолог терапевт",
                'description' => file_get_contents(public_path('old_data/doctors/lisova.html')),
                'short_description' => file_get_contents(public_path('old_data/doctors/lisova-short.html'))
            ],

            [
                'name' => 'Фирсов Евгений Игоревич',
                'slug' => Str::slug('Фирсов Евгений Игоревич'),
                'photo' => "doctors/doctor_1.webp",
                'order' => 5,
                'dolgnost' => "Врач-рентгенолог",
                'description' => "",
                'short_description' => ""
            ],

            [
                'name' => 'Корнева Евгения Леонидовна',
                'slug' => Str::slug('Корнева Евгения Леонидовна'),
                'photo' => "doctors/doctor_2.webp",
                'order' => 6,
                'dolgnost' => "Главный врач",
                'description' => "",
                'short_description' => ""
            ],
        ];

        DB::table("doctors")->insert($data);
    }
}
