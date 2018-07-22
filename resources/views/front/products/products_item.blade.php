@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $product->seo_title, 'description' => $product->seo_description, 'keywords' => $product->seo_keywords, 'spare' => $product->product_name])
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <a href="/products" class="breadcrumbs__link link-black">{{$product->superior_item->title}}</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">{{$product->product_name}}</span>
    </div>

    <div class="static-page">
        <h1 class="static-page__title">{{$product->product_name}}</h1>
        <div class="static-page__text text-block">{!! $product->text !!}</div>
    </div>
    @include('front.seo-text', ['seo_text' => $product->seo_text])
@endsection
