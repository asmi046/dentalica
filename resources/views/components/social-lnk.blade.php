<div class="social-lnk">
    @if( !empty($contacts['vk']))
        <a href="{{ $contacts['vk'] }}" class="link vk_lnk">
            <svg class="sprite_icon">
                <use xlink:href="#vk_icon"></use>
            </svg>
        </a>
    @endif

    @if( !empty($contacts['tg']))
    <a href="{{ $contacts['tg'] }}" class="link tg_lnk">
        <svg class="sprite_icon">
            <use xlink:href="#tg_icon"></use>
        </svg>
    </a>
    @endif

    @if( !empty($contacts['ws']))
    <a href="{{ $contacts['ws'] }}" class="link ws_lnk">
        <svg class="sprite_icon">
            <use xlink:href="#ws_icon"></use>
        </svg>
    </a>
    @endif

    {{-- @if( !empty($contacts['ok']))
    <a href="{{ $contacts['ok'] }}" class="link ok_lnk">
        <svg class="sprite_icon">
            <use xlink:href="#ok_icon"></use>
        </svg>
    </a>
    @endif --}}

    @if( !empty($contacts['in']))
    <a href="{{ $contacts['in'] }}" class="link in_lnk">
        <svg class="sprite_icon">
            <use xlink:href="#in_icon"></use>
        </svg>
    </a>
    @endif
</div>
