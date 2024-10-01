<a class="phone_lnk" href="tel:+7{{ phone_format($contacts['phone']) }}">{{ $contacts['phone'] }}</a>
<p class="adres">{{ $contacts['adress'] }}</p>
<a class="mail" href="mailto:{{ $contacts['email'] }}">{{ $contacts['email'] }}</a>
<x-social-lnk :contacts="$contacts"></x-social-lnk>

