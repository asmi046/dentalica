<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("menus")->insert(
            [
                [
                    'menu' => "Главное меню",
                    'lnk' => "/",
                    'order' => 1,
                    'title' => "Главная страница",
                ],
                [
                    'menu' => "Главное меню",
                    'lnk' => "/services",
                    'order' => 1,
                    'title' => "Услуги",
                ],

                [
                    'menu' => "Главное меню",
                    'lnk' => "/sales_all",
                    'order' => 1,
                    'title' => "Акции и скидки",
                ],

                [
                    'menu' => "Главное меню",
                    'lnk' => "/doctors",
                    'order' => 1,
                    'title' => "Специалисты",
                ],

                // [
                //     'menu' => "Главное меню",
                //     'lnk' => "/before_after",
                //     'order' => 1,
                //     'title' => "Примеры работ",
                // ],

                [
                    'menu' => "Главное меню",
                    'lnk' => "/prices",
                    'order' => 1,
                    'title' => "Прейскурант",
                ],

                [
                    'menu' => "Главное меню",
                    'lnk' => "/contacts",
                    'order' => 1,
                    'title' => "Контакты",
                ]
            ]);

        DB::table("menus")->insert(
            [
                [
                    'menu' => "Дополнительная информация",
                    'lnk' => "/page/informaciia-ob-organizacii",
                    'order' => 1,
                    'title' => "Информация об организации",
                ],

                [
                    'menu' => "Дополнительная информация",
                    'lnk' => "/page/informaciia-o-professionalnom-obrazovanii-i-kvalifikacii-medicinskix-rabotnikov-ooo-dentalika",
                    'order' => 1,
                    'title' => "Информация о профессиональном образовании и квалификации медицинских работников",
                ],

                [
                    'menu' => "Дополнительная информация",
                    'lnk' => "/page/informaciia-dlia-potrebitelia-zakazcika-pacienta",
                    'order' => 1,
                    'title' => "Информация для потребителя",
                ],

                [
                    'menu' => "Дополнительная информация",
                    'lnk' => "/page/pravila-predostavleniia-platnyx-medicinskix-uslug-pravila-vnutrennego-rasporiadka-dlia-potrebitelei-uslug",
                    'order' => 1,
                    'title' => "Правила предоставления платных медицинских услуг",
                ],
                [
                    'menu' => "Дополнительная информация",
                    'lnk' => "/page/vakansii",
                    'order' => 1,
                    'title' => "Вакансии клиники",
                ],

            ]);


    }
}
