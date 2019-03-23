@extends('layout.layout')

@section('header')
    <div uk-sticky="cls-active: uk-navbar-sticky;" show-on-up animation="uk-animation-slide-top"
         cls-inactive="no-shadow" sel-target=".uk-navbar-container">
        @parent
    </div>
@stop

@section('content')
    <div class="uk-section uk-container uk-margin-auto">
        <h1 class="uk-margin-large-top uk-margin-large-bottom uk-text-center uk-text-uppercase uk-text-primary">Informazioni di contatto</h1>
        <div uk-grid>
            <div class="uk-width-1-2@m">
                <div class="uk-cover-container">
                    <canvas width="600" height="450"></canvas>
                    <img src="/images/contatti.jpg" alt="" uk-cover>
                </div>
            </div>
            <div class="uk-width-1-2@m">
                <p class="uk-text-large uk-text-left@m uk-text-center">
                    <strong>Bonamin Costruzioni srl</strong><br><br>
                    Via Don Lorenzo Perosi, 28 <br>
                    36061 Bassano del Grappa (VI) <br>
                    Telefono: +39 0424 566461 <br>
                    Fax: +39 0424 566461 <br>
                    E-mail: info@bonamincostruzioni.it <br>
                </p>
            </div>
        </div>
    </div>
    <div class="uk-section uk-container-large uk-margin-auto">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.063499065533!2d11.727284415790688!3d45.74987292235649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5b2c4e0db43183d!2sBonamin+Costruzioni+S.R.L.!5e0!3m2!1sit!2sit!4v1553352516171"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@stop
