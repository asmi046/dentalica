@extends('layouts.all')

@php
    $title = "Контакты - Денталика";
    $description = "Контакты нашей клиники, свяжитесь с нами любым удобным способом";
    $title_page = "Контакты";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title :title="$title_page"></x-header.doctor-page-title>

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
