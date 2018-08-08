@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $product->seo_title, 'description' => $product->seo_description, 'keywords' => $product->seo_keywords, 'spare' => $product->product_name])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/products" class="breadcrumbs__link link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">{{$product->superior_item->title}}</span></a>
            <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span class="breadcrumbs__current" itemprop="item"><span class="breadcrumbs__current-text" itemprop="name">{{$product->product_name}}</span></span>
            <meta itemprop="position" content="3" />
        </li>
    </ul>

    <div class="static-page">
        <h1 class="static-page__title">{{$product->product_name}}</h1>
        <div class="static-page__text text-block">{!! $product->text !!}</div>
    </div>
    @include('front.seo-text', ['seotext' => $product->seotext])
@endsection
