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
        document.ondragstart = prohibit;
		document.onselectstart = prohibit;
		document.oncontextmenu = prohibit;
		function prohibit() {
			return false;
		}
    </script>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'public/scss/main.scss'
    ])

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(98994603, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/98994603" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
    <div id="all_modal_win">
        <action-window></action-window>
        <information-window></information-window>
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
