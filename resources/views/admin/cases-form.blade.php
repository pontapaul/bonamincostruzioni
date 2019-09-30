@extends('layout.app')

@section('content')
    <div class="uk-section uk-container-small uk-margin-auto">
        <div class="uk-margin-large-top">
            <h1 class="uk-text-center">Aggiungi/modifica lavoro</h1>
        </div>
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-3-4@m">
                <a class="uk-button uk-button-link" href="{{ route('dashboard') }}">
                    <span uk-icon="chevron-left"></span> Indietro
                </a>
            </div>
            <form class="uk-width-3-4@m" enctype="multipart/form-data" method="post">
                @csrf
                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                    <label>
                        <input class="uk-checkbox" type="checkbox"
                               name="enabled" {{ old('enabled', $model->enabled) ? 'checked' : '' }}>
                        Abilitato
                    </label>
                </div>

                <fieldset class="uk-fieldset">
                    <div class="uk-margin">
                        <input class="uk-input" type="text" placeholder="Nome" name="name"
                               value="{{old('name', $model->name)}}"
                               required>
                    </div>

                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" placeholder="Descrizione" name="description">{{old('description', $model->description)}}</textarea>
                    </div>

                    <div class="uk-margin">
{{--                        @if($model->exists)--}}
{{--                            <div>--}}
{{--                                <img src="{{ $model->getMedia('thumbnail')->first()->getFullUrl() }}" width="300">--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <div uk-form-custom="target:true">
                            <input type="file" name="thumbnail" required>
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Immagine" disabled>
                            <button class="uk-button uk-button-default" type="button">Scegli</button>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div uk-form-custom="target:true">
                            <input type="file" multiple name="gallery[]">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Galleria" disabled>
                            <button class="uk-button uk-button-default" type="button">Scegli</button>
                        </div>
                    </div>

                    <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                        <label>
                            <input class="uk-checkbox" type="checkbox"
                                   name="homepage" {{ old('homepage', $model->homepage) ? 'checked' : '' }}>
                            Visualizza in homepage
                        </label>
                    </div>

                    <div class="uk-margin uk-text-right">
                        <button type="submit" class="uk-button uk-button-primary">Invia</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@stop

