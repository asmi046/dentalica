@extends('layouts.all')

@php
     $title_page = $service->title;
@endphp

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title-service :title="$title_page" :service="$service"></x-header.inner-page-title-service>

<section class="one_service_page_section">
    <div class="container">
        <div class="service_page_wrapper">
            <div class="photo">
                <div class="photo_wrapper">
                    <img src="{{ Storage::url($service->img) }}" alt="Клиника денталика услуга: {{ $service->title }}">
                </div>
            </div>
            <div class="text text_styles">
                {!! $service->description !!}

                @if ($service->adv)
                    <div class="advs">
                        @foreach ($service->adv as $item)
                            <div class="adv">
                                <svg class="sprite_icon">
                                    <use xlink:href="#green_ch"></use>
                                </svg>
                                <span>{{ $item['title'] }}</span>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if ($service->resul)
                    <div class="results">
                        <div class="tooth_bg tooth_gray"></div>
                        <div class="text">
                            <h3>Ожидаемые результаты</h3>
                            <ul>
                                @foreach ($service->resul as $item)
                                    <li> {{ $item['title'] }} </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </div>
</section>

<section class="review_section">
    <div class="container">
        <h2>Отзывы</h2>
        <hr class="gray_hr">
        <x-reviews.reviews></x-reviews.reviews>
    </div>
</section>

@endsection
