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

        Storage::disk('public')->put("lending_icon/calendar.svg", file_get_contents( public_path('old_data/lending_data/icon/calendar.svg')), 'public');
        Storage::disk('public')->put("lending_icon/hend.svg", file_get_contents( public_path('old_data/lending_data/icon/hend.svg')), 'public');
        Storage::disk('public')->put("lending_icon/planshet.svg", file_get_contents( public_path('old_data/lending_data/icon/planshet.svg')), 'public');
        Storage::disk('public')->put("lending_icon/pricel.svg", file_get_contents( public_path('old_data/lending_data/icon/pricel.svg')), 'public');
        Storage::disk('public')->put("lending_icon/shprits.svg", file_get_contents( public_path('old_data/lending_data/icon/shprits.svg')), 'public');
        Storage::disk('public')->put("lending_icon/time.svg", file_get_contents( public_path('old_data/lending_data/icon/time.svg')), 'public');
        Storage::disk('public')->put("lending_icon/zub_ok.svg", file_get_contents( public_path('old_data/lending_data/icon/zub_ok.svg')), 'public');

        Storage::disk('public')->put("lending_photo/impl-expert.webp", file_get_contents( public_path('old_data/lending_data/photo/impl-expert.webp')), 'public');
        Storage::disk('public')->put("lending_photo/modern-image-1.webp", file_get_contents( public_path('old_data/lending_data/photo/modern-image-1.webp')), 'public');
        Storage::disk('public')->put("lending_photo/modern-image-2.webp", file_get_contents( public_path('old_data/lending_data/photo/modern-image-2.webp')), 'public');
        Storage::disk('public')->put("lending_photo/modern-image-3.webp", file_get_contents( public_path('old_data/lending_data/photo/modern-image-3.webp')), 'public');
        Storage::disk('public')->put("lending_photo/modern-image-4.webp", file_get_contents( public_path('old_data/lending_data/photo/modern-image-4.webp')), 'public');

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
            'Лечение заболеваний десен и пародонта в Курске',
            'Безопасное и эффективное лечение десен и пародонта по доступной цене',
            $banner_lec, $template_lec, $data_lec, 'Лечение зубов']
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
