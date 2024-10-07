@props( ["title" => "Доктор", 'dolgnost' => "Должность"])

<div class="inner_page_title _doctor">
    <div class="container">
        <div class="text">
            <div class="wrapper">
                <h1>{{ $title }}</h1>
                <hr class="gray_hr">
                <p>{{ $dolgnost}}</p>
            </div>
        </div>
    </div>

</div>
