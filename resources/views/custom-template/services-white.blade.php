@extends('layouts.all')

@php
     $title_page = $service->title;
@endphp

@section('main')
    <x-lending-header :service="$service"></x-lending-header>

@endsection
