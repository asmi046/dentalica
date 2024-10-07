<a href="{{ route('doctors_page', $item->slug) }}" class="doctors_card">
    <div class="photo">
        <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->title }}">
    </div>
    <div class="text">
        <h3>{{ $item->name }}</h3>
        <p>{{ $item->dolgnost }}</p>
    </div>
</a>
