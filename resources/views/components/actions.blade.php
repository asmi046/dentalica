<div class="actions">
    @foreach ( $sale as $item)
        @continue(!$item->is_active)
        <x-card-actions :sale="$item"></x-card-actions>
    @endforeach

    <a class="actions_button" href="{{ route('sales_all') }}">
        <p>Смотреть все акции</p>
        <img src="{{ asset('img/icons/arrow.svg') }}" alt="">
    </a>
</div>
