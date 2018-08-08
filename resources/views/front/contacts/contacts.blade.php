@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $contacts->seo_title, 'description' => $contacts->seo_description, 'keywords' => $contacts->seo_keywords, 'spare' => $contacts->title])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span class="breadcrumbs__current" itemprop="item"><span class="breadcrumbs__current-text" itemprop="name">{{$contacts->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="contacts">
        <h1 class="contacts__title">{{$contacts->title}}</h1>
        <h2 class="contacts__subtitle">{{$contacts->sub_title}}</h2>
        <div class="contacts__place-list">
            @php $i = 0 @endphp
            @foreach($contacts->contacts_list_group as $item)
                <div class="contacts__place-item" itemscope itemtype="http://schema.org/Organization">
                    <div class="contacts__place-info">
                        <p class="contacts__place-title" itemprop="name">{{$item->place_name}}</p>
                        <div class="contacts__cols-wrap">
                            <div class="contacts__col-1">
                                <div class="contacts__info-item contacts__info-item--loc" itemprop="address">{{$item->address}}</div>
                                <div class="contacts__info-item contacts__info-item--phone" itemprop="telephone">Телефоны: {{$item->phones}}</div>
                                <div class="contacts__info-item contacts__info-item--fax" itemprop="faxNumber">Факс: {{$item->fax}}</div>
                                <div class="contacts__info-item contacts__info-item--mob" itemprop="telephone">Моб: {{$item->mob}}</div>
                                <div class="contacts__info-item contacts__info-item--email" itemprop="email">Email: {{$item->email}}</div>
                            </div>
                            <div class="contacts__col-2">
                                <div class="contacts__info-item contacts__info-item--work-time">График работы:
                                    <span class="contacts__info-work-time">{!! $item->work_time !!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contacts__place-map js_map" id="contact_map_{{++$i}}" data-latitude="{{$item->latitude}}" data-longitude="{{$item->longitude}}"></div>
                </div>
            @endforeach
        </div>
    </div>
    @include('front.seo-text', ['seotext' => $contacts->seotext])
@endsection
