@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $category->seo_title, 'description' => $category->seo_description, 'keywords' => $category->seo_keywords, 'spare' => $category->category_name])
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <a href="/components" class="breadcrumbs__link link-black">{{$category->superior_item->title}}</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">{{$category->category_name}}</span>
    </div>

    <div class="components">
        <h1 class="components__title">{{$category->category_name}}</h1>
        <ul class="components__goods-list">
            @foreach($category->components_list_group as $item)
            <li class="components__goods-item product">
                <p class="product__name">{{$item->component_name}}</p>
                <a href="/components/{{$category->slug}}/{{$item->slug}}" class="product__img-wrap">
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="product__img">
                </a>
                <p class="product__article">Артикул: {{$item->article}}</p>
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
    @include('front.seo-text', ['seo_text' => $category->seo_text])
@endsection
