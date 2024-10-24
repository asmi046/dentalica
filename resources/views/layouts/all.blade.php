<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @header_seo

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{asset('/img/favicons/fav.svg')}}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

    <script src="{{ asset('bvi/js/bvi.js') }}"></script>
    <link href="{{ asset('bvi/css/bvi.min.css') }}" rel="stylesheet">

    <script>
        window.asset = "{{ asset('') }}";
        window.storage = "{{ asset('storage') }}";
    </script>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'public/scss/main.scss'
    ])
</head>
<body>
    <div id="all_modal_win">
        <action-window></action-window>
        <modal-window rout="/send_consult" redirect="/thencs" hesh="showModal" title="Помощь специалиста" subtitle="Оставьте свой телефон и мы свяжемся с Вами."></modal-window>
    </div>


    <x-preloader></x-preloader>
    <x-menues.side-menu></x-menues.side-menu>

    @include("allicon")
    <main id="main">
        @yield('main')

        <x-footer></x-footer>
    </main>
</body>
</html>
