@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="slider">
        <div class="slider__list js_main_slick">
            <img src="/dev_img/slider_img.jpg" alt="" class="slider__img">
            <img src="/dev_img/slider_img.jpg" alt="" class="slider__img">
            <img src="/dev_img/slider_img.jpg" alt="" class="slider__img">
            <img src="/dev_img/slider_img.jpg" alt="" class="slider__img">
        </div>
        <div class="slider__info-wrap">
            <div class="slider__info">
                <h1 class="slider__title">Пластиковые окна Kali</h1>
                <ul class="slider__facts">
                    <li class="slider__fact">Единственный дистрибьютор заводского профиля CONCH</li>
                    <li class="slider__fact">Собственное производство полного цикла</li>
                    <li class="slider__fact">19 лет на рынке</li>
                </ul>
                <div class="slider__btn-wrap">
                    <a href="#call_back_form" class="slider__btn button button--sh-orange js_call_back">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>
@endsection
