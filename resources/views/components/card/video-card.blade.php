<a href="{{ route('blog.videos.page', ['slug' => $video->slug]) }}" class="card video_card">
    <div class="card_image video_placeholder">
        <img src="{{ Storage::url($video->img) }}" alt="{{ $video->title }}" class="card_img">
        <div class="play_button">
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="30" cy="30" r="30" fill="black" fill-opacity="0.5" />
                <path d="M23 18L23 42L44 30L23 18Z" fill="white" />
            </svg>
        </div>
    </div>

    <div class="card_content">
        <h3 class="card_title">
            {{ $video->title }}
        </h3>
    </div>
</a>
