@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $components->seo_title, 'description' => $components->seo_description, 'keywords' => $components->seo_keywords, 'spare' => $components->title])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span class="breadcrumbs__current" itemprop="item"><span class="breadcrumbs__current-text" itemprop="name">{{$components->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="components">
        <h1 class="components__title">{{$components->title}}</h1>
        <h2 class="components__subtitle">{{$components->sub_title}}</h2>
        <ul class="components__list icon-cards">
            @foreach($components->components_categories_group as $item)
                <li class="icon-cards__item">
                    <a href="components/{{$item->slug}}" class="icon-cards__item-container icon-cards__item-container--link">
                        <div class="icon-cards__icon-wrap icon-cards__icon-wrap--none"></div>
                        <p class="icon-cards__text">{{$item->category_name}}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @include('front.seo-text', ['seotext' => $components->seotext])
@endsection
