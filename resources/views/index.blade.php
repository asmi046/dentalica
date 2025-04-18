@extends('layouts.all')


@section('main')
    <x-main-header></x-main-header>

    <section class="actions">
        <div class="container">
            <x-actions></x-actions>
        </div>
    </section>


    <section class="services_section">
        <div class="container">
            <h2>Услуги</h2>
            <hr class="gray_hr">
            <x-services.services></x-services.services>

        </div>
    </section>

    <section class="services-useful">
        <div class="container">
            <h2>Оснащение и оборудование</h2>
            <hr class="gray_hr">
            <x-information-in-main></x-information-in-main>
        </div>
    </section>

    <section class="numbers_section">
        <div class="container">
            <h2>Наша клиника в цифрах</h2>
            <hr class="gray_hr">
            <img class="logo-to-numbers" src="{{ asset('img/icons/logo-to-numbers.svg') }}"
                alt="Клиника Денталика в цифрах">
            <x-numbers></x-numbers>
        </div>
    </section>

    <section class="princips_section">
        <div class="container">
            <h2>Почему пациенты выбирают нас</h2>
            <hr class="gray_hr">
            <x-why-select></x-why-select>
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
