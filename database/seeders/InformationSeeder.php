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
        Storage::disk('public')->put("information/smile_clinic.webp", file_get_contents( public_path('old_data/information/smile_clinic.webp')), 'public');
        Storage::disk('public')->put("information/steril.webp", file_get_contents( public_path('old_data/information/steril.webp')), 'public');
        Storage::disk('public')->put("information/tolk.webp", file_get_contents( public_path('old_data/information/tolk.webp')), 'public');
        Storage::disk('public')->put("information/price.webp", file_get_contents( public_path('old_data/information/price.webp')), 'public');
        Storage::disk('public')->put("information/digital.webp", file_get_contents( public_path('old_data/information/digital.webp')), 'public');

        DB::table("information")->insert([
            [
                'img' => "information/smile_clinic.webp",
                'title' => 'О нашей клинике',
                'short_description' => 'Мы не большая клиника, делающая ставку на качество лечения, а не на поток и количество пациентов.',
                'description' => 'Мы не большая клиника, делающая ставку на качество лечения, а не на поток и количество пациентов. Для нас это не просто работа, это дело в которое мы вкладываем душу и лечим Вас так, как лечили бы своего близкого человека.  Мы ценим ваше мнение и благодарны нашим пациентам за доверие.'
            ],
            [
                'img' => "information/steril.webp",
                'title' => 'Безопасная медицина',
                'short_description' => 'Медицина должна быть безопасной: мы гарантируем  100% стерильность всего инструментария и дезинфекцию кабинетов.',
                'description' => 'Медицина должна быть безопасной: мы гарантируем  100% стерильность всего инструментария и дезинфекцию кабинетов после каждого пациента. Алгоритмы стерилизации и безопасность лечения в клинике соответствуют мировым стандартам, требованиям ВОЗ и МЗ РФ. Все используемые при лечении материалы и оборудование имеют сертификаты качества и регистрационные удостоверения, разрешены к применению на территории РФ и приобретаются у официальных компаний-поставщиков'
            ],
            [
                'img' => "information/tolk.webp",
                'title' => 'О нашем сервисе',
                'short_description' => 'Удобный сервис: общайтесь с нами  как вам удобно: телефонный звонок, сообщение вмесенджеры.',
                'description' => 'Удобный сервис: общайтесь с нами  как вам удобно. Если Вам не удобно разговаривать  по телефону, мы напишем в мессенджеры: напомним о приеме, вышлем ссылку как добраться и информацию о лечащем враче и рекомендации после лечения. В чатах с Вами общается не робот, а  медицинский сотрудник, у которого можно выяснить интересующие вас вопросы'
            ],
            [
                'img' => "information/price.webp",
                'title' => 'Прозрачные низкие цены',
                'short_description' => 'Прозрачность цен: узнайте стоимость до визита,  цены и список услуг на сайте полностью совпадают с ценами в клинике.',
                'description' => 'Прозрачность цен: узнайте стоимость до визита,  цены и список услуг на сайте полностью совпадают с ценами в клинике На приеме мы предлагаем только те услуги, которые вам необходимы, не включаем скрытые услуги в стоимость лечения. Все рентгеновские снимки  выполняются в ходе лечения бесплатно'
            ],
            [
                'img' => "information/digital.webp",
                'title' => 'Новейшие технологии',
                'short_description' => 'Цифровые технологии для вашего здоровья: фотопротокол до и после лечения, хирургические шаблоны...',
                'description' => 'Цифровые технологии для вашего здоровья: фотопротокол до и после лечения, хирургические шаблоны, интраоральный сканер, цифровая рентгенография, лечение под увеличением  и пр.'
            ],

        ]);
    }
}
