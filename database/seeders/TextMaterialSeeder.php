<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TextMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('text_materials')->truncate();

    }
}
