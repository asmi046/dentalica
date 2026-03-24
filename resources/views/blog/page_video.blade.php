@extends('layouts.all')

@php
    $title = empty($page->seo_title) ? $page->title : $page->seo_title;
    $description = empty($page->seo_description) ? $page->short_description : $page->seo_description;
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-header.inner-page-header></x-header.inner-page-header>
    <x-header.inner-page-title-no-photo :title="$page->title"></x-header.inner-page-title-no-photo>

    <section class="video_page_section">
        <div class="container text_styles">
            <div class="video_page">
                <div class="video">
                    <video
                        controls
                        playsinline
                        webkit-playsinline
                        x5-playsinline
                        preload="metadata"
                        controlsList="nodownload"
                        poster="{{ asset('storage/'.$page->img) }}"
                        aria-label="{{ $page->title }}"
                    >
                        <source src="{{ asset('storage/'.$page->video_frame) }}" type="video/mp4">
                        Ваш браузер не поддерживает HTML5 видео.
                    </video>
                </div>

                <div class="text">
                    {!! $page->description !!}
                </div>
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
