<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("sales/dr_15.webp", file_get_contents(public_path('old_data/sales/dr_15.webp')), 'public');
        Storage::disk('public')->put("sales/flash_white.webp", file_get_contents(public_path('old_data/sales/flash_white.webp')), 'public');
        $data = [
            [
                'order' => 1,
                'title' => 'Скидка 15% на профессиональную гигиену полости рта',
                'subtitle' => 'Дарим скидку 15% на профессиональную гигиену полости рта. Скидка действует в течении 1 месяца от Вашего дня рождения.',
                'img' => "sales/dr_15.webp",
                'description' => 'Дарим скидку 15% на профессиональную гигиену полости рта. Скидка действует в течении 1 месяца от Вашего дня рождения.',
            ],
            [
                'order' => 0,
                'title' => 'Cкидка 20% на услугу отбеливпния зубов немецкой системой Flash',
                'subtitle' => 'Cкидка 20% на услугу отбеливпния зубов немецкой системой Flash. Акция действительна до конца 2024 года.',
                'img' => "sales/flash_white.webp",
                'description' => file_get_contents(public_path('old_data//sales//flash.html')),
            ],
        ];

        DB::table("sales")->insert($data);
    }
}
