@extends('layouts.all')

@php
    $title_page = $service->title;
@endphp

@section('main')
    <x-lending-header :service="$service"></x-lending-header>


    <section class="lec_process">
        <div class="container">
            <h2>Как проходит лечение?</h2>
            <hr class="gray_hr">

            <div class="lec_process_wrapper">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Как проходит лечение?')
                    <div class="part">
                        <div class="head">
                            <x-lend.green-ch :ch="$item['sub_title']"></x-lend.green-ch>
                            <div class="text">
                                <span>{!! $item['title'] !!}</span>
                            </div>
                        </div>
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


    <section class="what_impant">
        <div class="container">
            @foreach ($service->lending_data as $item)
                @continue($item['part'] != 'Что вы получите после лечения?')
                <x-lend.resilts title="Что вы получите после лечения?" :subtitle="$item['title']" :text="$item['content']" ></x-lend.resilts>
            @endforeach
        </div>
    </section>

    <section class="lec_podgotovka">
        <div class="container">
            <h2>Как подготовиться к процедуре?</h2>
            <hr class="gray_hr">

            <div class="lec_podgotovka_wrapper">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Как подготовиться к процедуре?')
                    @if ( !empty($item['title']) )
                    <x-lend.resilts :title="$item['title']" subtitle="" :text="$item['content']" ></x-lend.resilts>
                    @else
                        <div class="img_wrapper">
                            <img src="{{ Storage::url($item['picture']) }}" alt="">
                        </div>
                    @endif

                @endforeach
            </div>
        </div>
    </section>

    <section class="quote_section">
        <div class="container">
            @foreach ($service->lending_data as $item)
                    @continue($item['part'] != 'Цитата')
                    <div class="quote">
                        <i class="q"></i>
                        <i class="q q2"></i>
                        {!! $item['content'] !!}
                    </div>
            @endforeach
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
