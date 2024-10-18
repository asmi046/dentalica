<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeforeAfterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("before_after/bad1.webp", file_get_contents(public_path('img/tmp_img/b_a/bad1.webp')), 'public');
        Storage::disk('public')->put("before_after/bad2.webp", file_get_contents(public_path('img/tmp_img/b_a/bad2.webp')), 'public');
        Storage::disk('public')->put("before_after/bad3.webp", file_get_contents(public_path('img/tmp_img/b_a/bad3.webp')), 'public');
        Storage::disk('public')->put("before_after/good1.webp", file_get_contents(public_path('img/tmp_img/b_a/good1.webp')), 'public');
        Storage::disk('public')->put("before_after/good2.webp", file_get_contents(public_path('img/tmp_img/b_a/good2.webp')), 'public');
        Storage::disk('public')->put("before_after/good3.webp", file_get_contents(public_path('img/tmp_img/b_a/good3.webp')), 'public');
        Storage::disk('public')->put("before_after/good4.webp", file_get_contents(public_path('img/tmp_img/b_a/good4.webp')), 'public');

        $data = [
            [
                'before_photo' => "before_after/bad1.webp",
                'after_photo' => "before_after/good1.webp",
                'razdel' => "Терапия",
                'title' => "Лечение кариеса",
            ],

            [
                'before_photo' => "before_after/bad2.webp",
                'after_photo' => "before_after/good3.webp",
                'razdel' => "Терапия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad3.webp",
                'after_photo' => "before_after/good3.webp",
                'razdel' => "Терапия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad2.webp",
                'after_photo' => "before_after/good1.webp",
                'razdel' => "Хирургия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad1.webp",
                'after_photo' => "before_after/good3.webp",
                'razdel' => "Терапия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad1.webp",
                'after_photo' => "before_after/good4.webp",
                'razdel' => "Ортопедия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad2.webp",
                'after_photo' => "before_after/good3.webp",
                'razdel' => "Ортопедия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad2.webp",
                'after_photo' => "before_after/good1.webp",
                'razdel' => "Ортопедия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad1.webp",
                'after_photo' => "before_after/good3.webp",
                'razdel' => "Терапия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad3.webp",
                'after_photo' => "before_after/good1.webp",
                'razdel' => "Терапия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad1.webp",
                'after_photo' => "before_after/good2.webp",
                'razdel' => "Ортопедия",
                'title' => "Пломба",
            ],

            [
                'before_photo' => "before_after/bad2.webp",
                'after_photo' => "before_after/good4.webp",
                'razdel' => "Хирургия",
                'title' => "Пломба",
            ],
        ];



        DB::table("before_afters")->insert($data);
    }
}
