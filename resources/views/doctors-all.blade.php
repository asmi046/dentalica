@extends('layouts.all')

@php
    $title = "Специалисты нашей клиники - Денталика";
    $title_page = "Специалисты нашей клиники";
    $description = "Специалисты нашей клиники";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title :title="$title_page"></x-header.inner-page-title>


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
