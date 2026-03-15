    <section class="blog_section">
        <div class="container">
            <h2>Полезные материалы</h2>
            <hr class="gray_hr">
            <div class="information">
                <div class="numbers">
                    <img class="logo-to-numbers" src="{{ asset('img\logo_transparent.svg') }}" alt="">
                    <div class="elelemt">
                        <div class="number">{{ $texts_count }}</div>
                        <p class="text_comment">Статей и текстовых маткриалов по вопросам стоматологии</p>
                        <a href="{{ route('blog.texts') }}" class="button">Читать</a>
                    </div>

                    <div class="elelemt">
                        <div class="number">{{ $videos_count }}</div>
                        <p class="text_comment">Познавательных видео на тему ухода за зубами и подготовке к имплантации
                        </p>
                        <a href="{{ route('blog.videos') }}" class="button">Смотреть</a>
                    </div>
                </div>
                <div class="informer">
                    <h3>Много интересной информации для <br>Вас</h3>
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
    </section>
