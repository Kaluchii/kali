@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $sale->seo_title, 'description' => $sale->seo_description, 'keywords' => $sale->seo_keywords, 'spare' => $sale->title])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span class="breadcrumbs__current" itemprop="item"><span class="breadcrumbs__current-text" itemprop="name">{{$sale->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

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
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="sale__variant-img">
                </a>
            @endforeach
        </div>
    </div>
    @include('front.seo-text', ['seotext' => $sale->seotext])
@endsection
