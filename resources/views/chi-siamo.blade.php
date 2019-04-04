@extends('layout.app')

@section('title') Chi siamo | @parent @stop

@section('header')
    <div uk-sticky="cls-active: uk-navbar-sticky;" show-on-up animation="uk-animation-slide-top"
         cls-inactive="no-shadow" sel-target=".uk-navbar-container">
        @parent
    </div>
@stop

@section('content')
    <div class="uk-section uk-container-large uk-margin-auto">
        <div class="uk-position-relative uk-padding-remove-bottom" uk-grid="parallax: 150">
            <div class="uk-width-1-6@m"></div>
            <div class="uk-width-5-6@m">
                <div class="uk-cover-container">
                    <canvas width="800" height="700"></canvas>
                    <img src="/images/about1.jpg" alt="" uk-cover>
                </div>
            </div>
            <div class="uk-width-1-4@m" id="our-story">
                <div class="uk-card uk-card-body uk-card-default">
                    <h3 class="uk-card-title uk-text-primary uk-text-uppercase">La nostra storia</h3>
                    <p class="uk-text-justify">
                        L&#39;impresa edile Bonamin opera nell&#39;ambito dell&#39;edilizia da oltre 50 anni,
                        proponendosi
                        inizialmente
                        come impresa individuale &quot;Impresa Bonamin Domenico&quot;; poi dal 1994 si trasforma in
                        impresa
                        familiare
                        (in quanto sono subentrati nell&#39;azienda i due figli Fabio e Adriano) e dal 1997 si configura
                        come
                        società
                        nome collettivo con atto costitutivo del 17/04/1997.<br>
                        Infine dal 04/01/2010 diventa <strong>Bonamin Costruzioni s.r.l</strong>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-container uk-visible@m">
        <div class="uk-text-center">
            <div class="title" uk-grid="parallax: 30">
                <div class="uk-width-2-5@m">formazione</div>
                <div class="uk-width-2-5@m">qualitá</div>
                <div class="uk-width-1-5@m"></div>
                <div class="uk-width-1-5@m"></div>
                <div class="uk-width-2-5@m">ricerca</div>
                <div class="uk-width-2-5@m">professionalitá</div>
            </div>
            <div class="uk-divider-small uk-text-center uk-margin-medium uk-scrollspy-inview uk-animation-fade"></div>
        </div>
    </div>

    <div class="uk-section uk-container uk-margin-large-bottom">
        <div class="uk-child-width-1-1 card-list" uk-grid>
            <div class="uk-card">
                <div uk-grid>
                    <div class="uk-card-media-left uk-cover-container uk-width-3-4@m">
                        <img src="/images/about-handshake.jpg" alt="" uk-cover>
                        <canvas width="700" height="300"></canvas>
                    </div>
                    <div class="uk-card-body uk-width-1-2@m">
                        <h3 class="uk-card-title uk-text-primary uk-text-uppercase">I nostri valori</h3>
                        <p class="uk-text-justify">
                            I valori su cui ci basiamo sono trasparenza e affidabilità per poter garantire al
                            cliente un servizio sempre migliore. Il nostro intento primario è l&#39;attenzione verso la
                            clientela, prima, durante e dopo la realizzazione dell&#39;opera, garantendo competenza,
                            esperienza, professionalità e utilizzo di materiali di prima qualità.
                        </p>
                    </div>
                </div>
            </div>

            <div class="uk-card">
                <div uk-grid>
                    <div class="uk-card-body uk-width-1-2@m">
                        <h3 class="uk-card-title uk-text-primary uk-text-uppercase">La nostra crescita</h3>
                        <p class="uk-text-justify">
                            Investiamo da sempre per il miglioramento della produzione, la formazione e l&#39;aggiornamento
                            dei collaboratori sia per gli aspetti tecnici che metodologici, nonché per la sicurezza dell&#39;ambiente
                            di lavoro. <br> La nostra sensibilità verso l&#39;ambiente ci ha condotti passo dopo passo
                            alla
                            specializzazione nella ricerca e nell&#39;utilizzo di nuovi materiali per la bio-edilizia,
                            di
                            tecniche e tecnologie costruttive all&#39;avanguardia per il costante miglioramento degli
                            isolamenti
                            termici ed acustici negli edifici che realizziamo.
                        </p>
                    </div>
                    <div class="uk-card-media-right uk-cover-container uk-width-3-4@m">
                        <img src="/images/about-growth.jpg" alt="" uk-cover>
                        <canvas width="700" height="300"></canvas>
                    </div>
                </div>
            </div>
            <div class="uk-card">
                <div uk-grid>
                    <div class="uk-card-media-left uk-cover-container uk-width-3-4@m">
                        <img src="/images/about2.jpg" alt="" uk-cover>
                        <canvas width="700" height="300"></canvas>
                    </div>
                    <div class="uk-card-body uk-width-1-2@m">
                        <h3 class="uk-card-title uk-text-primary uk-text-uppercase">Il nostro team</h3>
                        <p class="uk-text-justify">
                            Siamo a disposizione con un team giovane, ma altamente specializzato che opera
                            quotidianamente
                            con grandissima discrezione e professionalità, per rispondere nel miglior modo alle esigenze
                            della clientela. Ci impegniamo a conoscere le esigenze del committente e percepirne per
                            tempo le
                            esigenze al fine di consegnare un prodotto di qualità che risponda alle aspettative.
                        </p>
                    </div>
                </div>
            </div>
            <div class="uk-card">
                <div uk-grid>
                    <div class="uk-card-body uk-width-1-2@m">
                        <h3 class="uk-card-title uk-text-primary uk-text-uppercase">Il nostro impegno</h3>
                        <p class="uk-text-justify">
                            Operiamo costantemente per mettere in risalto la &quot;cultura del lavoro&quot; rispettando
                            le
                            condizioni contrattuali, la normativa vigente e favorendo la prevenzione. Ricerchiamo con
                            continuità le soluzioni che consentono di essere all&#39;avanguardia in tutte le
                            attività di impresa.
                        </p>
                    </div>
                    <div class="uk-card-media-right uk-cover-container uk-width-3-4@m">
                        <img src="/images/about-architect.jpg" alt="" uk-cover>
                        <canvas width="700" height="300"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{--Siamo specializzati in costruzioni civili, industriali e di restauro, nonché in manutenzioni ordinarie e--}}
    {{--straordinarie per ogni esigenza.--}}
@stop
