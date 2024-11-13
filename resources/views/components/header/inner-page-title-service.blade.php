@props( [
    "title" => "Страница",
    "service" => []
])

<div class="inner_page_title _service _doctor">
    <div class="container">
        <div class="text">
            <div class="wrapper">
                <h1>{!! $title !!}</h1>
                <hr class="gray_hr">
                <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
            </div>
        </div>
        <div class="cerecter">

            @if ($service->time)
                <div class="c_param">
                    <div class="icon">
                        <svg class="sprite_icon _icon_time">
                            <use xlink:href="#time"></use>
                        </svg>
                    </div>
                    <span>{{ $service->time }}</span>
                </div>
            @endif

            @if ($service->price)
                <div class="c_param">
                    <div class="icon">
                        <svg class="sprite_icon">
                            <use xlink:href="#rubl"></use>
                        </svg>
                    </div>
                    <span>от {{ $service->price }}</span>
                </div>
            @endif

        </div>
    </div>

</div>
