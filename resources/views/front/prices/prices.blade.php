@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">Цены на балконы</span>
    </div>

    <div class="prices">
        <h1 class="prices__title">Цены на балконы</h1>
        <p class="prices__subtitle">Цены указаны только за пластиковые изделия (Без М/С, подоконников, отливов, монтажа и доставки).</p>
        <div class="prices__categories">
            <p class="prices__categories-title">Г - Образные балконы</p>
            <div class="prices__variant">
                <div class="prices__img-wrap">
                    <img src="" alt="" class="prices__img">
                </div>
                <div class="prices__text-wrap">
                    .prices__row.prices__row--title
                </div>
            </div>
        </div>
        <div class="prices__text text-block"></div>
    </div>
@endsection
