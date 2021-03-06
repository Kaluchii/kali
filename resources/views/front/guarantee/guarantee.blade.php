@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $guarantee->seo_title, 'description' => $guarantee->seo_description, 'keywords' => $guarantee->seo_keywords, 'spare' => $guarantee->title])
    @include('front.rating', ['block_name' => 'guarantee', 'block_id' => 0, 'rating' => $rating])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/guarantee" itemprop="item" class="hide"><span itemprop="name">{{$guarantee->title}}</span></a>
            <span class="breadcrumbs__current"><span class="breadcrumbs__current-text">{{$guarantee->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="guarantee-banner">
        <div class="guarantee-banner__container">
            <div class="guarantee-banner__text-wrapper">
                <p class="guarantee-banner__text">{{$guarantee->banner_text}}</p>
                <div class="guarantee-banner__link-wrap">
                    Скачать <a href="{{$guarantee->instruction->link}}" download="{{$guarantee->instruction->title}}" class="guarantee-banner__download link-blue">Инструкцию по&nbsp;эксплуатации</a><br>и <a href="{{$guarantee->guarantee->link}}" download="{{$guarantee->guarantee->title}}" class="guarantee-banner__download link-blue">Гарантийный талон >></a>
                </div>
            </div>
        </div>
    </div>

    <div class="guarantee">
        <div class="guarantee__text text-block">{!! $guarantee->text !!}</div>
        <div class="guarantee__factors">
            @foreach($guarantee->guarantee_facts_list_group as $item)
                <div class="guarantee__factor">
                    <div class="guarantee__factor-img-wrap">
                        <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="guarantee__factor-img">
                    </div>
                    <p class="guarantee__factor-text">{{$item->text}}</p>
                </div>
            @endforeach
        </div>
        <div class="guarantee__text text-block">{!! $guarantee->text2 !!}</div>
    </div>
    <div class="guarantee-grey">
        <div class="guarantee-grey__container">
            <p class="guarantee-grey__text">{!! $guarantee->reviews_title !!}</p>
            <div class="guarantee-grey__reviews reviews">
                <div class="reviews__slider-wrap">
                    <div class="reviews__slider js_reviews_slick">
                        @foreach($guarantee->reviews_list_group as $item)
                            <div class="reviews__item">
                                <p class="reviews__name">{{$item->reviewer_name}}</p>
                                <p class="reviews__city">{{$item->city}}</p>
                                <p class="reviews__text">{!! $item->text !!}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('front.seo-text', ['seotext' => $guarantee->seotext])
@endsection
