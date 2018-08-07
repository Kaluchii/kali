@section('seo-text')
    <div class="seo-text @if($seo_text == '<p><br></p>' || $seo_text == '') seo-text--empty @endif">
        <div class="seo-text__content text-block">{!! $seo_text !!}</div>
    </div>
@endsection