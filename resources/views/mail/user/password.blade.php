@component('mail::message')
    Ваш пароль: {{$pass}} <br/>
    Спасибо, с уважением ваш {{ config('app.name') }} !
@endcomponent
