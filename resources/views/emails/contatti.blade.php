@extends('layout.email')

@section('content')
    <h1>
        Abbiamo ricevuto la seguente richiesta dal sito bonamincostruzioni.it
    </h1>
    <hr>
    <p><strong>Nome:</strong> {{ $name }}</p>
    <p><strong>Cognome:</strong> {{ $surname }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Messaggio:</strong> {{ $text }}</p>
@stop
