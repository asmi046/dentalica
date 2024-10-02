<div class="actions">
    <x-card-actions :sale="$sale"></x-card-actions>
    <a class="actions_button" href="{{ route('sales_all') }}">
        <p>Смотреть все акции</p>
        <img src="{{ asset('img/icons/arrow.svg') }}" alt="">
    </a>
</div>
