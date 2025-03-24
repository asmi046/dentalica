@extends('layouts.all')

@php
     $title_page = $service->title;
@endphp

@section('main')
    <x-lending-header :service="$service"></x-lending-header>
    <section class="why_am">
        <div class="container">
            <h2>Почему выбирают нас:</h2>

            <hr class="gray_hr">

            <div class="lend_icon_blk_wrapper">
                @foreach ($service->lending_data as $item)
                    @continue($item['part'] != "Почему выбирают нас:")
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
                    @continue($item['part'] != "Экспертный подход:")
                    <div class="expert_blk text_styles">

                        <div class="text">
                            {!! $item['content'] !!}
                        </div>

                        <div class="photo_wrapper">
                            <img src="{{ Storage::url($item['picture']) }}" alt="">
                        </div>
                    </div>
                @endforeach
        </div>
    </section>

@endsection
