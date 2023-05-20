<x-mail::message>
# Chegou uma nova mensagem de {{ $mail['name'] }}

<p>{{ $mail['message'] }}</p>
<p>{{ $mail['name'] }}</p>
<p>{{ $mail['email'] }}</p>

<x-mail::button :url="'https://localhost:5500'">
Acesse o portfolio
</x-mail::button>


{{ config('app.name') }}
</x-mail::message>
