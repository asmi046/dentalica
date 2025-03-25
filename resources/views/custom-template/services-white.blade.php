@extends('layouts.all')

@php
     $title_page = $service->title;
@endphp

@section('main')
    <x-lending-header :service="$service"></x-lending-header>

    <section class="whute_procedure_technologi">
        <div class="container">
            <h2>Технология и методика процедуры</h2>
            <hr class="gray_hr">

            <div class="whute_procedure_technologi_wrapper">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Технология и методика процедуры')
                    <div class="part">
                        <x-lend.green-ch :ch="$item['sub_title']"></x-lend.green-ch>

                        <div class="text text_styles">
                            {!! $item['content'] !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-lend.section-logo title="Почему выбирают нас:">
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
    </x-lend.section-logo>


    <section class="white_steps">
        <div class="container">
            <h2>Как проходит процедура</h2>
            <hr class="gray_hr">

            <div class="white_steps_wrapper">
                <div class="stepper_wrapper">
                    <div class="stepper">
                        <div class="line"></div>
                        @foreach ($service->lending_data as $item)
                            @continue($item['part'] != 'Как проходит процедура')
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

                <div class="photo_wrapper">
                    <img src="{{ asset('img/white_procedure.webp') }}" >
                </div>
            </div>
        </div>
    </section>


    <section class="poc_prot">
        <div class="container">
            <h2>Кому подходит процедура?</h2>
            <hr class="gray_hr">

            <div class="recommend">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Кому подходит процедура?')
                    <div @class(['recommend_good' => $item['sub_title'] == 0, 'recommend_bad' => $item['sub_title'] == 1])>
                        <h2>{{ $item['title'] }}</h2>
                        {!! $item['content'] !!}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="what_impant">
        <div class="container">
            @foreach ($service->lending_data as $item)
                @continue($item['part'] != 'Как сохранить эффект отбеливания?')
                <x-lend.resilts title="Как сохранить эффект отбеливания?" :subtitle="$item['title']" :text="$item['content']" ></x-lend.resilts>
            @endforeach
        </div>
    </section>

@endsection
