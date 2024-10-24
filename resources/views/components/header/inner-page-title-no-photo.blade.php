@props( ["title" => "Страница"])

<div class="inner_page_title _doctor">
    <div class="container">
        <div class="text">
            <div class="wrapper">
                <h1>{!! $title !!}</h1>
                <hr class="gray_hr">
                <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
            </div>
        </div>
    </div>

</div>
