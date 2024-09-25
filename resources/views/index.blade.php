@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-main-header></x-main-header>

    <section class="princips">
        <div class="container">
            <x-princips></x-princips>
        </div>
    </section>

@endsection

