@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">Распродажа</span>
    </div>

    <div class="sale-banner">
        <div class="sale-banner__container">
            <div class="sale-banner__text-wrapper">
                <p class="sale-banner__title">Распродажа</p>
                <p class="sale-banner__text">Выберите готовый пакет -<br>и сэкономьте до <span class="sale-banner__percents">50 %</span></p>
                <div class="sale-banner__btn-wrap">
                    <a href="#" class="sale-banner__btn button button--sh-orange">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sale">
        <div class="sale__text text-block"></div>
        <div class="sale__variants">
            <div class="sale__variant">
                <img src="" alt="" class="sale__variant-img">
            </div>
            <div class="sale__variant">
                <img src="" alt="" class="sale__variant-img">
            </div>
            <div class="sale__variant">
                <img src="" alt="" class="sale__variant-img">
            </div>
            <div class="sale__variant">
                <img src="" alt="" class="sale__variant-img">
            </div>
        </div>
    </div>
@endsection
