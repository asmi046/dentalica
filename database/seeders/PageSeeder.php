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
            ]);

    }
}
