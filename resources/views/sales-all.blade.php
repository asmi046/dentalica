@extends('layouts.all')

@php
    $title = "Скидки на стоматологические услуги в Курске - Денталика";
    $description = "Скидки на стоматологические услуги в Курске от клиники Денталика.";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>

<section class="all_sales_section">
    <div class="container">
        <div class="all_actions_wrapper">
            @foreach ($all_sales as $sale)
                <x-card-actions :sale="$sale"></x-card-actions>
            @endforeach
        </div>
    </div>
</section>

<section class="doctors_section">
    <div class="container">
        <h2>Специалисты клиники</h2>
        <hr class="gray_hr">
        <x-doctors.doctors></x-doctors.doctors>
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
