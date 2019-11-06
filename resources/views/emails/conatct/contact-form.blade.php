@component('mail::message')
# Fsociety

Vous avez récu un mail de de {{ $data['name']}} ({{ $data['email']}})

Message  :

{{ $data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
