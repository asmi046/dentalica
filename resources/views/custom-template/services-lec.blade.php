@extends('layouts.all')

@php
     $title_page = $service->title;
@endphp

@section('main')
    <x-lending-header :service="$service"></x-lending-header>

    <section class="why_am">
        <div class="container">
            <h2>Кому подходит лечение и когда проявлять осторожность?</h2>
            <hr class="gray_hr">


        </div>
    </section>
@endsection
