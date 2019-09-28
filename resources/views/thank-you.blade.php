@extends('layout.app')

@section('title') Richiesta inviata con successo | @parent @stop

@section('content')
    <div class="uk-section uk-container uk-text-center">
        <h1 class="uk-margin-large-top uk-text-primary uk-margin-large-bottom">Richiesta inviata con successo</h1>
        <p class="uk-text-lead">
            Ti risponderemo il prima possibile
        </p>
        <a type="submit" class="uk-button uk-button-primary" href="/">
            Torna alla homepage
        </a>
    </div>
@stop
