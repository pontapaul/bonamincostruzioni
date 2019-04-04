@extends('layout.app')

@section('title') I nostri lavori | @parent @stop

@section('header')
    <div uk-sticky="cls-active: uk-navbar-sticky;" show-on-up animation="uk-animation-slide-top"
         cls-inactive="no-shadow" sel-target=".uk-navbar-container">
        @parent
    </div>
@stop

@section('content')
    <div class="uk-section uk-container">
        <h1 class="uk-margin-large-top uk-text-primary uk-margin-large-bottom uk-text-center">I nostri lavori</h1>
        @foreach($items as $index => $item)
            @include('partials.case-card')
        @endforeach
    </div>
@stop
