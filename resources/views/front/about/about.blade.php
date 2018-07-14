@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">Контакты</span>
    </div>

    <div class="contacts">
        <h1 class="contacts__title">Контакты</h1>
        <h2 class="contacts__subtitle">Наши офисы работают с понедельника по пятницу с 9:00 до 17:30</h2>
        <div class="contacts__place-list">
            <div class="contacts__place-item">
                <div class="contacts__place-info">
                    <p class="contacts__place-title">Центральный офис</p>
                    <div class="contacts__cols-wrap">
                        <div class="contacts__col-1">
                            <div class="contacts__info-item contacts__info-item--loc">Казахстан, г. Алматы, ул. Омарова 45 б</div>
                            <div class="contacts__info-item contacts__info-item--phone">Телефоны: 8 (727) 294 86 51, 294 86 50</div>
                            <div class="contacts__info-item contacts__info-item--fax">Факс: 8 (727) 252 20 33</div>
                            <div class="contacts__info-item contacts__info-item--mob">Моб: 8 777 256 09 07</div>
                            <div class="contacts__info-item contacts__info-item--email">Email: kali_ltd@mail.ru</div>
                        </div>
                        <div class="contacts__col-2">
                            <div class="contacts__info-item contacts__info-item--work-time">График работы:
                                <span class="contacts__info-work-time">Понедельник - пятница<br>с 9:00 до 17:30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacts__place-map js_map" id="contact_map_1" data-latitude="43.259511" data-longitude="76.939174"></div>
            </div>

            <div class="contacts__place-item">
                <div class="contacts__place-info">
                    <p class="contacts__place-title">Комфорт</p>
                    <div class="contacts__cols-wrap">
                        <div class="contacts__col-1">
                            <div class="contacts__info-item contacts__info-item--loc">Казахстан, г. Алматы, ул. Омарова 45 б</div>
                            <div class="contacts__info-item contacts__info-item--phone">Телефоны: 8 (727) 294 86 51, 294 86 50</div>
                            <div class="contacts__info-item contacts__info-item--fax">Факс: 8 (727) 252 20 33</div>
                            <div class="contacts__info-item contacts__info-item--mob">Моб: 8 777 256 09 07</div>
                            <div class="contacts__info-item contacts__info-item--email">Email: kali_ltd@mail.ru</div>
                        </div>
                        <div class="contacts__col-2">
                            <div class="contacts__info-item contacts__info-item--work-time">График работы:
                                <span class="contacts__info-work-time">Понедельник - пятница<br>с 9:00 до 17:30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacts__place-map js_map" id="contact_map_2" data-latitude="43.259511" data-longitude="76.939174"></div>
            </div>
        </div>
    </div>
@endsection
