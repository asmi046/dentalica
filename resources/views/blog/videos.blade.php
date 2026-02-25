@extends('layouts.all')

@php
    $title = 'Видео о стоматологии - полезные материалы';
    $description = 'Смотрите видео об уходе за зубами, профилактике кариеса и других стоматологических процедурах';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-header.inner-page-header></x-header.inner-page-header>
    <x-header.inner-page-title-no-photo :title="'Видео материалы'"></x-header.inner-page-title-no-photo>

    <section class="page_section">
        <div class="container">
            <div class="blog_grid">
                @forelse($videos as $video)
                    <x-card.video-card :video="$video"></x-card.video-card>
                @empty
                    <p>Видео материалы отсутствуют</p>
                @endforelse
            </div>

            @if ($videos->hasPages())
                <div class="pagination_wrapper">
                    {{ $videos->links() }}
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
