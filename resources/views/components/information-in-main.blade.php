<swiper-container
    id="information_slider"
>
    @foreach ($information_list as $item)
        <swiper-slide>
            <a href="#infoWindow_{{ $item->id }}" class="useful-cards">
                <div class="useful-cards__item">
                    <div class="useful-cards__item-img">
                        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
                    </div>
                    <div class="useful-cards__item-content">
                        <div class="useful-cards__item-title">{{ $item->title }}</div>
                        <div class="useful-cards__item-text">
                            {!! $item->short_description !!}
                        </div>
                    </div>
                </div>
            </a>
        </swiper-slide>
    @endforeach

</swiper-container>
<div class="reviews_btn_wrapper">
    <a id="information_prew" class="arrow_button arrow_pred" href="#">
        <svg class="sprite_icon">
            <use xlink:href="#arrow"></use>
        </svg>
    </a>
    <a id="information_next" class="arrow_button arrow_next" href="#">
        <svg class="sprite_icon">
            <use xlink:href="#arrow"></use>
        </svg>
    </a>
</div>

<script>
    const swiperEl = document.getElementById('information_slider');

    // swiper parameters
    const swiperParams = {
        slidesPerView: 4,
        spaceBetween: 30,
        loop:true,
        autoplay: {
            delay: 2500,
        },
            breakpoints: {

                310: {
                    slidesPerView: 1.5,
                    spaceBetween: 18,
                },
                640: {
                    slidesPerView: 2.5,
                },

                820: {
                    slidesPerView: 3.5,
                },

                1024: {
                    slidesPerView: 4,
                },
            },

            navigation: {
            nextEl: '#information_next',
            prevEl: '#information_prew',
        },

    };

    Object.assign(swiperEl, swiperParams);
    swiperEl.initialize();
</script>
