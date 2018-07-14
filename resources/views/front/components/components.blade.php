@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">Комплектующие</span>
    </div>

    <div class="components">
        <h1 class="components__title">Комплектующие</h1>
        <h2 class="components__subtitle">Компания “Kali” предлагает следующий спектр комплектующих для окон:</h2>
        <ul class="components__list icon-cards">
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap icon-cards__icon-wrap--none"></div>
                    <p class="icon-cards__text">Профиль CONCH 60-70</p>
                </a>
            </li>
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap icon-cards__icon-wrap--none"></div>
                    <p class="icon-cards__text">Фурнитура и комплектующие</p>
                </a>
            </li>
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap icon-cards__icon-wrap--none"></div>
                    <p class="icon-cards__text">Сложная фурнитура Турция</p>
                </a>
            </li>
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap icon-cards__icon-wrap--none"></div>
                    <p class="icon-cards__text">Подоконники</p>
                </a>
            </li>
        </ul>
    </div>
@endsection
