@component('mail::message')

<h1>Modelo: {{ $modelo }}</h1>
Cliente:<h1>{{ $nombre }}</h1>
Correo:<h1>{{ $correo }}</h1>
Telefono:<h1>{{ $telefono }}</h1>
Presupuesto:<h1>{{ $presupuesto }}</h1>
Crédito:<h1>{{ $credito }}</h1>
Tipo de Contacto:<h1>{{ $contacto }}</h1>

@endcomponent
