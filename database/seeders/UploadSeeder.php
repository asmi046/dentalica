<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("files/shares/anketa_udovletvorennosti.docx", file_get_contents(public_path('old_data/uploads/anketa_udovletvorennosti.docx')), 'public');
        Storage::disk('public')->put("files/shares/inn.jpg", file_get_contents(public_path('old_data/uploads/inn.jpg')), 'public');
        Storage::disk('public')->put("files/shares/ogrn.jpg", file_get_contents(public_path('old_data/uploads/ogrn.jpg')), 'public');
        Storage::disk('public')->put("files/shares/L041-01147-46_00288722.pdf", file_get_contents(public_path('old_data/uploads/L041-01147-46_00288722.pdf')), 'public');
        Storage::disk('public')->put("files/shares/decloration_SOUT.jpg", file_get_contents(public_path('old_data/uploads/decloration_SOUT.jpg')), 'public');
        Storage::disk('public')->put("files/shares/pd.docx", file_get_contents(public_path('old_data/uploads/pd.docx')), 'public');
        Storage::disk('public')->put("files/shares/prava_gr.docx", file_get_contents(public_path('old_data/uploads/prava_gr.docx')), 'public');
        Storage::disk('public')->put("files/shares/dogovor_pmu.doc", file_get_contents(public_path('old_data/uploads/dogovor_pmu.doc')), 'public');
        Storage::disk('public')->put("files/shares/egrul.pdf", file_get_contents(public_path('old_data/uploads/egrul.pdf')), 'public');
        Storage::disk('public')->put("files/shares/price.docx", file_get_contents(public_path('old_data/uploads/price.docx')), 'public');
    }
}
