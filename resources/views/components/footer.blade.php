<footer>
    <div class="container">
        <div class="col col_1">
            <a class="logo logo_footer" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.svg') }}" alt="">
            </a>
        </div>
        <div class="col col_2">
            <nav class="footer_navigation">
                <ul>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Специалисты</a></li>
                    <li><a href="#">Прейскурант</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </nav>
        </div>

        <div class="col col_3">
            <nav class="footer_navigation">
                <ul>
                    <li><a href="#">Сведения о медицинской организации</a></li>
                    <li><a href="#">Информация для пациенто</a></li>
                    <li><a href="#">Информация для специалистов</a></li>
                    <li><a href="#">Дополнительная информация</a></li>
                </ul>
            </nav>
        </div>

        <div class="col col_contacts">
            <x-contacts-list></x-contacts-list>
            <x-bvi-btn></x-bvi-btn>
        </div>
    </div>
</footer>
