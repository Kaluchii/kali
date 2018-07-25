@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $about->seo_title, 'description' => $about->seo_description, 'keywords' => $about->seo_keywords, 'spare' => $about->title])
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">{{$about->title}}</span>
    </div>

    <div class="static-page">
        <h1 class="static-page__title">{{$about->title}}</h1>
        <div class="static-page__text text-block">{!! $about->text !!}</div>
    </div>
    @include('front.seo-text', ['seo_text' => $about->seo_text])
@endsection
