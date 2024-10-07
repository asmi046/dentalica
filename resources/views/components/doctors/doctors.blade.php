<div class="doctors">
    <div class="wrapper">
        @foreach ($doctors as $item)
            <x-doctors.card :item="$item"></x-doctors.card>
        @endforeach
    </div>

    <a href="{{ route('doctors') }}" class="button doctors_button">Все специалисты</a>
</div>
