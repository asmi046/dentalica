<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("pages/main_bnr.webp", file_get_contents(public_path('img/main-photo.jpg')), 'public');

        DB::table("pages")->insert(
            [
                 [
                     'title' => 'Политика конфиденциальности',
                     'slug' => Str::slug("Политика конфиденциальности"),
                     'img' => "pages/main_bnr.webp",
                     'description' => file_get_contents(public_path('old_data//policy.html')),
                     'seo_title' => 'Политика конфиденциальности',
                     'seo_description' => 'Политика конфиденциальности',
                 ],

                 [
                     'title' => 'Информация об организации',
                     'slug' => Str::slug("Информация об организации"),
                     'img' => "pages/main_bnr.webp",
                     'description' => file_get_contents(public_path('old_data//dop_information//about_org.html')),
                     'seo_title' => 'Информация об организации',
                     'seo_description' => 'Информация об организации',
                 ],

                 [
                     'title' => 'Информация о профессиональном образовании и квалификации медицинских работников ООО «Денталика»',
                     'slug' => Str::slug("Информация о профессиональном образовании и квалификации медицинских работников ООО «Денталика»"),
                     'img' => "pages/main_bnr.webp",
                     'description' => file_get_contents(public_path('old_data//dop_information//doktor_obr.html')),
                     'seo_title' => 'Информация о профессиональном образовании и квалификации медицинских работников ООО «Денталика»',
                     'seo_description' => 'Информация о профессиональном образовании и квалификации медицинских работников ООО «Денталика»',
                 ],

                 [
                     'title' => 'Информация для потребителя (заказчика, пациента)',
                     'slug' => Str::slug("Информация для потребителя (заказчика, пациента)"),
                     'img' => "pages/main_bnr.webp",
                     'description' => file_get_contents(public_path('old_data//dop_information//for_pacient.html')),
                     'seo_title' => 'Информация для потребителя (заказчика, пациента)',
                     'seo_description' => 'Информация для потребителя (заказчика, пациента)',
                 ],

                 [
                     'title' => 'Правила предоставления платных медицинских услуг. <br>Правила внутреннего распорядка для потребителей услуг',
                     'slug' => Str::slug("Правила предоставления платных медицинских услуг. Правила внутреннего распорядка для потребителей услуг"),
                     'img' => "pages/main_bnr.webp",
                     'description' => file_get_contents(public_path('old_data//dop_information//prava_gr.html')),
                     'seo_title' => 'Правила предоставления платных медицинских услуг. Правила внутреннего распорядка для потребителей услуг',
                     'seo_description' => 'Правила предоставления платных медицинских услуг. Правила внутреннего распорядка для потребителей услуг',
                 ],
                 [
                     'title' => 'Вакансии',
                     'slug' => Str::slug("Вакансии"),
                     'img' => "pages/main_bnr.webp",
                     'description' => "<p>В настоящий момент в организации нет свободных Вакансий</p>",
                     'seo_title' => 'Вакансии',
                     'seo_description' => 'Вакансии',
                 ],
            ]);

    }
}
