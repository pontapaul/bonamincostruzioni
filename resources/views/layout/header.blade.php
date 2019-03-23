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
                    <li>
                        <a href="#">
                            I nostri lavori
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Contatti
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
