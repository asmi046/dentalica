@extends('layouts.all')

@php
    $title = 'Статьи о стоматологии - полезные советы';
    $description =
        'Читайте статьи и советы от стоматологов о здоровье зубов, уходе за ротовой полостью и профилактике заболеваний';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-header.inner-page-header></x-header.inner-page-header>
    <x-header.inner-page-title-no-photo :title="'Статьи'"></x-header.inner-page-title-no-photo>

    <section class="page_section">
        <div class="container">
            <div class="blog_grid">
                @forelse($texts as $text)
                    <x-card.text-card :text="$text"></x-card.text-card>
                @empty
                    <p>Статьи отсутствуют</p>
                @endforelse
            </div>

            @if ($texts->hasPages())
                <div class="pagination_wrapper">
                    {{ $texts->links() }}
                </div>
            @endif
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
