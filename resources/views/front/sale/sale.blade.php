@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $sale->seo_title, 'description' => $sale->seo_description, 'keywords' => $sale->seo_keywords, 'spare' => $sale->title])
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">{{$sale->title}}</span>
    </div>

    <div class="sale-banner">
        <div class="sale-banner__container">
            <div class="sale-banner__text-wrapper">
                <p class="sale-banner__title">{{$sale->title}}</p>
                <p class="sale-banner__text">{!! $sale->sub_title !!}</p>
                <div class="sale-banner__btn-wrap">
                    <a href="#call_back_form" class="sale-banner__btn button button--sh-orange js_call_back">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sale">
        <div class="sale__text text-block">{!! $sale->text !!}</div>
        <div class="sale__variants">
            @foreach($sale->sale_list_group as $item)
                <a href="{{$item->img->link}}?{{$item->img->cache_index}}" data-fancybox="gallery" class="sale__variant">
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="sale__variant-img">
                </a>
            @endforeach
        </div>
    </div>
    @include('front.seo-text', ['seo_text' => $sale->seo_text])
@endsection
