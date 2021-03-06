@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $services->seo_title, 'description' => $services->seo_description, 'keywords' => $services->seo_keywords, 'spare' => $services->title])
    @include('front.rating', ['block_name' => 'services', 'block_id' => 0, 'rating' => $rating])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/services" itemprop="item" class="hide"><span itemprop="name">{{$services->title}}</span></a>
            <span class="breadcrumbs__current"><span class="breadcrumbs__current-text">{{$services->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="services">
        <h1 class="services__title">{{$services->title}}</h1>
        <h2 class="services__subtitle">{{$services->sub_title}}</h2>
        <ul class="services__list icon-cards">
            @foreach($services->services_list_group as $item)
                <li class="icon-cards__item">
                    <div class="icon-cards__item-container">
                        <div class="icon-cards__icon-wrap">
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="icon-cards__icon">
                        </div>
                        <p class="icon-cards__text">{{$item->text}}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    @include('front.seo-text', ['seotext' => $services->seotext])
@endsection
