@props( ["title" => "Заголовок страницы", 'img' => asset('img/inner_page/tooth.webp')])

<div class="inner_page_title">
    <div class="text">
        <div class="wrapper">
            <h1>{{ $title }}</h1>
            <hr class="gray_hr">
            <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        </div>

    </div>
    <div class="img">
        <img src="{{ $img }}" alt="{{ $title }}">
    </div>
</div>
