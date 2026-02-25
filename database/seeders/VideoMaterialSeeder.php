<?php

namespace Database\Seeders;

use App\Models\VideoMaterial;
use Illuminate\Database\Seeder;

class VideoMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VideoMaterial::create([
            'title' => 'Профилактика кариеса - видеоурок',
            'slug' => 'profilaktika-kariesa-videourok',
            'short_description' => 'Смотрите видеоурок по профилактике кариеса',
            'author_name' => 'Иван Петров',
            'author_position' => 'Главный стоматолог',
        ]);

        VideoMaterial::create([
            'title' => 'Процедура профессиональной чистки',
            'slug' => 'procedura-professionalnoj-chistki',
            'short_description' => 'Видео о проведении профессиональной чистки зубов',
            'author_name' => 'Мария Сидорова',
            'author_position' => 'Детский стоматолог',
        ]);
    }
}
