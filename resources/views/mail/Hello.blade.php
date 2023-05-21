@component('mail::message')
Hello {{$name}} this is your password
@component('mail::button', ['url' => ''])
phive
@endcomponent
@component('mail::panel')
{{$password}}
 @endcomponent
<br>
{{ config('app.name') }}
@endcomponent
