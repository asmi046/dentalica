<article class="text-card-item">
    <a href="{{ route('blog.texts.page', ['slug' => $text->slug]) }}" class="text-card-item__top">
        <h2>{{ $text->title }}</h2>
    </a>

    <div class="text-card-item__center">
        <div class="text-card-author">
            <div class="text-card-author__photo">
                <img src="{{ $text->author_photo ? Storage::url($text->author_photo) : asset('img/no_photo.webp') }}"
                    alt="{{ $text->author_name }}">
            </div>
            <div class="text-card-author__content">
                <p class="label_a">Автор</p>
                <p class="author">{{ $text->author_name }}</p>
                <p class="position">{{ $text->author_position }}</p>
            </div>
        </div>

        <div class="text-card-tags" aria-label="Хештеги статьи">
            @foreach (explode(' ', $text->hash_tags) as $tag)
                <a href="#">{{ $tag }}</a>
            @endforeach
        </div>
    </div>

    <a href="{{ route('blog.texts.page', ['slug' => $text->slug]) }}" class="text-card-item__bottom">
        <div class="text-card-item__text text_styles">
            {!! $text->short_description !!}

        </div>
        @if ($text->img)
            <div class="text-card-item__image">
                <img src="{{ Storage::url($text->img) }}" alt="{{ $text->title }}">
            </div>
        @endif
    </a>
</article>
