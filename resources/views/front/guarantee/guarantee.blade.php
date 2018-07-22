@extends('front.layout')
@section('content')
{{--    @include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])--}}
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">Гарантии</span>
    </div>

    <div class="guarantee-banner">
        <div class="guarantee-banner__container">
            <div class="guarantee-banner__text-wrapper">
                <p class="guarantee-banner__text">Гарантия на окна - весомое доказательство их&nbsp;качественности</p>
                <div class="guarantee-banner__link-wrap">
                    Скачать <a href="#" class="guarantee-banner__download link-blue">Инструкцию по&nbsp;эксплуатации</a><br>и <a href="#" class="guarantee-banner__download link-blue">Гарантийный талон >></a>
                </div>
            </div>
        </div>
    </div>

    <div class="guarantee">
        <div class="guarantee__text text-block"></div>
        <div class="guarantee__factors">
            <div class="guarantee__factor">
                <div class="guarantee__factor-img-wrap">
                    <img src="/dev_img/guarantee_factor1.png" alt="" class="guarantee__factor-img">
                </div>
                <p class="guarantee__factor-text">Качество продукции</p>
            </div>
            <div class="guarantee__factor">
                <div class="guarantee__factor-img-wrap">
                    <img src="/dev_img/guarantee_factor2.png" alt="" class="guarantee__factor-img">
                </div>
                <p class="guarantee__factor-text">Материал изготовления</p>
            </div>
            <div class="guarantee__factor">
                <div class="guarantee__factor-img-wrap">
                    <img src="/dev_img/guarantee_factor3.png" alt="" class="guarantee__factor-img">
                </div>
                <p class="guarantee__factor-text">Рекомендации к установке и эксплуатации</p>
            </div>
            <div class="guarantee__factor">
                <div class="guarantee__factor-img-wrap">
                    <img src="/dev_img/guarantee_factor4.png" alt="" class="guarantee__factor-img">
                </div>
                <p class="guarantee__factor-text">Гарантии на пластиковые окна и их сроки</p>
            </div>
        </div>
        <div class="guarantee__text text-block"></div>
    </div>
    <div class="guarantee-grey">
        <div class="guarantee-grey__container">
            <p class="guarantee-grey__text">Соблюдение этих мер существенно увеличивает продолжительность работоспособности
                пластиковых окон, в чем можно убедиться, прочитав отзывы пользователей:</p>
            <div class="guarantee-grey__reviews reviews">
                <div class="reviews__slider-wrap">
                    <div class="reviews__slider js_reviews_slick">
                        <div class="reviews__item">
                            <p class="reviews__name">Иван Иванов</p>
                            <p class="reviews__city">Алматы</p>
                            <p class="reviews__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur, cum delectus dignissimos doloribus eaque error expedita facilis fugit, inventore labore natus nostrum odit quis repellendus saepe veritatis voluptas voluptatum! A blanditiis consequatur culpa dolorem dolores eius fugiat hic labore mollitia nostrum, odio officiis omnis quam quos, ratione sed sequi sit tenetur ullam ut velit vero voluptas voluptate. Ipsum, ratione.</p>
                        </div>
                        <div class="reviews__item">
                            <p class="reviews__name">Иван Иванов 2</p>
                            <p class="reviews__city">Алматы</p>
                            <p class="reviews__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur, cum delectus dignissimos doloribus eaque error expedita facilis fugit, inventore labore natus nostrum odit quis repellendus saepe veritatis voluptas voluptatum! A blanditiis consequatur culpa dolorem.</p>
                        </div>
                        <div class="reviews__item">
                            <p class="reviews__name">Иван Иванов 3</p>
                            <p class="reviews__city">Алматы</p>
                            <p class="reviews__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur.</p>
                        </div>
                        <div class="reviews__item">
                            <p class="reviews__name">Иван Иванов 4</p>
                            <p class="reviews__city">Алматы</p>
                            <p class="reviews__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam aspernatur, cum delectus dignissimos doloribus eaque error expedita facilis fugit, inventore labore natus nostrum odit quis repellendus saepe veritatis voluptas voluptatum! A blanditiis consequatur culpa dolorem dolores eius fugiat hic labore mollitia nostrum, odio officiis omnis quam quos, ratione sed sequi sit tenetur ullam ut velit vero voluptas voluptate. Ipsum, ratione.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
