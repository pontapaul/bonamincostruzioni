<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@m uk-margin" uk-grid
     uk-lightbox="animation: slide">
    <div class="{{ $index % 2 ? 'uk-flex-last@s uk-card-media-right' : 'uk-card-media-left' }} uk-cover-container">
        <img src="{{ $item->getMedia('thumbnail')->first()->getFullUrl() }}" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>

        @if($item->getMedia('gallery')->count())
            <a href="{{ $item->getMedia('gallery')->first()->getFullUrl()}}" class="link-cover uk-light">
                <div class="uk-position-center uk-text-large uk-text-uppercase uk-text-center">
                    <span class="uk-margin-small-right" uk-icon="plus"></span> <br>
                    Apri la <br> gallery
                </div>
            </a>
        @endif
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">{{ $item->name }}</h3>
            <p>{{ $item->description }}</p>
        </div>
    </div>

    @foreach($item->getMedia('gallery')->splice(1) as $media)
        <div class="uk-hidden">
            <a class="uk-inline" href="{{ $media->getFullUrl() }}" data-caption="{{ $item->name }}"></a>
        </div>
    @endforeach
</div>
