@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $services->seo_title, 'description' => $services->seo_description, 'keywords' => $services->seo_keywords, 'spare' => $services->title])
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">{{$services->title}}</span>
    </div>

    <div class="services">
        <h1 class="services__title">{{$services->title}}</h1>
        <h2 class="services__subtitle">{{$services->sub_title}}</h2>
        <ul class="services__list icon-cards">
            @foreach($services->services_list_group as $item)
                <li class="icon-cards__item">
                    <div class="icon-cards__item-container">
                        <div class="icon-cards__icon-wrap">
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="icon-cards__icon">
                        </div>
                        <p class="icon-cards__text">{{$item->text}}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    @include('front.seo-text', ['seo_text' => $services->seo_text])
@endsection
