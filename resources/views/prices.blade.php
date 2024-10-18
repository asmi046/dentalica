@extends('layouts.all')

@php
    $title_page = seo_data()->seo_data->page_title;
@endphp

@section('main')

<x-header.inner-page-header></x-header.inner-page-header>
<x-header.inner-page-title :title="$title_page"></x-header.inner-page-title>


<section class="prices_section">
    <div class="container">
        <div class="prices_wrapper">
            <h3>В данном разделе представлены цены актуальные на {{ date("d.m.Y") }}</h3>
            <br>
            @foreach ($prices as $item)
                <details>
                    <summary>{{ $item->title }}</summary>
                    <div class="response">

                            @foreach (separate_table($item->price_list) as $key => $table)

                            @if ($key !== "all")
                                <h3>{{ $key}} </h3>
                            @endif

                            <table>
                                <thead>
                                    <tr>
                                        <th class="td_code">Код</th>
                                        <th>Наименование</th>
                                        <th class="td_price">Цена</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($table as $subitem)
                                        <tr>
                                            <td class="td_code">{{ $subitem["code"] }}</td>
                                            <td>{{ $subitem["name"] }}</td>
                                            <td class="td_price">{{ $subitem["price"] }}₽</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @endforeach

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
