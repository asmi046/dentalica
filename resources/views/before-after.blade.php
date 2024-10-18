@extends('layouts.all')

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title-no-photo :title="seo_data()->seo_data->page_title"></x-header.doctor-page-title-no-photo>

<section class="before_after_section">
    <div class="container">
        <div class="before_after_wrapper">
            @foreach ($exampls as $item)
                <div class="before_after">
                    <div class="card_img before blured">
                        <img src="{{ Storage::url($item->before_photo) }}" alt="{{ $item->title }}">
                    </div>
                    <div class="card_img after">
                        <img src="{{ Storage::url($item->after_photo) }}" alt="{{ $item->title }}">
                    </div>
                    <p class="comment">
                        {{ $item->title }}
                    </p>
                </div>
            @endforeach
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
