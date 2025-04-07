<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("information/stir.webp", file_get_contents( public_path('old_data/information/stir.webp')), 'public');
        Storage::disk('public')->put("information/mikro.webp", file_get_contents( public_path('old_data/information/mikro.webp')), 'public');
        Storage::disk('public')->put("information/diagnokam.webp", file_get_contents( public_path('old_data/information/diagnokam.webp')), 'public');
        Storage::disk('public')->put("information/flash.webp", file_get_contents( public_path('old_data/information/flash.webp')), 'public');
        Storage::disk('public')->put("information/fp.webp", file_get_contents( public_path('old_data/information/fp.webp')), 'public');
        Storage::disk('public')->put("information/vektor.webp", file_get_contents( public_path('old_data/information/vektor.webp')), 'public');

        DB::table("information")->insert([
            [
                'img' => "information/stir.webp",
                'title' => '',
                'short_description' => 'Дезинфицирующие машины и стерилизаторы',
                'description' => file_get_contents(public_path('old_data/information/steril.html'))
            ],
            [
                'img' => "information/mikro.webp",
                'title' => '',
                'short_description' => 'Оптика и операционный микроскоп',
                'description' => 'Операционный микроскоп немецкой компании Leica и индивидуальные бинокулярные лупы премиум класса Exam vision, позволяют многократно увеличить видимость в операционном поле , что дает возможность специалисту видеть мельчайшие детали, минимизирует инвазивность вмешательства и повышает точность работ.'
            ],
            [
                'img' => "information/diagnokam.webp",
                'title' => '',
                'short_description' => 'DIAGNOcam',
                'description' => '<li><strong>DIAGNOcam</strong> - современный, безопасный аппарат для диагностики поражений коронковой части зуба от немецкой компании <strong>KaVo</strong> методом цифровой лазерной трансиллюминации.'
            ],
            [
                'img' => "information/fp.webp",
                'title' => '',
                'short_description' => 'Фотопротокол и внутриротовая камера',
                'description' => 'Фотофиксация этапов лечения позволяет наглядно увидеть исходную ситуация в полости рта и полученный после лечения результат, проконтролировать изменения на этапах лечения, передать особенности формы зубов для индивидуального дизайна улыбки. Внутриротовая камера с многократным увеличением в режиме реального времени выводящая изображение на монитор, возможность фотофиксации снимков с внутриротовой камеры поможет детально и объективно увидеть состояние зубов и слизистой в полости рта как врачу, так и пациенту'
            ],
            [
                'img' => "information/flash.webp",
                'title' => '',
                'short_description' => 'Отбеливающая система FLESH',
                'description' => file_get_contents(public_path('old_data/services/white.html'))
            ],
            [
                'img' => "information/vektor.webp",
                'title' => '',
                'short_description' => 'Оборудование для профессиональной гигиены и лечения парадонта',
                'description' => 'Клиника оснащена немецкими аппаратами для профессиональной гигиены ультразвуковыми скалерами, аппаратом AIR FLOW, пародонтальным комплексом DURR DENTAL VECTOR PARO PRO, оборудованием центрифугирования крови в оригинальных пробирках для проведения плазмотерапии/'
            ],

        ]);
    }
}
