<div class="doctors">
    <div class="wrapper">
        @for ($i=0; $i<4; $i++)
            <x-doctors.card :index="$i"></x-doctors.card>
        @endfor
    </div>

    <a href="#" class="button doctors_button">Все специалисты</a>
</div>
