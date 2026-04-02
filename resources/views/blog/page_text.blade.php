@extends('layouts.all')

@section('main')
    <x-header.inner-page-header></x-header.inner-page-header>
    <x-header.inner-page-title-no-photo :title="$page->title"></x-header.inner-page-title-no-photo>

    <section class="text_page_section">
        <div class="container text_styles">

            <div class="text-card-item__center text-card-item__center--page">
                <div class="text-card-author">
                    <div class="text-card-author__photo">
                        <img src="{{ $page->author_photo ? Storage::url($page->author_photo) : asset('img/no_photo.webp') }}"
                            alt="{{ $page->author_name }}">
                    </div>
                    <div class="text-card-author__content">
                        <p class="label_a">Автор</p>
                        <p class="author">{{ $page->author_name }}</p>
                        <p class="position">{{ $page->author_position }}</p>
                    </div>
                </div>

                <div class="text-card-tags" aria-label="Хештеги статьи">
                    @foreach (explode(' ', $page->hash_tags) as $tag)
                        <a href="#">{{ $tag }}</a>
                    @endforeach
                </div>
            </div>
            <div class="text">
                {!! $page->text !!}
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
