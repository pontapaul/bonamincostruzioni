@extends('layout.app')

@section('content')
    <div class="uk-section uk-container-small uk-margin-auto">
        <div class="uk-margin-large-top">
            <h1>Amministrazione</h1>
            <h2>Lavori inseriti: </h2>
            @if (session()->get('success'))
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p>Lavoro salvato con successo.</p>
                </div>
            @endif

            @if($cases->isEmpty())
                <div class="uk-alert-primary" uk-alert>
                    <p>
                        Non sono presenti lavori svolti.
                        <a href="{{ route('edit.case') }}">Clicca qui per inserirne uno</a>
                    </p>
                </div>
            @else
                <p>
                    <a href="{{ route('edit.case') }}">Clicca qui per inserire un lavoro</a>
                </p>
                <table class="uk-table uk-table-divider">
                    <tr>
                        <th></th>
                        <th>Abilitato</th>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Immagini nella gallery</th>
                    </tr>
                    @foreach($cases as $case)
                        <tr>
                            <td>
                                <a onclick="return confirm('Sei sicuro di voler eliminare questo lavoro?')" href="{{ route('delete.case', $case->id) }}">
                                    <span uk-icon="icon: trash"></span>
                                </a>
                            </td>
                            <td><span uk-icon="icon: {{ $case->enabled ? 'check' : 'close' }}"></span></td>
                            <td><a href="{{ route('edit.case', $case->id) }}">{{ $case->name }}</a></td>
                            <td>{{ Str::limit($case->description) }}</td>
                            <td>{{ $case->getMedia('gallery')->count() }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
@stop

