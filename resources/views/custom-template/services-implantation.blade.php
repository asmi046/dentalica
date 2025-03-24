@extends('layouts.all')

@section('main')
    <x-lending-header :service="$service"></x-lending-header>
    <section class="why_am">
        <div class="container">
            <h2>Почему выбирают нас:</h2>
            <hr class="gray_hr">

            <div class="lend_icon_blk_wrapper">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Почему выбирают нас:')
                    <div class="lend_icon_blk">
                        <div class="icon_wrapper">
                            <img src="{{ Storage::url($item['picture']) }}" alt="">
                        </div>
                        <div class="text">
                            {!! $item['content'] !!}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="expert">
        <div class="container">
            @foreach ($service->lending_data as $item)
                @continue($item['part'] != 'Экспертный подход:')
                <div class="expert_blk text_styles">

                    <div class="text">
                        <h2>Экспертный подход:</h2>
                        {!! $item['content'] !!}
                    </div>

                    <div class="photo_wrapper">
                        <img src="{{ Storage::url($item['picture']) }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="technologi">
        <div class="container">
            <h2>Современные технологии и максимальная безопасность</h2>
            <hr class="gray_hr">

            <div class="technologi_blk_wrapper">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Современные технологии и максимальная безопасность')
                    <div class="technologi_blk">
                        <div class="photo_wrapper">
                            <img src="{{ Storage::url($item['picture']) }}" alt="{{ $item['title'] }}">
                        </div>
                        <div class="text">
                            {!! $item['title'] !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="technologi">
        <div class="container">
            <h2>Преимущества имплантации зубов</h2>
            <hr class="gray_hr">

            <div class="advs">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Преимущества имплантации зубов')
                    <div class="adv">
                        <svg class="sprite_icon">
                            <use xlink:href="#green_ch"></use>
                        </svg>
                        <span>{{ $item['title'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="what_impant">
        <div class="container">
            @foreach ($service->lending_data as $item)
                @continue($item['part'] != 'Какая имплантация подходит вам?')
                <x-lend.resilts title="Какая имплантация подходит вам?" :subtitle="$item['title']" :text="$item['content']" ></x-lend.resilts>
            @endforeach
        </div>
    </section>


    <section class="garant">
        <div class="container">
            <h2>Наши гарантии</h2>
            <hr class="gray_hr">

            <div class="stepper">
                <div class="line"></div>
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Наши гарантии')
                    <div class="step">
                        <div class="counter">
                            <span>{{ $item['sub_title'] }}</span>
                        </div>

                        <div class="title">
                            <span>{!! $item['title'] !!}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="system_section">
        <div class="container">
            <h2>Мы доверяем только проверенным системам</h2>
            <hr class="gray_hr">

            <div class="systems">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Мы доверяем только проверенным системам')
                    <div class="system">
                        <div class="logo_wrapper">
                            <img src="{{ Storage::url($item['picture']) }}" alt="{{ $item['title'] }}">
                        </div>

                        <div class="title text_styles">
                            <span>{!! $item['content'] !!}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="poc_prot">
        <div class="container">
            <h2>Кому подходит лечение и когда проявлять осторожность?</h2>
            <hr class="gray_hr">

            <div class="recommend">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Кому подходит лечение и когда проявлять осторожность?')
                    <div @class(['recommend_good' => $item['sub_title'] == 0, 'recommend_bad' => $item['sub_title'] == 1])>
                        <h2>{{ $item['title'] }}</h2>
                        {!! $item['content'] !!}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
