@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $pay->seo_title, 'description' => $pay->seo_description, 'keywords' => $pay->seo_keywords, 'spare' => $pay->title])
    @include('front.rating', ['block_name' => 'pay', 'block_id' => 0, 'rating' => $rating])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/pay" itemprop="item" class="hide"><span itemprop="name">{{$pay->title}}</span></a>
            <span class="breadcrumbs__current"><span class="breadcrumbs__current-text">{{$pay->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="static-page">
        <h1 class="static-page__title">{{$pay->title}}</h1>
        <div class="static-page__text text-block">{!! $pay->text !!}</div>
    </div>
    @include('front.seo-text', ['seotext' => $pay->seotext])
@endsection
