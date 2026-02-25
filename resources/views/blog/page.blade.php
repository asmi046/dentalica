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

    <section class="page_section">
        <div class="container text_styles">
            <div class="blog_post">
                <div class="blog_post_meta">
                    <p class="author_info">
                        <strong>{{ $page->author_name }}</strong> - {{ $page->author_position }}
                    </p>
                    <p class="post_date">{{ $page->created_at->format('d.m.Y') }}</p>
                </div>

                <div class="blog_post_content">
                    {!! $page->text !!}
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
