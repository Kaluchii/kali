@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $category->seo_title, 'description' => $category->seo_description, 'keywords' => $category->seo_keywords, 'spare' => $category->category_name])
    @include('front.rating', ['block_name' => 'components_category', 'block_id' => $category->id, 'rating' => $rating])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/components" class="breadcrumbs__link link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">{{$category->superior_item->title}}</span></a>
            <meta itemprop="position" content="2" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/components/{{$category->slug}}" itemprop="item" class="hide"><span itemprop="name">{{$category->category_name}}</span></a>
            <span class="breadcrumbs__current"><span class="breadcrumbs__current-text">{{$category->category_name}}</span></span>
            <meta itemprop="position" content="3" />
        </li>
    </ul>

    <div class="components">
        <h1 class="components__title">{{$category->category_name}}</h1>
        <ul class="components__goods-list">
            @foreach($category->components_list_group as $item)
            <li class="components__goods-item product">
                <p class="product__name">{{$item->component_name}}</p>
                <a href="/components/{{$category->slug}}/{{$item->slug}}" class="product__img-wrap">
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="product__img">
                </a>
                @if($item->article)
                    <p class="product__article">Артикул: {{$item->article}}</p>
                @endif
                <div class="product__bottom">
                    <p class="product__price">{{number_format($item->price, 0, '', ' ')}} тг</p>
                    <div class="product__btn-wrap">
                        <a href="/components/{{$category->slug}}/{{$item->slug}}" class="product__btn button button--blue-border">Подробнее</a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    @include('front.seo-text', ['seotext' => $category->seotext])
@endsection
