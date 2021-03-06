@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $products->seo_title, 'description' => $products->seo_description, 'keywords' => $products->seo_keywords, 'spare' => $products->title])
    @include('front.rating', ['block_name' => 'products', 'block_id' => 0, 'rating' => $rating])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/products" itemprop="item" class="hide"><span itemprop="name">{{$products->title}}</span></a>
            <span class="breadcrumbs__current"><span class="breadcrumbs__current-text">{{$products->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="production-banner production-banner--plast">
        <div class="production-banner__container">
            <div class="production-banner__content-wrapper">
                <p class="production-banner__text">{{$products->banner_1_title}}</p>
                <div class="production-banner__firm-list production-banner__firm-list--plast">
                    @foreach($products->firms_list_1_group as $item)
                    <div class="production-banner__firm-item">
                        <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="production-banner__firm-logo">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="production">
        <ul class="production__list">
            @foreach($products->products_list_1_group as $item)
            <li class="production__item big-card">
                <div class="big-card__img" style="background-image: url('{{$item->img->link}}?{{$item->img->cache_index}}');"></div>
                <div class="big-card__text-wrap">
                    <h3 class="big-card__title">{{$item->product_name}}</h3>
                    <p class="big-card__preview-description">{!! $item->preview_text !!}</p>
                    <div class="big-card__btns-wrap">
                        <div class="big-card__btn-wrap">
                            <a href="#call_back_form" class="big-card__btn button button--blue js_call_back">Заказать замер</a>
                        </div>
                        <div class="big-card__btn-wrap">
                            <a href="/products/{{$item->slug}}" class="big-card__btn button button--blue-border">Подробнее</a>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="production-banner production-banner--alu">
        <div class="production-banner__container">
            <div class="production-banner__content-wrapper">
                <p class="production-banner__text">{{$products->banner_2_title}}</p>
                <div class="production-banner__firm-list">
                    @foreach($products->firms_list_2_group as $item)
                        <div class="production-banner__firm-item">
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="production-banner__firm-logo">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="production">
        <ul class="production__list">
            @foreach($products->products_list_2_group as $item)
                <li class="production__item big-card">
                    <div class="big-card__img" style="background-image: url('{{$item->img->link}}?{{$item->img->cache_index}}');"></div>
                    <div class="big-card__text-wrap">
                        <h3 class="big-card__title">{{$item->product_name}}</h3>
                        <p class="big-card__preview-description">{!! $item->preview_text !!}</p>
                        <div class="big-card__btns-wrap">
                            <div class="big-card__btn-wrap">
                                <a href="#call_back_form" class="big-card__btn button button--blue js_call_back">Заказать замер</a>
                            </div>
                            <div class="big-card__btn-wrap">
                                <a href="/products/{{$item->slug}}" class="big-card__btn button button--blue-border">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <p class="production__other">Другая продукция</p>
        <ul class="production__other-list icon-cards">
            @foreach($products->other_products_list_group as $item)
                <li class="icon-cards__item">
                    <a href="/products/{{$item->slug}}" class="icon-cards__item-container icon-cards__item-container--link">
                        <div class="icon-cards__icon-wrap">
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="icon-cards__icon">
                        </div>
                        <p class="icon-cards__text">{{$item->product_name}}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @include('front.seo-text', ['seotext' => $products->seotext])
@endsection
