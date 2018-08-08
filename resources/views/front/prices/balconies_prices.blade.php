@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $prices->seo_title, 'description' => $prices->seo_description, 'keywords' => $prices->seo_keywords, 'spare' => $prices->title])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span class="breadcrumbs__current" itemprop="item"><span class="breadcrumbs__current-text" itemprop="name">{{$prices->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="prices">
        <h1 class="prices__title">{{$prices->title}}</h1>
        <p class="prices__subtitle">{{$prices->sub_title}}</p>
        <div class="prices__categories">
            @foreach($prices->balcony_price_categories_group as $category)
                <p class="prices__categories-title">{{$category->category_name}}</p>
                @foreach($category->balcony_price_list_group as $item)
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
    @include('front.seo-text', ['seotext' => $prices->seotext])
@endsection
