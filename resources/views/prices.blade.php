@extends('layouts.all')

@php
    $title = "Цены на стоматологические услуги - Денталика";
    $title_page = "Цены на услуги";
    $description = "Цены на стоматологические услуги";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title :title="$title_page"></x-header.inner-page-title>


<section class="prices_section">
    <div class="container">
        <div class="prices_wrapper">
            @foreach ($prices as $item)
                <details>
                    <summary>{{ $item->title }}</summary>
                    <div class="response">

                            <table>
                                <thead>
                                    <tr>
                                        <th class="td_code">Код</th>
                                        <th>Наименование</th>
                                        <th class="td_price">Цена</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item->price_list as $subitem)
                                        <tr>
                                            <td class="td_code">{{ $subitem["code"] }}</td>
                                            <td>{{ $subitem["name"] }}</td>
                                            <td class="td_price">{{ $subitem["price"] }}₽</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                    </div>
                </details>
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
