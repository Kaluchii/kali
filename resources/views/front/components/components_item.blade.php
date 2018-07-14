@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <a href="/components" class="breadcrumbs__link link-black">Комплектующие</a>
        <span class="breadcrumbs__separator"></span>
        <a href="#" class="breadcrumbs__link link-black">Профиль CONCH 60-70</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">Профиль стойкий AYPC.110.0302</span>
    </div>

    <div class="components">
        <h1 class="components__title">Профиль стойкий AYPC.110.0302</h1>
    </div>
@endsection
