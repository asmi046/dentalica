<div class="uni_breadcrumbs">
    <div class="_container">

        <div itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{ route('home') }}">
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="0">
                </a>
            </span>



            @if (Request::route()->named('services_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Услуги" itemprop="item" href="{{ route('services') }}">
                        <span itemprop="name">Услуги</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (Request::route()->named('blog.texts.page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Тексты" itemprop="item" href="{{ route('blog.texts') }}">
                        <span itemprop="name">Тексты</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (Request::route()->named('blog.videos.page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Видео" itemprop="item" href="{{ route('blog.videos') }}">
                        <span itemprop="name">Видео</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @elseif (isset($title))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $title }}" itemprop="item">
                        <span itemprop="name">{{ $title }}</span>
                        <meta itemprop="position" content="1">
                    </span>
                </span>
            @endif

        </div>
    </div>
</div>
