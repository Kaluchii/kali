@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $about->seo_title, 'description' => $about->seo_description, 'keywords' => $about->seo_keywords, 'spare' => $about->title])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span class="breadcrumbs__current" itemprop="item"><span class="breadcrumbs__current-text" itemprop="name">{{$about->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="static-page">
        <h1 class="static-page__title">{{$about->title}}</h1>
        <div class="static-page__text text-block">{!! $about->text !!}</div>
    </div>
    @include('front.seo-text', ['seotext' => $about->seotext])
@endsection
