@component('mail::message')
# Hello from laravel assign

Thanks for your contact.it's important to take a feed back from you.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
