@extends('front.layout')
@section('content')
    @include('front.index.about-windows', ['text' => $main_dop_text->text])
    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords, 'spare' => 'Изготовление пластиковых окон, дверей и витражей'])
    <div class="slider">
        <div class="slider__list js_main_slick">
            @foreach($slider->slides_group as $item)
                <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="slider__img">
            @endforeach
        </div>
        <div class="slider__info-wrap">
            <div class="slider__info">
                <h1 class="slider__title">{{$slider->title}}</h1>
                <ul class="slider__facts">
                @foreach($slider->slider_facts_group as $item)
                    <li class="slider__fact">{{$item->text}}</li>
                @endforeach
                </ul>
                <div class="slider__btn-wrap">
                    <a href="#call_back_form" class="slider__btn button button--sh-orange js_call_back">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="main__title-text text-block"></div>
        <ul class="main__facts-list">
            @foreach($facts->facts_list_group as $item)
            <li class="main__facts-item">
                <div class="main__fact-item-container">
                    <div class="main__fact-img-wrap">
                        <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="main__fact-img">
                    </div>
                    <p class="main__fact-text">{{$item->text}}</p>
                </div>
            </li>
            @endforeach
        </ul>
        <ul class="main__profile-list">
            @foreach($examples->examples_list_group as $item)
            <li class="main__profile-item">
                <div class="main__profile-img-wrap">
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="main__profile-img">
                </div>
                <p class="main__profile-name">{!! $item->text !!}</p>
                <p class="main__profile-price">от {{number_format($item->price, 0, '', ' ')}} <span class="tenge">d</span>/м²</p>
            </li>
            @endforeach
        </ul>
        <div class="main__examples examples">
            <h3 class="examples__title">Цены на пластиковые окна</h3>
            <div class="examples__types">
                <label class="examples__type">
                    <input type="radio" checked name="windows" class="examples__type-input">
                    <span class="examples__text examples__text--type">CONCH 60 3-ех камерный</span>
                </label>
                <label class="examples__type">
                    <input type="radio" name="windows" class="examples__type-input">
                    <span class="examples__text examples__text--type">CONCH 60 4-ех камерный</span>
                </label>
                <label class="examples__type">
                    <input type="radio" name="windows" class="examples__type-input">
                    <span class="examples__text examples__text--type">CONCH 70 5-ти камерный</span>
                </label>
                <label class="examples__type">
                    <input type="radio" name="windows" class="examples__type-input">
                    <span class="examples__text examples__text--type">Veratec</span>
                </label>
                <label class="examples__type">
                    <input type="radio" name="windows" class="examples__type-input">
                    <span class="examples__text examples__text--type">WDS</span>
                </label>
            </div>
            <ul class="examples__list">
                <li class="examples__item">
                    <div class="examples__img-wrap">
                        <img src="/dev_img/example_window_1.png" alt="" class="examples__img">
                    </div>
                    <div class="examples__price">33 925 <span class="tenge">d</span>/окно</div>
                    <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">67 850 <span class="tenge">d</span></span></p>
                </li>
                <li class="examples__item">
                    <div class="examples__img-wrap">
                        <img src="/dev_img/example_window_2.png" alt="" class="examples__img">
                    </div>
                    <div class="examples__price">33 925 <span class="tenge">d</span>/окно</div>
                    <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">67 850 <span class="tenge">d</span></span></p>
                </li>
                <li class="examples__item">
                    <div class="examples__img-wrap">
                        <img src="/dev_img/example_window_3.png" alt="" class="examples__img">
                    </div>
                    <div class="examples__price">33 925 <span class="tenge">d</span>/окно</div>
                    <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">67 850 <span class="tenge">d</span></span></p>
                </li>
                <li class="examples__item">
                    <div class="examples__img-wrap">
                        <img src="/dev_img/example_window_4.png" alt="" class="examples__img">
                    </div>
                    <div class="examples__price">33 925 <span class="tenge">d</span>/окно</div>
                    <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">67 850 <span class="tenge">d</span></span></p>
                </li>
            </ul>
        </div>
        <div class="main__examples examples">
            <h3 class="examples__title">Цены на балконы</h3>
            <div class="examples__categories">
                <label class="examples__category">
                    <input type="radio" checked name="balcony_cat" class="examples__category-input">
                    <span class="examples__text">Г - Образные балконы</span>
                </label>
                <label class="examples__category">
                    <input type="radio" name="balcony_cat" class="examples__category-input">
                    <span class="examples__text">П - Образные балконы</span>
                </label>
            </div>
            <div class="examples__types">
                <label class="examples__type">
                    <input type="radio" checked name="balcony" class="examples__type-input">
                    <span class="examples__text examples__text--type">CONCH трехкамерный 60 серия</span>
                </label>
                <label class="examples__type">
                    <input type="radio" name="balcony" class="examples__type-input">
                    <span class="examples__text examples__text--type">Veratec трехкамерный</span>
                </label>
                <label class="examples__type">
                    <input type="radio" name="balcony" class="examples__type-input">
                    <span class="examples__text examples__text--type">ARtec трехкамерный</span>
                </label>
            </div>
            <ul class="examples__list">
                <li class="examples__item">
                    <div class="examples__img-wrap">
                        <img src="/dev_img/example_window_5.png" alt="" class="examples__img">
                    </div>
                    <div class="examples__price">85 925 <span class="tenge">d</span>/балкон</div>
                    <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">111 350 <span class="tenge">d</span></span></p>
                </li>
                <li class="examples__item">
                    <div class="examples__img-wrap">
                        <img src="/dev_img/example_window_6.png" alt="" class="examples__img">
                    </div>
                    <div class="examples__price">87 925 <span class="tenge">d</span>/балкон</div>
                    <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">167 850 <span class="tenge">d</span></span></p>
                </li>
            </ul>
        </div>
    </div>

    <div class="advantages">
        <div class="advantages__container">
            <h2 class="advantages__title">{{$advantages->title}}</h2>
            <p class="advantages__subtitle">{{$advantages->sub_title}}</p>
            <ul class="advantages__list">
                @foreach($advantages->advantages_list_group as $item)
                <li class="advantages__item">
                    <div class="advantages__item-img-wrap">
                        <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="advantages__item-img">
                    </div>
                    <div class="advantages__item-text-wrap">
                        <p class="advantages__item-name">{{$item->advantage_title}}</p>
                        <p class="advantages__item-text">{{$item->text}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @include('front.seo-text', ['seo_text' => $slider->seo_text])
@endsection
