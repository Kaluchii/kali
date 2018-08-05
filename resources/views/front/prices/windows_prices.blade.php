@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $prices->seo_title, 'description' => $prices->seo_description, 'keywords' => $prices->seo_keywords, 'spare' => $prices->title])
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">{{$prices->title}}</span>
    </div>

    <div class="prices">
        <h1 class="prices__title">{{$prices->title}}</h1>
        <p class="prices__subtitle">{{$prices->sub_title}}</p>
        <div class="prices__categories">
            @foreach($prices->windows_price_categories_group as $category)
                @foreach($category->windows_price_list_group as $item)
                    <div class="prices__variant">
                        <a href="{{$item->img->link}}?{{$item->img->cache_index}}" class="prices__img-wrap" data-fancybox>
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="prices__img">
                        </a>
                        <div class="prices__text-wrap text-block">{!! $item->text !!}</div>
                    </div>
                @endforeach
            @endforeach
        </div>
        <div class="prices__text text-block"></div>
    </div>
    @include('front.seo-text', ['seo_text' => $prices->seo_text])
@endsection
