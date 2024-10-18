@extends('layouts.all')

@php
    $title_page = seo_data()->seo_data->page_title;
@endphp

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title-no-photo :title="$title_page"></x-header.doctor-page-title-no-photo>

<section class="contacts_page_section">
    <div class="container">
        <div class="contacts_page_content">
            <div class="side">
                <div class="page_contacts_wrapper">
                    <x-contacts-list></x-contacts-list>
                    <br>
                    <a href="#showModal" class="button">Записаться</a>
                </div>

            </div>

            <div class="side">
                <div class="map_wrapper">
                    <x-map.map-in-page name="Денталика" :geo="$contacts['geo']" :adres="$contacts['adress']" :phone="$contacts['phone']"></x-map.map-in-page>
                </div>
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
