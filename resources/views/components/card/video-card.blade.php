<div class="card video_card">
    <div class="card_image video_placeholder">
        <div class="play_button">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="30" cy="30" r="30" fill="#A7D7A6" />
                <path d="M23 18L23 42L44 30L23 18Z" fill="white" />
            </svg>
        </div>
    </div>

    <div class="card_content">
        <h3 class="card_title">
            <a href="#">{{ $video->title }}</a>
        </h3>

        <p class="card_description">{{ $video->short_description }}</p>

        <div class="card_meta">
            <div class="author_info">
                <p class="author_name">{{ $video->author_name }}</p>
                <p class="author_position">{{ $video->author_position }}</p>
            </div>
            <p class="post_date">{{ $video->created_at->format('d.m.Y') }}</p>
        </div>
    </div>
</div>
