@component('mail::message')
# {{ $data['subject'] }}

{!! $data['message'] !!}

From,<br>
Name: {{ $data['name'] }}<br>
Phone: <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a>
@endcomponent
