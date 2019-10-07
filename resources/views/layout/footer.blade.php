<!-- footer -->
<div class="uk-section uk-section-secondary uk-light">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-3-4@m">
                <form action="{{ route('submit-form') }}" method="POST">
                    {{ csrf_field() }}
                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">Domande? Contattaci!</legend>

                        <div class="uk-margin" uk-grid>
                            <div class="uk-width-1-2"><input class="uk-input" type="text" name="name" placeholder="Nome" required></div>
                            <div class="uk-width-1-2"><input class="uk-input" type="text" name="surname" placeholder="Cognome" required></div>
                        </div>

                        <div class="uk-margin">
                            <input class="uk-input" type="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5" name="text" placeholder="Messaggio" required></textarea>
                        </div>

                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label>
                                <input class="uk-checkbox" name="privacy" type="checkbox" value="1" required>
                                Acconsento al <a href="#">trattamento della privacy</a>
                            </label>
                        </div>

                        <div class="uk-margin uk-text-right">
                            <button type="submit" class="uk-button uk-button-primary">Invia</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="uk-width-1-4@m">
                <ul class="uk-list uk-list-large uk-text-center">
                    <li>
                        <a class="uk-navbar-item uk-logo" href="/">
                            <img src="/images/logo.png" class="uk-margin-small-right" alt="">
                            <p class="uk-text-left">
                                <span>Bonamin</span>
                                <span class="costruzioni">costruzioni <span class="uk-text-lowercase">s.r.l.</span></span>
                            </p>
                        </a>
                    </li>
                    <li>Via Don Lorenzo Perosi, 28</li>
                    <li>36061 Bassano del Grappa (VI)</li>
                    <li>Telefono: <a href="tel:+0424568612">+39 0424 568612</a></li>
                    <li>Fax: +39 0424 568612</li>
                    <li>© {{ date('Y') }}, Bonamin Costruzioni s.r.l.</li>

                </ul>
            </div>
        </div>
    </div>
</div>
