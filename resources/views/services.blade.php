@extends('layouts.all')

@php
    $title = "Стоматологические услуги нгашей клиники - Денталика";
    $description = "Стоматологические услуги нгашей клиники";
    $title_page = "Услуги";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title :title="$title_page"></x-header.doctor-page-title>

<section class="all_services_page_section">
    <div class="container">

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