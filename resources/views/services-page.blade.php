@extends('layouts.all')

@php
     $title_page = seo_data()->seo_data->page_title;
@endphp

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title-no-photo :title="$title_page"></x-header.doctor-page-title-no-photo>

<section class="one_service_page_section">
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
