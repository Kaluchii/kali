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
            <h3 class="examples__title">{{$main_windows_price->title}}</h3>
            <div class="examples__types js_windows_types">
                @php $isFirst = true @endphp
                @foreach($main_windows_price->main_windows_types_group as $item)
                <label class="examples__type js_windows_type" data-id="{{$item->id}}">
                    <input type="radio" @if($isFirst)checked @endif @php $isFirst = false @endphp name="windows" class="examples__type-input">
                    <span class="examples__text examples__text--type">{{$item->type_name}}</span>
                </label>
                @endforeach
            </div>
            <ul class="examples__list js_windows_list">
                @php $isFirst = true @endphp
                @foreach($main_windows_price->main_windows_types_group as $type)
                    @foreach($type->main_windows_price_list_group as $item)
                    <li class="examples__item js_window" data-parent-id="{{$type->id}}" @if(!$isFirst)style="display:none" @endif>
                        <div class="examples__img-wrap">
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="examples__img">
                        </div>
                        <div class="examples__price">{{number_format($item->price, 0, '', ' ')}} <span class="tenge">d</span>/окно</div>
                        <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">{{number_format($item->full_price, 0, '', ' ')}} <span class="tenge">d</span></span></p>
                    </li>
                    @endforeach
                    @php $isFirst = false @endphp
                @endforeach
            </ul>
        </div>

        <div class="main__examples examples">
            <h3 class="examples__title">{{$main_balcony_price->title}}</h3>
            <div class="examples__categories">
                @php $isFirst = true @endphp
                @foreach($main_balcony_price->main_balcony_categories_group as $item)
                    <label class="examples__category js_balcony_category" data-id="{{$item->id}}">
                        <input type="radio" @if($isFirst)checked @endif @php $isFirst = false @endphp name="balcony_cat" class="examples__category-input">
                        <span class="examples__text">{{$item->category_name}}</span>
                    </label>
                @endforeach
            </div>
            <div class="examples__types js_balcony_types">
                @php $isFirstElement = true;
                     $isFirstType = true;
                @endphp
                @foreach($main_balcony_price->main_balcony_categories_group as $category)
                    @foreach($category->main_balcony_types_group as $item)
                    <label class="examples__type js_balcony_type" data-id="{{$item->id}}" data-parent-id="{{$category->id}}" @if(!$isFirstType)style="display:none" @endif>
                        <input type="radio" @if($isFirstElement)checked @endif @php $isFirstElement = false @endphp name="balcony" class="examples__type-input">
                        <span class="examples__text examples__text--type">{{$item->type_name}}</span>
                    </label>
                    @endforeach
                    @php $isFirstType = false @endphp
                @endforeach
            </div>
            <ul class="examples__list">
                @php $isFirst = true @endphp
                @foreach($main_balcony_price->main_balcony_categories_group as $category)
                @foreach($category->main_balcony_types_group as $type)
                @foreach($type->main_balcony_list_group as $item)
                <li class="examples__item js_balcony" data-parent-id="{{$type->id}}" @if(!$isFirst)style="display:none" @endif>
                    <div class="examples__img-wrap">
                        <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="examples__img">
                    </div>
                    <div class="examples__price">{{number_format($item->price, 0, '', ' ')}} <span class="tenge">d</span>/балкон</div>
                    <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">{{number_format($item->full_price, 0, '', ' ')}} <span class="tenge">d</span></span></p>
                </li>
                @endforeach
                @php $isFirst = false @endphp
                @endforeach
                @endforeach
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
