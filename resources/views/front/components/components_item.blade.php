@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $component->seo_title, 'description' => $component->seo_description, 'keywords' => $component->seo_keywords, 'spare' => $component->component_name])
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <a href="/components" class="breadcrumbs__link link-black">{{$component->superior_item->superior_item->title}}</a>
        <span class="breadcrumbs__separator"></span>
        <a href="/components/{{$component->superior_item->slug}}" class="breadcrumbs__link link-black">{{$component->superior_item->category_name}}</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">{{$component->component_name}}</span>
    </div>

    <div class="components">
        <h1 class="components__title">{{$component->component_name}}</h1>
        <div class="components__text text-block">{!! $component->text !!}</div>
    </div>
@include('front.seo-text', ['seo_text' => $component->seo_text])
@endsection
