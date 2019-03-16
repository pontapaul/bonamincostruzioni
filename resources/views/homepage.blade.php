@extends('layout.layout')

@section('content')

    <div id="homepage-cover" class="uk-cover-container uk-light" uk-height-viewport>
        <img src="/images/main-home.jpg" alt="" uk-cover>
        <div class="uk-position-center uk-text-center">
            <h2 class="uk-margin-remove uk-text-uppercase">dal 1994</h2>
            <h1 class="uk-text-uppercase">Bonamin costruzioni</h1>
            <h2 class="uk-text-uppercase">la vostra soluzione</h2>
        </div>
    </div>


    <div class="uk-section uk-container uk-margin-large-top">
        <div uk-grid>
            <div class="uk-width-2-5@m uk-text-center highlight uk-padding">
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

    <div class="uk-section uk-container uk-margin-large-top">
        <p class="uk-text-large uk-text-primary uk-margin-bottom uk-text-center">I nostri lavori</p>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@m uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="images/home-case-1.jpg" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Cantiere1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>

        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@m uk-margin" uk-grid>
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <img src="images/home-case-2.jpg" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Cantiere2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                </div>
            </div>
        </div>
        <div class="uk-margin-top uk-text-center">
            <a href="#" class="uk-button uk-button-primary">Vedi altri</a>
        </div>
    </div>

    <div class="uk-section uk-padding-remove-bottom">
        <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -140" style="background-image: url('/images/bassano.jpg');">
            <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Amore per la propria cittá</h1>
            <p class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical uk-padding" style="color:white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </p>
        </div>
    </div>
@stop
