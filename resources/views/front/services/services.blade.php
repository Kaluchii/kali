@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">Услуги</span>
    </div>

    <div class="services">
        <h1 class="services__title">Услуги</h1>
        <h2 class="services__subtitle">Компания "Kali" предлагает следующий спектр услуг:</h2>
        <ul class="services__list icon-cards">
            <li class="icon-cards__item">
                <div class="icon-cards__item-container">
                    <div class="icon-cards__icon-wrap">
                        <img src="" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Окна, двери, витражи из ПВХ - профилей. (КНР, Турция, Германия)</p>
                </div>
            </li>
            <li class="icon-cards__item">
                <div class="icon-cards__item-container">
                    <div class="icon-cards__icon-wrap">
                        <img src="" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Однокамерные, двукамерные стеклопакеты</p>
                </div>
            </li>
            <li class="icon-cards__item">
                <div class="icon-cards__item-container">
                    <div class="icon-cards__icon-wrap">
                        <img src="" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Изготовление пластиковых окон</p>
                </div>
            </li>
            <li class="icon-cards__item">
                <div class="icon-cards__item-container">
                    <div class="icon-cards__icon-wrap">
                        <img src="" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Энергосберегающие стеклопакеты</p>
                </div>
            </li>
            <li class="icon-cards__item">
                <div class="icon-cards__item-container">
                    <div class="icon-cards__icon-wrap">
                        <img src="" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Изготовление изделий из алюминиевых профилей. (Беларусь)</p>
                </div>
            </li>
            <li class="icon-cards__item">
                <div class="icon-cards__item-container">
                    <div class="icon-cards__icon-wrap">
                        <img src="" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Стеклопакет с декоративной рассечкой</p>
                </div>
            </li>
        </ul>
    </div>
@endsection
