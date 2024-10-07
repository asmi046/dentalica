<footer>
    <div class="container">
        <div class="col col_1">
            <a class="logo logo_footer" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </a>
        </div>
        <div class="col col_2">
            <nav class="footer_navigation">
                <x-menues.puncts></x-menues.puncts>
            </nav>
        </div>

        <div class="col col_3">
            <nav class="footer_navigation">
                <x-menues.puncts name="Дополнительная информация"></x-menues.puncts>
            </nav>
        </div>

        <div class="col col_contacts">
            <x-contacts-list></x-contacts-list>
            <x-bvi-btn></x-bvi-btn>
        </div>
    </div>
</footer>
