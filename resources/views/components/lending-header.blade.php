<header class="main_page_header">
    <div class="text_side">
        <x-header.top-control></x-header.top-control>

        <div class="center_blk_wrapper">
            <div class="center_blk center_blk_lend">
                <h1 class="h">{{$service['title_lend']}}</h1>
                <hr class="gray_hr">
                <p class="sub_h">{{ $service['sub_title_lend'] }}</p>
                <div class="c_param c_param_lending">
                    <div class="icon">
                        <svg class="sprite_icon">
                            <use xlink:href="#rubl"></use>
                        </svg>
                    </div>
                    <span>от {{ $service->price }} руб.</span>
                </div>
                <a href="#showModal" class="button btn_effect_2">Записаться</a>
            </div>
        </div>

    </div>

    <div class="photo_side">
        <div class="swipper_wrapper">
            <img src="{{ Storage::url($service['banner']) }}" alt="{{ $service['title_lend'] }}">
        </div>
    </div>
</header>
