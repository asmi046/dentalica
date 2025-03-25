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
{{--
    <section class="services-useful">
        <div class="container">
            <h2>Полезная информация</h2>
            <hr class="gray_hr">
            <swiper-container space-between="30" slides-per-view="4" speed="500">
                <swiper-slide>
                    <a href="#" class="useful-cards">
                        <div class="useful-cards__item">
                            <div class="useful-cards__item-img">
                                <img src="{{ asset('img/useful-1.webp') }}" alt="">
                            </div>
                            <div class="useful-cards__item-content">
                                <div class="useful-cards__item-title">Лечение взрослых и детей под микроскопом</div>
                                <p class="useful-cards__item-text">
                                    Лечение кариеса и корневых каналов проводится только под увеличением. Мы используем
                                    только
                                </p>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="#" class="useful-cards">
                        <div class="useful-cards__item">
                            <div class="useful-cards__item-img">
                                <img src="{{ asset('img/useful-2.webp') }}" alt="">
                            </div>
                            <div class="useful-cards__item-content">
                                <div class="useful-cards__item-title">Отбеливание системы Flash</div>
                                <p class="useful-cards__item-text">
                                    Лечение кариеса и корневых каналов проводится только под увеличением. Мы используем
                                    только
                                </p>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="#" class="useful-cards">
                        <div class="useful-cards__item">
                            <div class="useful-cards__item-img">
                                <img src="{{ asset('img/useful-3.webp') }}" alt="">
                            </div>
                            <div class="useful-cards__item-content">
                                <div class="useful-cards__item-title">Надежная стерилизация всех инструментов</div>
                                <p class="useful-cards__item-text">
                                    Лечение кариеса и корневых каналов проводится только под увеличением. Мы используем
                                    только
                                </p>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="#" class="useful-cards">
                        <div class="useful-cards__item">
                            <div class="useful-cards__item-img">
                                <img src="{{ asset('img/useful-4.webp') }}" alt="">
                            </div>
                            <div class="useful-cards__item-content">
                                <div class="useful-cards__item-title">Фотопротокол</div>
                                <p class="useful-cards__item-text">
                                    Лечение кариеса и корневых каналов проводится только под увеличением. Мы используем
                                    только
                                </p>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="#" class="useful-cards">
                        <div class="useful-cards__item">
                            <div class="useful-cards__item-img">
                                <img src="{{ asset('img/useful-5.webp') }}" alt="">
                            </div>
                            <div class="useful-cards__item-content">
                                <div class="useful-cards__item-title">Лечение взрослых и детей под микроскопом</div>
                                <p class="useful-cards__item-text">
                                    Лечение кариеса и корневых каналов проводится только под увеличением. Мы используем
                                    только
                                </p>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
            </swiper-container>
            <div class="reviews_btn_wrapper">
                <a @click.prevent="prevSlide" class="arrow_button arrow_pred" href="#">
                    <svg class="sprite_icon">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </a>
                <a @click.prevent="nextSlide" class="arrow_button arrow_next" href="#">
                    <svg class="sprite_icon">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </section> --}}

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
            <x-princips></x-princips>
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
