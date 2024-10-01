<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => "Телефон",
                'key' => "phone",
                'value' => "+7 (910) 277-78-78",
            ],

            [
                'name' => "Телефон (дополнительный)",
                'key' => "phone2",
                'value' => "+7 (910) 277-78-78",
            ],

            [
                'name' => "E-mail",
                'key' => "email",
                'value' => "dentalica-kursk@mail.ru",
            ],

            [
                'name' => "Адрес",
                'key' => "adress",
                'value' => "г. Курск, пр. В.Клыкова, 60, оф. 12",
            ],

            [
                'name' => "Координаты",
                'key' => "geo",
                'value' => "51.71947107227563,36.13571149999994",
            ],

            [
                'name' => "Ссылка на VK",
                'key' => "vk",
                'value' => "#",
            ],

            [
                'name' => "Ссылка на Telegram",
                'key' => "tg",
                'value' => "#",
            ],

            [
                'name' => "Ссылка на WhatsApp",
                'key' => "ws",
                'value' => "#",
            ],

            [
                'name' => "Ссылка на Одноклассники",
                'key' => "ok",
                'value' => "#",
            ],

        ];

        DB::table("contacts")->insert($data);
    }
}
