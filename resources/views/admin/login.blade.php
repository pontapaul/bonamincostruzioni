@extends('layout.app')

@section('content')
    <div class="uk-section uk-container-small uk-margin-auto">
        <div class="uk-margin-large-top uk-child-width-1-2@m uk-flex-center" uk-grid>
            <form method="POST">
                @csrf

                <fieldset class="uk-fieldset">

                    <legend class="uk-legend">Login</legend>
                    @if (!$errors->isEmpty())
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>C'è stato un errore con l'autenticazione, controlla i dati.</p>
                    </div>
                    @endif

                    <div class="uk-margin">
                        <input class="uk-input" name="email" type="email" placeholder="Email" value="{{ old('email') }}"
                               required autofocus>
                    </div>

                    <div class="uk-margin">
                        <input class="uk-input" type="password" placeholder="Password" name="password" required>
                    </div>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label><input class="uk-checkbox" type="checkbox" name="remember"
                                      id="remember" {{ old('remember') ? 'checked' : '' }}> Ricordami</label>
                    </div>

                    <div class="uk-margin uk-text-right">
                        <button class="uk-button uk-button-primary" type="submit">Accedi</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@stop

