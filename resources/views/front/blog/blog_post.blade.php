@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $post->seo_title, 'description' => $post->seo_description, 'keywords' => $post->seo_keywords, 'spare' => $post->title])
    @include('front.rating', ['block_name' => 'about', 'block_id' => 0, 'rating' => $rating])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/blog" class="breadcrumbs__link link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">{{$post->superior_item->title}}</span></a>
            <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/about" itemprop="item" class="hide"><span itemprop="name">{{$post->post_name}}</span></a>
            <span class="breadcrumbs__current"><span class="breadcrumbs__current-text">{{$post->post_name}}</span></span>
            <meta itemprop="position" content="3" />
        </li>
    </ul>

    <div class="static-page">
        <div class="static-page__img-wrap">
            <img src="{{$post->img->link}}?{{$post->img->cache_index}}" alt="{{$post->img->alt}}" class="static-page__img">
        </div>
        <h1 class="static-page__title">{{$post->post_name}}</h1>
        <div class="static-page__text text-block">{!! $post->text !!}</div>
    </div>
    @include('front.seo-text', ['seotext' => $post->seotext])
@endsection
