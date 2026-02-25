<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(
            [
                TextMaterialSeeder::class,
                VideoMaterialSeeder::class,
            ]
        );
    }
}
