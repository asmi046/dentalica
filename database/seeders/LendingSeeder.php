<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class LendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banner_implant = "ddd.jpg";
        $banner_lec = "ddd.jpg";
        $banner_white = "ddd.jpg";

        $template_implant = "custom-template.services-implantation";
        $template_lec = "custom-template.services-lec";
        $template_white = "custom-template.services-white";

        $data_implant = json_encode([]);
        $data_lec = json_encode([]);
        $data_white = json_encode([]);

        $affected = DB::update(
            'update services set banner = ?, template = ?, lending_data = ?  where title = ?',
            [$banner_implant, $template_implant, $data_implant, 'Имплантация']
        );

        $affected = DB::update(
            'update services set banner = ?, template = ?, lending_data = ?  where title = ?',
            [$banner_lec, $template_lec, $data_lec, 'Лечение зубов']
        );

        $affected = DB::update(
            'update services set banner = ?, template = ?, lending_data = ?  where title = ?',
            [$banner_white, $template_white, $data_white, 'Отбеливание']
        );
    }
}
