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
                    'lnk' => "#",
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

                [
                    'menu' => "Главное меню",
                    'lnk' => "#",
                    'order' => 1,
                    'title' => "Прейскурант",
                ],

                [
                    'menu' => "Главное меню",
                    'lnk' => "#",
                    'order' => 1,
                    'title' => "Отзывы",
                ],

                [
                    'menu' => "Главное меню",
                    'lnk' => "#",
                    'order' => 1,
                    'title' => "Контакты",
                ]
            ]);

        DB::table("menus")->insert(
            [
                [
                    'menu' => "Дополнительная информация",
                    'lnk' => "#",
                    'order' => 1,
                    'title' => "Сведения о медицинской организации",
                ],

                [
                    'menu' => "Дополнительная информация",
                    'lnk' => "#",
                    'order' => 1,
                    'title' => "Информация для пациенто",
                ],

                [
                    'menu' => "Дополнительная информация",
                    'lnk' => "#",
                    'order' => 1,
                    'title' => "Информация для специалистов",
                ],

                [
                    'menu' => "Дополнительная информация",
                    'lnk' => "#",
                    'order' => 1,
                    'title' => "Дополнительная информация",
                ],

            ]);


    }
}
