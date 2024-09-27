@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-main-header></x-main-header>

    <section class="actions">
        <div class="container">
            <x-actions></x-actions>
        </div>
    </section>

    <section class="numbers_section">
        <div class="container">
            <h2>Наша клиника в цифрах</h2>
            <hr class="gray_hr">
            <img class="logo-to-numbers" src="{{ asset('img/icons/logo-to-numbers.svg') }}" alt="Клиника Денталика в цифрах">
            <x-numbers></x-numbers>
        </div>
    </section>

    <section class="princips_section">
        <div class="container">
            <x-princips></x-princips>
        </div>
    </section>

    <section class="doctors_section">
        <div class="container">
            <h2>Специалисты нашей клиники</h2>
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

