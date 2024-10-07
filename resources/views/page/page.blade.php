@extends('layouts.all')

@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
<x-header.inner-page-header></x-header.inner-page-header>

    <section class="all_sales_section">
        <div class="container text_styles">
            <h1>{{$page->title}}</h1>
            {!! $page->description !!}
        </div>
    </section>
@endsection

