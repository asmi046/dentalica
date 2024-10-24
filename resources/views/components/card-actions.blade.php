<div class="actions_wrapper">
    <div class="action">
        <div class="text">
            <h3>{{$sale->title}}</h3>
            <hr class="gray_hr">
            <p>{!!$sale->subtitle!!}</p>
            <div class="btn_wrap">
                <a class="button" href="#actionWindow_{{$sale->id}}">Подробнее об акции</a>
            </div>
        </div>

        <div class="photo">

            <img src="{{ Storage::url($sale->img) }}" alt="{{$sale->title}}">
        </div>
    </div>
</div>
