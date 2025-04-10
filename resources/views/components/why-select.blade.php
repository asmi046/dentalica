<div class="princips">
    <div class="left_line">

        @foreach ($puncts as $item)
            <div class="inner_princips">
                <x-tooth-gray></x-tooth-gray>
                <div class="text">
                    <h3>{!! $item->title !!}</h3>
                    <p>{!! $item->description !!}</p>
                </div>
            </div>
        @endforeach


    </div>

    <div class="right_line">
        <div class="picture">
            <img src="{{ asset('img/princips_2.webp') }}" alt="Принципы клиники - Денталика">
        </div>
    </div>
</div>
