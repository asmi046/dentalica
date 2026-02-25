<div class="card text_card">
    <div class="card_content">
        <h3 class="card_title">
            <a href="{{ route('blog.page', $text->slug) }}">{{ $text->title }}</a>
        </h3>

        <p class="card_description">{{ $text->short_description }}</p>

        <div class="card_meta">
            <div class="author_info">
                <p class="author_name">{{ $text->author_name }}</p>
                <p class="author_position">{{ $text->author_position }}</p>
            </div>
            <p class="post_date">{{ $text->created_at->format('d.m.Y') }}</p>
        </div>

        <a href="{{ route('blog.page', $text->slug) }}" class="read_more">
            Читать далее →
        </a>
    </div>
</div>
