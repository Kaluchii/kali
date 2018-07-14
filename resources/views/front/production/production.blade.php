@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">Продукция</span>
    </div>

    <div class="production-banner production-banner--plast">
        <div class="production-banner__container">
            <div class="production-banner__content-wrapper">
                <p class="production-banner__text">Пластиковые окна, двери,&nbsp;витражи</p>
                <div class="production-banner__firm-list production-banner__firm-list--plast">
                    <div class="production-banner__firm-item">
                        <img src="/dev_img/banner_firm_1.png" alt="" class="production-banner__firm-logo">
                    </div>
                    <div class="production-banner__firm-item">
                        <img src="/dev_img/banner_firm_2.png" alt="" class="production-banner__firm-logo">
                    </div>
                    <div class="production-banner__firm-item">
                        <img src="/dev_img/banner_firm_3.png" alt="" class="production-banner__firm-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="production">
        <ul class="production__list">
            <li class="production__item big-card">
                <div class="big-card__img" style="background-image: url('/dev_img/big-card_1.jpg');"></div>
                <div class="big-card__text-wrap">
                    <h3 class="big-card__title">W-48 холодная</h3>
                    <p class="big-card__preview-description">Основное назначение конструкции с алюминиевой системой ALT C48 монтаж дверных
                        как внутренних, так и внешних проемов. Ее использование делает возможным создавать двери
                        различной функциональности.</p>
                    <div class="big-card__btns-wrap">
                        <div class="big-card__btn-wrap">
                            <a href="#call_back_form" class="big-card__btn button button--blue js_call_back">Заказать замер</a>
                        </div>
                        <div class="big-card__btn-wrap">
                            <a href="#" class="big-card__btn button button--blue-border">Подробнее</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="production__item big-card">
                <div class="big-card__img" style="background-image: url('/dev_img/big-card_2.jpg');"></div>
                <div class="big-card__text-wrap">
                    <h3 class="big-card__title">W-48 холодная</h3>
                    <p class="big-card__preview-description">Основное назначение конструкции с алюминиевой системой ALT C48 монтаж дверных
                        как внутренних, так и внешних проемов. Ее использование делает возможным создавать двери
                        различной функциональности.</p>
                    <div class="big-card__btns-wrap">
                        <div class="big-card__btn-wrap">
                            <a href="#call_back_form" class="big-card__btn button button--blue js_call_back">Заказать замер</a>
                        </div>
                        <div class="big-card__btn-wrap">
                            <a href="#" class="big-card__btn button button--blue-border">Подробнее</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="production-banner production-banner--alu">
        <div class="production-banner__container">
            <div class="production-banner__content-wrapper">
                <p class="production-banner__text">Алюминиевые окна, двери, витражи&nbsp;ALUTECH</p>
                <div class="production-banner__firm-list">
                    <div class="production-banner__firm-item">
                        <img src="/dev_img/banner_firm_4.png" alt="" class="production-banner__firm-logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="production">
        <ul class="production__list">
            <li class="production__item big-card">
                <div class="big-card__img" style="background-image: url('/dev_img/big-card_4.jpg');"></div>
                <div class="big-card__text-wrap">
                    <h3 class="big-card__title">W-48 холодная</h3>
                    <p class="big-card__preview-description">Основное назначение конструкции с алюминиевой системой ALT C48 монтаж дверных
                        как внутренних, так и внешних проемов. Ее использование делает возможным создавать двери
                        различной функциональности.</p>
                    <div class="big-card__btns-wrap">
                        <div class="big-card__btn-wrap">
                            <a href="#" class="big-card__btn button button--blue">Заказать замер</a>
                        </div>
                        <div class="big-card__btn-wrap">
                            <a href="#" class="big-card__btn button button--blue-border">Подробнее</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="production__item big-card">
                <div class="big-card__img" style="background-image: url('/dev_img/big-card_5.jpg');"></div>
                <div class="big-card__text-wrap">
                    <h3 class="big-card__title">W-48 холодная</h3>
                    <p class="big-card__preview-description">Основное назначение конструкции с алюминиевой системой ALT C48 монтаж дверных
                        как внутренних, так и внешних проемов. Ее использование делает возможным создавать двери
                        различной функциональности.</p>
                    <div class="big-card__btns-wrap">
                        <div class="big-card__btn-wrap">
                            <a href="#" class="big-card__btn button button--blue">Заказать замер</a>
                        </div>
                        <div class="big-card__btn-wrap">
                            <a href="#" class="big-card__btn button button--blue-border">Подробнее</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <p class="production__other">Другая продукция</p>
        <ul class="production__other-list icon-cards">
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap">
                        <img src="/dev_img/services_1.png" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Окна, двери, витражи из ПВХ - профилей. (КНР, Турция, Германия)</p>
                </a>
            </li>
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap">
                        <img src="/dev_img/services_9.png" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Однокамерные, двукамерные стеклопакеты</p>
                </a>
            </li>
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap">
                        <img src="/dev_img/services_2.png" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Изготовление пластиковых окон</p>
                </a>
            </li>
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap">
                        <img src="/dev_img/services_10.png" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Энергосберегающие стеклопакеты</p>
                </a>
            </li>
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap">
                        <img src="/dev_img/services_3.png" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Изготовление изделий из алюминиевых профилей. (Беларусь)</p>
                </a>
            </li>
            <li class="icon-cards__item">
                <a href="#" class="icon-cards__item-container icon-cards__item-container--link">
                    <div class="icon-cards__icon-wrap">
                        <img src="/dev_img/services_11.png" alt="" class="icon-cards__icon">
                    </div>
                    <p class="icon-cards__text">Стеклопакет с декоративной рассечкой</p>
                </a>
            </li>
        </ul>
    </div>
@endsection
