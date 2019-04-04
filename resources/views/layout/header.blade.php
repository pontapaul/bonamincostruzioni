<!-- Header -->
<div class="uk-navbar-container">
    <div class="uk-container">
        <nav class="uk-navbar uk-margin" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="/">
                    <img src="/images/logo.png" class="uk-margin-small-right" alt="">
                    <p>
                        <span>Bonamin</span>
                        <span class="costruzioni">costruzioni <span class="uk-text-lowercase">s.r.l.</span></span>
                    </p>
                </a>
            </div>
            <div class="uk-navbar-right uk-visible@s">
                <ul class="uk-navbar-nav">
                    <li @if(request()->path() === 'chi-siamo') class="uk-active" @endif>
                        <a href="{{ route('chi-siamo') }}">
                            Chi siamo
                        </a>
                    </li>
                    <li @if(request()->path() === 'lavori') class="uk-active" @endif>
                        <a href="{{ route('lavori') }}">
                            I nostri lavori
                        </a>
                    </li>
                    <li @if(request()->path() === 'contatti') class="uk-active" @endif>
                        <a href="{{ route('contatti') }}">
                            Contatti
                        </a>
                    </li>
                </ul>
                <ul class="uk-iconnav">
                    <li><a href="https://www.facebook.com/BonaminCostruzioni" target="_blank" uk-icon="icon: facebook"></a></li>
                    <li><a href="https://www.instagram.com/bonamincostruzionisrl/" target="_blank" uk-icon="icon: instagram"></a></li>
                </ul>
            </div>

            <div class="uk-navbar-right uk-hidden@s">
                <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: body; cls: no-scroll"></a>
            </div>
        </nav>
    </div>
</div>
<div class="mobile-navigation uk-flex-middle uk-flex-center">
    <div>
        <ul class="uk-nav uk-text-center">
            <li class="uk-margin-bottom">
                <a class="uk-logo" href="/">
                    <img src="/images/logo.png" alt="">
                </a>
            </li>
            <li>
                <a href="{{ route('chi-siamo') }}">
                    Chi siamo
                </a>
            </li>
            <li>
                <a href="{{ route('lavori') }}">
                    I nostri lavori
                </a>
            </li>
            <li>
                <a href="{{ route('contatti') }}">
                    Contatti
                </a>
            </li>
        </ul>

        <ul class="uk-iconnav uk-flex-center uk-margin-large-top uk-margin-auto">
            <li class="uk-padding-remove">
                <a href="https://www.facebook.com/BonaminCostruzioni" target="_blank" uk-icon="icon: facebook; ratio: 2"></a>
            </li>
            <li><a href="https://www.instagram.com/bonamincostruzionisrl/" target="_blank" uk-icon="icon: instagram; ratio: 2"></a></li>
        </ul>
    </div>
    <div class="uk-position-top-right">
        <a uk-icon="icon: close; ratio: 2" uk-toggle="target: body; cls: no-scroll"></a>
    </div>
</div>
