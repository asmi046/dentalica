<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TextMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('text_materials')->truncate();

        Storage::disk('public')->put('blog_specialist/korenev.webp', file_get_contents(public_path('old_data/blog/text/korenev.webp')), 'public');
        Storage::disk('public')->put('blog_specialist/korenev_ml.webp', file_get_contents(public_path('old_data/blog/text/korenev_ml.webp')), 'public');
        Storage::disk('public')->put('blog_specialist/alimova.webp', file_get_contents(public_path('old_data/blog/text/alimova.webp')), 'public');
        Storage::disk('public')->put('blog_specialist/lisova.webp', file_get_contents(public_path('old_data/blog/text/lisova.webp')), 'public');

        Storage::disk('public')->put('blog/text/s1.webp', file_get_contents(public_path('old_data/blog/text/s1.webp')), 'public');
        Storage::disk('public')->put('blog/text/s2.webp', file_get_contents(public_path('old_data/blog/text/s2.webp')), 'public');
        Storage::disk('public')->put('blog/text/s3.jpg', file_get_contents(public_path('old_data/blog/text/s3.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s4.jpg', file_get_contents(public_path('old_data/blog/text/s4.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s5.jpg', file_get_contents(public_path('old_data/blog/text/s5.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s6.jpg', file_get_contents(public_path('old_data/blog/text/s6.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s7.jpg', file_get_contents(public_path('old_data/blog/text/s7.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s8.jpg', file_get_contents(public_path('old_data/blog/text/s8.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s9.jpg', file_get_contents(public_path('old_data/blog/text/s9.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s10.jpg', file_get_contents(public_path('old_data/blog/text/s10.JPG')), 'public');
        Storage::disk('public')->put('blog/text/s11.jpg', file_get_contents(public_path('old_data/blog/text/s11.JPG')), 'public');
        // Storage::disk('public')->put('blog/text/s12.jpg', file_get_contents(public_path('old_data/blog/text/s12.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s13.jpg', file_get_contents(public_path('old_data/blog/text/s13.JPG')), 'public');
        Storage::disk('public')->put('blog/text/s14.jpg', file_get_contents(public_path('old_data/blog/text/s14.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s15.jpg', file_get_contents(public_path('old_data/blog/text/s15.JPG')), 'public');
        Storage::disk('public')->put('blog/text/s16.jpg', file_get_contents(public_path('old_data/blog/text/s16.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s17.jpg', file_get_contents(public_path('old_data/blog/text/s17.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s18.jpg', file_get_contents(public_path('old_data/blog/text/s18.JPG')), 'public');
        Storage::disk('public')->put('blog/text/s19.jpg', file_get_contents(public_path('old_data/blog/text/s19.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s20.jpg', file_get_contents(public_path('old_data/blog/text/s20.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s21.jpg', file_get_contents(public_path('old_data/blog/text/s21.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s22.jpg', file_get_contents(public_path('old_data/blog/text/s22.jpg')), 'public');
        Storage::disk('public')->put('blog/text/s23.jpg', file_get_contents(public_path('old_data/blog/text/s23.jpg')), 'public');



        $now = now();

        $items = [
            [
                'title' => 'На что обращать внимание при выборе врача и клиники',
                'slug' => Str::slug('na-chto-obrashchat-vnimanie-pri-vybore-vracha-i-kliniki'),
                'img' => 'blog/text/s1.webp',
                'hash_tags' => '#стоматология #лечение #зубы #врач #клиника',
                'text' => file_get_contents(public_path('old_data/blog/text/s1.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s1_short.html')),
                'author_name' => 'Корнева Евгения Леонидовна',
                'author_photo' => null,
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Какую специализацию должен иметь врач, чтобы оказывать услуги по имплантации и эндодонтии',
                'slug' => Str::slug('kakuyu-specializatsiyu-dolzhen-imet-vrach-chtoby-okazyvat-uslugi-po-implantatsii-i-endodontii'),
                'img' => 'blog/text/s2.webp',
                'hash_tags' => '#стоматология #лечение #медицинская помощь #аккредитация #специализация #врач',
                'text' => file_get_contents(public_path('old_data/blog/text/s2.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s2_short.html')),
               'author_name' => 'Корнева Евгения Леонидовна',
                'author_photo' => null,
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Дорогостоящее лечение в стоматологии',
                'slug' => Str::slug('Дорогостоящее лечение в стоматологии'),
                'img' => 'blog/text/s3.jpg',
                'hash_tags' => '#стоматология #лечение #медицинская помощь #дорогостоящее лечение',
                'text' => file_get_contents(public_path('old_data/blog/text/s3.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s3_short.html')),
                'author_name' => 'Корнева Евгения Леонидовна',
                'author_photo' => null,
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Есть ли юридическая ответственность у пациента при оказании ему медицинской помощи',
                'slug' => Str::slug('Есть ли юридическая ответственность у пациента при оказании ему медицинской помощи'),
                'img' => 'blog/text/s4.jpg',
                'hash_tags' => '#стоматология #лечение #медицинская помощь',
                'text' => file_get_contents(public_path('old_data/blog/text/s4.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s4_short.html')),
                'author_name' => 'Корнева Евгения Леонидовна',
                'author_photo' => null,
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Положительный результат лечения не возможно гарантировать, если у пациента нет желания трудиться над собой',
                'slug' => Str::slug('Положительный результат лечения  не возможно гарантировать, если у пациента нет желания трудиться над собой'),
                'img' => 'blog/text/s5.jpg',
                'hash_tags' => '#стоматология #лечение #медицинская помощь',
                'text' => file_get_contents(public_path('old_data/blog/text/s5.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s5_short.html')),
                'author_name' => 'Корнева Евгения Леонидовна',
                'author_photo' => null,
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Какие документы, оборудование или лекарственные препараты организация должна предъявить по требованию пациента',
                'slug' => Str::slug('Какие документы, оборудование или лекарственные препараты организация должна предъявить по требованию пациента'),
                'img' => 'blog/text/s6.jpg',
                'hash_tags' => '#стоматология #лечение #медицинская помощь',
                'text' => file_get_contents(public_path('old_data/blog/text/s6.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s6_short.html')),
                'author_name' => 'Корнева Евгения Леонидовна',
                'author_photo' => null,
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Как проверить лицензию стоматологии',
                'slug' => Str::slug('Как проверить лицензию стоматологии'),
                'img' => 'blog/text/s7.jpg',
                'hash_tags' => '#стоматология #лечение #медицина',
                'text' => file_get_contents(public_path('old_data/blog/text/s7.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s7_short.html')),
                'author_name' => 'Корнева Евгения Леонидовна',
                'author_photo' => null,
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Может ли родственник пациента получить информацию о состоянии здоровья и ходе лечения',
                'slug' => Str::slug('Может ли родственник пациента получить информацию о состоянии здоровья и ходе лечения'),
                'img' => 'blog/text/s8.jpg',
                'hash_tags' => '# врачебная тайна #коммерческая тайна #доверенность #стоматология #медицина',
                'text' => file_get_contents(public_path('old_data/blog/text/s8.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s8_short.html')),
                'author_name' => 'Корнева Евгения Леонидовна',
                'author_photo' => null,
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Зубочелюстная система и тело. Есть ли взаимосвязь?',
                'slug' => Str::slug('Зубочелюстная система и тело. Есть ли взаимосвязь?'),
                'img' => 'blog/text/s9.jpg',
                'hash_tags' => '#зубы #позвоночник # зубочелюстная система #компенсации #миофасциальная #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s9.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s9_short.html')),
                'author_name' => 'Алымова Виктория Викторовна',
                'author_photo' => 'blog_specialist/alimova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Связь отсутствия зубов с патологией височно-нижнечелюстного сустава',
                'slug' => Str::slug('Связь отсутствия зубов с патологией височно-нижнечелюстного сустава'),
                'img' => 'blog/text/s10.jpg',
                'hash_tags' => '#зубы #потеря зубов # зубочелюстная система #сустав #ВНЧС #височно-нижнечелюстной сустав #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s10.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s10_short.html')),
                'author_name' => 'Алымова Виктория Викторовна',
                'author_photo' => 'blog_specialist/alimova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Потеря зубов как фактор изменений физиологичного дыхания',
                'slug' => Str::slug('Потеря зубов как фактор изменений физиологичного дыхания'),
                'img' => 'blog/text/s11.jpg',
                'hash_tags' => '#зубы #потеря зубов # зубочелюстная система #дыхание #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s11.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s11_short.html')),
                'author_name' => 'Алымова Виктория Викторовна',
                'author_photo' => 'blog_specialist/alimova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Потеря зубов – причина атрофии костной ткани и  преждевременного внешнего старения',
                'slug' => Str::slug('Потеря зубов – причина атрофии костной ткани и  преждевременного внешнего старения'),
                'img' => null,
                'hash_tags' => '#зубы #потеря зубов #атрофия #убыль кости # зубочелюстная система #старение #лицо #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s12.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s12_short.html')),
                'author_name' => 'Алымова Виктория Викторовна',
                'author_photo' => 'blog_specialist/alimova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Самопомощь при гипертонусе жевательных мышц',
                'slug' => Str::slug('Самопомощь при гипертонусе жевательных мышц'),
                'img' => 'blog/text/s13.jpg',
                'hash_tags' => '#гипертонус #спазм #зубочелюстная система #расслабление мышц #мышцы  #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s13.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s13_short.html')),
                'author_name' => 'Алымова Виктория Викторовна',
                'author_photo' => 'blog_specialist/alimova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Самопомощь при сухости во рту',
                'slug' => Str::slug('Самопомощь при сухости во рту'),
                'img' => 'blog/text/s14.jpg',
                'hash_tags' => '#зубы #лечение #сухость во рту #ксеростомия#слюнотделение #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s14.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s14_short.html')),
                'author_name' => 'Лисова Татьяна Олеговна',
                'author_photo' => 'blog_specialist/lisova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Что нужно знать об анестетиках в стоматологии',
                'slug' => Str::slug('Что нужно знать об анестетиках в стоматологии'),
                'img' => 'blog/text/s15.jpg',
                'hash_tags' => '#анестезия #лечение зубов #беременность# зубы #адреналин #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s15.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s15_short.html')),
                'author_name' => 'Лисова Татьяна Олеговна',
                'author_photo' => 'blog_specialist/lisova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Методы диагностики кариеса',
                'slug' => Str::slug('Методы диагностики кариеса'),
                'img' => 'blog/text/s16.jpg',
                'hash_tags' => '#зубы #лечение зубов #кариес #рентген #диагностика #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s16.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s16_short.html')),
                'author_name' => 'Лисова Татьяна Олеговна',
                'author_photo' => 'blog_specialist/lisova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Галитоз или неприятный запах изо рта. Что делать?',
                'slug' => Str::slug('Галитоз или неприятный запах изо рта. Что делать?'),
                'img' => 'blog/text/s17.jpg',
                'hash_tags' => '#зубы #галитоз #неприятный запах #лечение #профессиональная гигиена #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s17.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s17_short.html')),
                'author_name' => 'Лисова Татьяна Олеговна',
                'author_photo' => 'blog_specialist/lisova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Гиперестезия или повышенная чувствительность зубов',
                'slug' => Str::slug('Гиперестезия или повышенная чувствительность зубов'),
                'img' => 'blog/text/s18.jpg',
                'hash_tags' => '#зубы #повышенная чувствительность #гиперестезия #лечение #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s18.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s18_short.html')),
                'author_name' => 'Лисова Татьяна Олеговна',
                'author_photo' => 'blog_specialist/lisova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Что нужно знать о герпесе при обращении к стоматологу?',
                'slug' => Str::slug('Что нужно знать о герпесе при обращении к стоматологу?'),
                'img' => 'blog/text/s19.jpg',
                'hash_tags' => '#герпес #лечение герпеса #герпес в полости рта #противовирусная терапия #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s19.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s19_short.html')),
                'author_name' => 'Алымова Виктория Викторовна',
                'author_photo' => 'blog_specialist/alimova.webp',
                'author_position' => 'врач стоматолог-терапевт клиники «Денталика»',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Имплантация зубов при остеопорозе',
                'slug' => Str::slug('Имплантация зубов при остеопорозе'),
                'img' => 'blog/text/s20.jpg',
                'hash_tags' => '#имплантация #остеоинтеграция #имплантат #приживление #гарантии #стоматология #зубы #остеопороз #бифосфонаты #кость',
                'text' => file_get_contents(public_path('old_data/blog/text/s20.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s20_short.html')),
                'author_name' => 'Корнев Сергей Александрович',
                'author_photo' => 'blog_specialist/korenev.webp',
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Есть ли гарантия, что имплантат приживется',
                'slug' => Str::slug('Есть ли гарантия, что имплантат приживется'),
                'img' => 'blog/text/s21.jpg',
                'hash_tags' => '#имплантация #остеоинтеграция #имплантат #приживление #гарантии #стоматология #зубы #кость',
                'text' => file_get_contents(public_path('old_data/blog/text/s21.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s21_short.html')),
                'author_name' => 'Корнев Сергей Александрович',
                'author_photo' => 'blog_specialist/korenev.webp',
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Противопоказания к протезированию винирами',
                'slug' => Str::slug('Противопоказания к протезированию винирами'),
                'img' => 'blog/text/s22.jpg',
                'hash_tags' => '#метод лечения #стоматология #зубы #метод лечения #стоматология #протезирование #виниры',
                'text' => file_get_contents(public_path('old_data/blog/text/s22.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s22_short.html')),
                'author_name' => 'Корнев Сергей Александрович',
                'author_photo' => 'blog_specialist/korenev.webp',
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'title' => 'Какая методика самая лучшая',
                'slug' => Str::slug('Какая методика самая лучшая'),
                'img' => 'blog/text/s23.jpg',
                'hash_tags' => '#метод лечения #стоматология #зубы #стоматология',
                'text' => file_get_contents(public_path('old_data/blog/text/s23.html')),
                'short_description' => file_get_contents(public_path('old_data/blog/text/s23_short.html')),
                'author_name' => 'Корнев Сергей Александрович',
                'author_photo' => 'blog_specialist/korenev.webp',
                'author_position' => 'гл.врач клиники «Денталика», врач стоматолог-терапевт',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('text_materials')->upsert(
            $items,
            ['slug'],
            [
                'title',
                'img',
                'hash_tags',
                'short_description',
                'text',
                'author_name',
                'author_photo',
                'author_position',
                'updated_at',
            ]
        );

    }
}
