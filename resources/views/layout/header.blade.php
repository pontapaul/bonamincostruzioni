<!-- Header -->
<div uk-sticky="top: #homepage-cover; cls-active: uk-navbar-sticky;" show-on-up animation="uk-animation-slide-top" cls-inactive="uk-light uk-navbar-transparent" sel-target=".uk-navbar-container">
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
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li>
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
</div>
