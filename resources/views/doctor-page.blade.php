@extends('layouts.all')

@php
    $title = (empty($doctor_info->seo_title))?$doctor_info->name:$doctor_info->seo_title;
    $description = (empty($doctor_info->seo_description))?$doctor_info->name:$doctor_info->seo_description;
    $title_page = $doctor_info->name;
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.doctor-page-title :title="$doctor_info->name" :dolgnost="$doctor_info->dolgnost"></x-header.doctor-page-title>

<section class="doctor_info_section">
    <div class="container">
        <a class="bacword_btn" href="{{ route('doctors') }}" >
            <div class="circl_btn arrow_back">
                <svg class="sprite_icon">
                    <use xlink:href="#arrow"></use>
                </svg>
            </div>
            <span>К списку докторов</span>
        </a>

        <div class="doctors_page">
            <div class="img">
                <img src="{{ Storage::url($doctor_info->photo) }}" alt="{{$doctor_info->name}}">
            </div>
            <div class="about text_styles">
                {!! $doctor_info->short_description !!}
                {!! $doctor_info->description !!}
                <br>
                <a href="#showModal" class="button">Получить консультацию</a>
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
