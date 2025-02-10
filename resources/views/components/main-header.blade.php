<header class="main_page_header">
    <div class="text_side">
        <x-header.top-control></x-header.top-control>

        <div class="center_blk_wrapper">
            <div class="center_blk">
                <h1 class="h">{{seo_data()->seo_data->page_title}}</h1>
                <hr class="gray_hr">
                <p class="sub_h">Имплантация и удаление<br>лечение и протезирование<br>отбеливание и гигиена</p>

                <a href="#showModal" class="button">Записаться</a>
            </div>
        </div>

    </div>

    <div class="photo_side">
        <div class="swipper_wrapper">
            <swiper-container
            autoplay-delay="6000" loop="true"
            >
                <swiper-slide>
                    <img src="{{asset('img/main-photo_new.webp')}}" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="{{asset('img/main-slide-1.webp')}}" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="{{asset('img/main-slide-4.webp')}}" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="{{asset('img/main-slide-2.webp')}}" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="{{asset('img/main-slide-3.webp')}}" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="{{asset('img/main-slide-5.webp')}}" alt="">
                </swiper-slide>
                <swiper-slide>
                    <img src="{{asset('img/gift-sert.webp')}}" alt="">
                </swiper-slide>

            </swiper-container>
        </div>
    </div>
</header>
