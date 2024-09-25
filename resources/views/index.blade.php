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
            <h2>Наша кдиника в цифрах</h2>
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


@endsection

