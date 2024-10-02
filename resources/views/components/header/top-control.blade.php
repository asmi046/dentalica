<div class="top_blk">
    <a href="#" class="circl_btn show_menue_button">
        <x-burger-icon></x-burger-icon>
    </a>
    <a class="logo" href="{{ route('home') }}">
        <img src="{{ asset('img/logo.svg') }}" alt="">
    </a>
    <a href="tel:+7{{ phone_format($phone) }}" class="circl_btn green phone"></a>
</div>
