@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $component->seo_title, 'description' => $component->seo_description, 'keywords' => $component->seo_keywords, 'spare' => $component->component_name])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/components" class="breadcrumbs__link link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">{{$component->superior_item->superior_item->title}}</span></a>
            <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/components/{{$component->superior_item->slug}}" class="breadcrumbs__link link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">{{$component->superior_item->category_name}}</span></a>
            <meta itemprop="position" content="3" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span class="breadcrumbs__current" itemprop="item"><span class="breadcrumbs__current-text" itemprop="name">{{$component->component_name}}</span></span>
            <meta itemprop="position" content="4" />
        </li>
    </ul>

    <div class="components">
        <h1 class="components__title">{{$component->component_name}}</h1>
        <div class="components__text text-block">{!! $component->text !!}</div>
    </div>
@include('front.seo-text', ['seotext' => $component->seotext])
@endsection
