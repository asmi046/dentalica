<?php

namespace Database\Seeders;

use League\Csv\Reader;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => "Услуги по стоматологии хирургической",
                'description' => "Услуги по стоматологии хирургической",
                'list_file' => 'herurgia.csv'
            ],
            [
                'title' => "Услуги по стоматологии терапевтической",
                'description' => "Услуги по стоматологии терапевтической",
                'list_file' => 'teropia.csv'
            ],
            [
                'title' => "Общепрофильные стоматологические услуги",
                'description' => "Общепрофильные стоматологические услуги",
                'list_file' => 'obs.csv'
            ],

            [
                'title' => "Услуги по стоматологии ортопедической",
                'description' => "Услуги по стоматологии ортопедической",
                'list_file' => 'orto_vinir.csv'
            ],

            // [
            //     'title' => "Услуги по стоматологии ортопедической (Протезирование имплантатов коронками)",
            //     'description' => "Услуги по стоматологии ортопедической (Протезирование имплантатов коронками)",
            //     'list_file' => 'orto_protez_cor.csv'
            // ],

            // [
            //     'title' => "Услуги по стоматологии ортопедической (Мостовидные протезы)",
            //     'description' => "Услуги по стоматологии ортопедической (Мостовидные протезы)",
            //     'list_file' => 'orto_most.csv'
            // ],

            // [
            //     'title' => "Услуги по стоматологии ортопедической (Мостовидные протезы на имплантатах)",
            //     'description' => "Услуги по стоматологии ортопедической (Мостовидные протезы на имплантатах)",
            //     'list_file' => 'orto_most_implant.csv'
            // ],

            // [
            //     'title' => "Вспомогательные манипуляции",
            //     'description' => "Вспомогательные манипуляции",
            //     'list_file' => 'vspom.csv'
            // ],
        ];

        foreach ($data as $item) {
            $csv = Reader::createFromPath(public_path('old_data/prices/'.$item['list_file']), 'r');
            $csv->setHeaderOffset(0);
            $csv->setDelimiter(';');
            $records = $csv->getRecords();


            $price_list = [];
            foreach ($records as $sub_item) {
                $element['code'] = $sub_item['Код'];
                $element['name'] = $sub_item['Наименование'];
                $element['price'] = $sub_item['Цена'];

                if (isset($sub_item['Таблица']))
                    $element['table'] = $sub_item['Таблица'];

                $price_list[] = $element;
            }

            $insert_data = [
                'title' => $item['title'],
                'description' => $item['description'],
                'price_list' => json_encode($price_list)
            ];

            DB::table("prices")->insert($insert_data);
        }
    }
}
