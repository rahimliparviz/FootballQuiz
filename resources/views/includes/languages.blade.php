<div id="lang-menu" class="lang-menu">
<div><span>{{strtoupper(config('app.locale'))}}</span></div>
    <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if(strtoupper(config('app.locale')) !=   $properties['name'] )
            <li>
                <a rel="alternate" class="locale" data-locale="{{ $localeCode }}" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['name'] }}
                </a>
            </li>
            @endif
        @endforeach
    </ul>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
<script>
    $('.locale').click(function(){
    document.cookie = `locale=${$(this).data('locale')}`;
    })
</script>
<!-- language bar END -->