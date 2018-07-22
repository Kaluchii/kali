@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $components->seo_title, 'description' => $components->seo_description, 'keywords' => $components->seo_keywords, 'spare' => $components->title])
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">{{$components->title}}</span>
    </div>

    <div class="components">
        <h1 class="components__title">{{$components->title}}</h1>
        <h2 class="components__subtitle">{{$components->sub_title}}</h2>
        <ul class="components__list icon-cards">
            @foreach($components->components_categories_group as $item)
                <li class="icon-cards__item">
                    <a href="components/{{$item->slug}}" class="icon-cards__item-container icon-cards__item-container--link">
                        <div class="icon-cards__icon-wrap icon-cards__icon-wrap--none"></div>
                        <p class="icon-cards__text">{{$item->category_name}}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @include('front.seo-text', ['seo_text' => $components->seo_text])
@endsection
