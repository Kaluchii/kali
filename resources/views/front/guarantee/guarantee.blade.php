@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">Гарантии</span>
    </div>

    <div class="guarantee-banner">
        <div class="guarantee-banner__container">
            <div class="guarantee-banner__text-wrapper">
                <p class="guarantee-banner__text">Гарантия на окна - весомое доказательство их&nbsp;качественности</p>
                <div class="guarantee-banner__link-wrap">
                    <a href="#" class="guarantee-banner__download link-blue">Скачать Инструкцию по&nbsp;эксплуатации<br>и Гарантийный талон >></a>
                </div>
            </div>
        </div>
    </div>

    <div class="guarantee">
        <div class="guarantee__text text-block"></div>
        <div class="guarantee__hr"></div>
        <div class="guarantee__text text-block"></div>
        <div class="guarantee__factors">
            <div class="guarantee__factor">
                <div class="guarantee__factor-img-wrap">
                    <img src="" alt="" class="guarantee__factor-img">
                </div>
                <p class="guarantee__factor-text">Качество продукции</p>
            </div>
            <div class="guarantee__factor">
                <div class="guarantee__factor-img-wrap">
                    <img src="" alt="" class="guarantee__factor-img">
                </div>
                <p class="guarantee__factor-text">Материал изготовления</p>
            </div>
            <div class="guarantee__factor">
                <div class="guarantee__factor-img-wrap">
                    <img src="" alt="" class="guarantee__factor-img">
                </div>
                <p class="guarantee__factor-text">Рекомендации к установке и эксплуатации</p>
            </div>
            <div class="guarantee__factor">
                <div class="guarantee__factor-img-wrap">
                    <img src="" alt="" class="guarantee__factor-img">
                </div>
                <p class="guarantee__factor-text">Гарантии на пластиковые окна и их сроки</p>
            </div>
        </div>
        <div class="guarantee__hr"></div>
        <div class="guarantee__text text-block"></div>
        <div class="guarantee__reviews">...</div>
    </div>
@endsection
