@extends('layout.app')

@section('header')
    <div uk-sticky="top: #homepage-cover; cls-active: uk-navbar-sticky;" show-on-up animation="uk-animation-slide-top"
         cls-inactive="uk-light uk-navbar-transparent no-shadow" sel-target=".uk-navbar-container">
        @parent
    </div>
@stop

@section('content')

    <div id="homepage-cover" class="uk-cover-container uk-light" uk-height-viewport>
        <img src="/images/main-home.jpg" alt="" uk-cover>
        <div class="uk-position-center uk-text-center">
            <h2 class="uk-margin-remove uk-text-uppercase">dal 1994</h2>
            <h1 class="uk-text-uppercase">Bonamin <span>costruzioni</span></h1>
            <h2 class="uk-text-uppercase">la vostra soluzione</h2>
        </div>
        <a class="uk-position-bottom-center uk-margin-small-bottom" uk-icon="icon: chevron-down; ratio:2" href="#intro"
           uk-scroll="duration: 1500; offset: 150"></a>
    </div>


    <div class="uk-section uk-container uk-margin-large-top" id="intro">
        <div uk-grid>
            <div class="uk-width-2-5@m uk-text-center highlight">
                <p class="subtitle uk-margin-remove">da sempre</p>
                <p class="title uk-text-uppercase uk-margin-remove uk-text-primary">Professionalitá e Passione</p>
            </div>
            <div class="uk-width-3-5@m">
                <p class="uk-padding uk-text-center uk-text-lead">
                    Il nostro successo dipende dalla soddisfazione del cliente. <br>
                    La continua ricerca della perfezione come unico obiettivo in ogni lavoro, dalla manutenzione alla
                    costruzione. <br>
                    I migliori materiali, un eccellente team e una gestione geniale portano sempre alla <span
                        class="uk-text-bold">soluzione ottimale</span>
                </p>
            </div>
        </div>
    </div>

    <div class="uk-flex uk-flex-center" uk-grid>
        <div class="uk-width-1-2">
            <hr class="uk-divider-icon">
        </div>
    </div>

    <div class="uk-section uk-container uk-margin-top">
        <p class="uk-text-large uk-text-primary uk-margin-bottom uk-text-center instagram-title">
            Seguici su Instagram <a href="https://www.instagram.com/bonamincostruzionisrl/" target="_blank">@bonamincostruzionisrl</a> per le ultime dai nostri cantieri!
        </p>
        <div class="uk-grid uk-grid-collapse">
            @foreach($pictures as $picture)
                <div class="uk-width-1-4@m uk-width-1-3@s {{ $loop->last ? 'uk-hidden@m' : '' }} instagram-card uk-cover-container">
                    <a href="{{ Arr::get($picture, 'link') }}" target="_blank">
                        <div class="uk-light">
                            @if(Arr::get($picture, 'type') == 'carousel')
                                <div class="uk-position-top-right uk-margin-small-top uk-margin-small-right">
                                    <span uk-icon="copy"></span>
                                </div>
                            @endif
                            <div class="uk-position-center">
                                <span uk-icon="heart"></span> {{ Arr::get($picture, 'likes.count') }}
                                <span class="uk-margin-small-left" uk-icon="comments"></span> {{ Arr::get($picture, 'comments.count') }}
                            </div>
                        </div>
                        <img src="{{ Arr::get($picture, 'images.low_resolution.url') }}" alt="{{ Arr::get($picture, 'link') }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="uk-flex uk-flex-center" uk-grid>
        <div class="uk-width-1-2">
            <hr class="uk-divider-icon">
        </div>
    </div>

    <div class="uk-section uk-container uk-margin-top">
        <p class="uk-text-large uk-text-primary uk-margin-bottom uk-text-center">I nostri lavori</p>
        @foreach($items as $index => $item)
            @include('partials.case-card')
        @endforeach
        <div class="uk-margin-top uk-text-center">
            <a href="{{ route('lavori') }}" class="uk-button uk-button-primary">Vedi altri</a>
        </div>
    </div>

    <div class="uk-section uk-padding-remove-bottom">
        <div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-middle uk-flex-center uk-padding-small" uk-parallax="bgy: -140"
             style="background-image: url('/images/bassano.jpg');">
            <div class="highlight bassano">
                <p class="title uk-text-center uk-margin-auto uk-margin-auto-vertical">
                    Amore per la propria cittá
                </p>
                <p class="subtitle uk-text-center uk-margin-auto uk-margin-auto-vertical">
                    Tenere alto il valore artistico di Bassano è un dovere
                </p>
            </div>
        </div>
    </div>
@stop
