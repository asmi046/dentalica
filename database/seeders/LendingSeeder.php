<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put("lending/implant.webp", file_get_contents( public_path('img/lendings/implant.webp')), 'public');
        Storage::disk('public')->put("lending/lec.webp", file_get_contents( public_path('img/lendings/lec.webp')), 'public');
        Storage::disk('public')->put("lending/white.webp", file_get_contents( public_path('img/lendings/white.webp')), 'public');

        Storage::disk('public')->put("lending/calendar.svg", file_get_contents( public_path('old_data/lending_data/icon/calendar.svg')), 'public');
        Storage::disk('public')->put("lending/hend.svg", file_get_contents( public_path('old_data/lending_data/icon/hend.svg')), 'public');
        Storage::disk('public')->put("lending/planshet.svg", file_get_contents( public_path('old_data/lending_data/icon/planshet.svg')), 'public');
        Storage::disk('public')->put("lending/pricel.svg", file_get_contents( public_path('old_data/lending_data/icon/pricel.svg')), 'public');
        Storage::disk('public')->put("lending/shprits.svg", file_get_contents( public_path('old_data/lending_data/icon/shprits.svg')), 'public');
        Storage::disk('public')->put("lending/time.svg", file_get_contents( public_path('old_data/lending_data/icon/time.svg')), 'public');
        Storage::disk('public')->put("lending/zub_ok.svg", file_get_contents( public_path('old_data/lending_data/icon/zub_ok.svg')), 'public');
        Storage::disk('public')->put("lending/white_safety.svg", file_get_contents( public_path('old_data/lending_data/icon/white_safety.svg')), 'public');
        Storage::disk('public')->put("lending/white_affo_price.svg", file_get_contents( public_path('old_data/lending_data/icon/white_affo_price.svg')), 'public');
        Storage::disk('public')->put("lending/white_long_effect.svg", file_get_contents( public_path('old_data/lending_data/icon/white_long_effect.svg')), 'public');
        Storage::disk('public')->put("lending/white_exp_staff.svg", file_get_contents( public_path('old_data/lending_data/icon/white_exp_staff.svg')), 'public');

        Storage::disk('public')->put("lending/vector_para_pro.svg", file_get_contents( public_path('old_data/lending_data/icon/vector_para_pro.svg')), 'public');
        Storage::disk('public')->put("lending/plasma_therapy_autoplasma.svg", file_get_contents( public_path('old_data/lending_data/icon/plasma_therapy_autoplasma.svg')), 'public');
        Storage::disk('public')->put("lending/medic_exp.svg", file_get_contents( public_path('old_data/lending_data/icon/medic_exp.svg')), 'public');
        Storage::disk('public')->put("lending/complex_hirurg_estetic.svg", file_get_contents( public_path('old_data/lending_data/icon/complex_hirurg_estetic.svg')), 'public');

        Storage::disk('public')->put("lending/impl-expert.webp", file_get_contents( public_path('old_data/lending_data/photo/impl-expert.webp')), 'public');
        Storage::disk('public')->put("lending/modern-image-1.webp", file_get_contents( public_path('old_data/lending_data/photo/modern-image-1.webp')), 'public');
        Storage::disk('public')->put("lending/modern-image-2.webp", file_get_contents( public_path('old_data/lending_data/photo/modern-image-2.webp')), 'public');
        Storage::disk('public')->put("lending/modern-image-3.webp", file_get_contents( public_path('old_data/lending_data/photo/modern-image-3.webp')), 'public');
        Storage::disk('public')->put("lending/modern-image-4.webp", file_get_contents( public_path('old_data/lending_data/photo/modern-image-4.webp')), 'public');

        Storage::disk('public')->put("lending/dentium.png", file_get_contents( public_path('old_data/lending_data/photo/dentium.png')), 'public');
        Storage::disk('public')->put("lending/impro.png", file_get_contents( public_path('old_data/lending_data/photo/impro.png')), 'public');
        Storage::disk('public')->put("lending/osstem.png", file_get_contents( public_path('old_data/lending_data/photo/osstem.png')), 'public');
        Storage::disk('public')->put("lending/straumann.png", file_get_contents( public_path('old_data/lending_data/photo/straumann.png')), 'public');
        Storage::disk('public')->put("lending/lec-procedure.webp", file_get_contents( public_path('old_data/lending_data/photo/lec-procedure.webp')), 'public');

        include_once "lend_data/implantation.php";
        include_once "lend_data/lec.php";
        include_once "lend_data/white.php";

        $banner_implant = "lending/implant.webp";
        $banner_lec = "lending/lec.webp";
        $banner_white = "lending/white.webp";

        $template_implant = "custom-template.services-implantation";
        $template_lec = "custom-template.services-lec";
        $template_white = "custom-template.services-white";

        $data_implant = json_encode($implantation_data);

        $data_lec = json_encode($lec_data);
        $data_white = json_encode($white_data);

        $affected = DB::update(
            'update services set title_lend=?, sub_title_lend=?, banner = ?, template = ?, lending_data = ?  where title = ?',
            [
                'Имплантация зубов в Курске',
                'Восстановите улыбку и жевательную функцию с помощью современных технологий',
                $banner_implant, $template_implant, $data_implant, 'Имплантация']
        );

        $affected = DB::update(
            'update services set title_lend=?, sub_title_lend=?, banner = ?, template = ?, lending_data = ?  where title = ?',
            [
            'Плазмолифтинг, лечение заболеваний десен и пародонта в Курске',
            'Безопасное и эффективное лечение десен и пародонта по доступной цене',
            $banner_lec, $template_lec, $data_lec, 'Плазмолифтинг и лечение заболеваний пародонта']
        );

        $affected = DB::update(
            'update services set title_lend=?, sub_title_lend=?, banner = ?, template = ?, lending_data = ?  where title = ?',
            [
            'Отбеливание зубов в Курске',
            'Безопасное и эффективное отбеливание с использованием немецкой системы Flash',
            $banner_white, $template_white, $data_white, 'Отбеливание']
        );
    }
}
