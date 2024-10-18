@extends('layouts.all')

@php
    $title_page = seo_data()->seo_data->page_title;
@endphp

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title-no-photo :title="$title_page"></x-header.inner-page-title-no-photo>


<section class="all_doctors_section">
    <div class="container">
        <div class="all_doctors_wrapper">
            @foreach ($doctors as $item)
                <x-doctors.card :item="$item"></x-doctors.card>
            @endforeach
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
