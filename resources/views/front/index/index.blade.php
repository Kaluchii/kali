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

    <div class="main">
        <div class="main__title-text text-block"></div>
        <ul class="main__facts-list">
            <li class="main__facts-item">
                <div class="main__fact-item-container">
                    <div class="main__fact-img-wrap">
                        <img src="/dev_img/facts_1.png" alt="" class="main__fact-img">
                    </div>
                    <p class="main__fact-text">Гарантия на профиль</p>
                </div>
            </li>
            <li class="main__facts-item">
                <div class="main__fact-item-container">
                    <div class="main__fact-img-wrap">
                        <img src="/dev_img/facts_2.png" alt="" class="main__fact-img">
                    </div>
                    <p class="main__fact-text">Качественная установка и&nbsp;вызов замерщика</p>
                </div>
            </li>
            <li class="main__facts-item">
                <div class="main__fact-item-container">
                    <div class="main__fact-img-wrap">
                        <img src="/dev_img/facts_3.png" alt="" class="main__fact-img">
                    </div>
                    <p class="main__fact-text">Бесплатная консультация и&nbsp;рассчет</p>
                </div>
            </li>
            <li class="main__facts-item">
                <div class="main__fact-item-container">
                    <div class="main__fact-img-wrap">
                        <img src="/dev_img/facts_4.png" alt="" class="main__fact-img">
                    </div>
                    <p class="main__fact-text">Новый профиль CONCH 70&nbsp;серии</p>
                </div>
            </li>
            <li class="main__facts-item">
                <div class="main__fact-item-container">
                    <div class="main__fact-img-wrap">
                        <img src="/dev_img/facts_5.png" alt="" class="main__fact-img">
                    </div>
                    <p class="main__fact-text">Доставка по городу и&nbsp;в&nbsp;область</p>
                </div>
            </li>
        </ul>
        <ul class="main__profile-list">
            <li class="main__profile-item">
                <div class="main__profile-img-wrap">
                    <img src="/dev_img/profile_1.png" alt="" class="main__profile-img">
                </div>
                <p class="main__profile-name">CONCH 60 <br> 3-ех камерный</p>
                <p class="main__profile-price">от 20 000 <span class="tenge">d</span>/м²</p>
            </li>
            <li class="main__profile-item">
                <div class="main__profile-img-wrap">
                    <img src="/dev_img/profile_2.png" alt="" class="main__profile-img">
                </div>
                <p class="main__profile-name">CONCH 60 <br> 4-ех камерный</p>
                <p class="main__profile-price">от 20 000 <span class="tenge">d</span>/м²</p>
            </li>
            <li class="main__profile-item">
                <div class="main__profile-img-wrap">
                    <img src="/dev_img/profile_3.png" alt="" class="main__profile-img">
                </div>
                <p class="main__profile-name">CONCH 70 <br> 5-ти камерный</p>
                <p class="main__profile-price">от 20 000 <span class="tenge">d</span>/м²</p>
            </li>
            <li class="main__profile-item">
                <div class="main__profile-img-wrap">
                    <img src="/dev_img/profile_4.png" alt="" class="main__profile-img">
                </div>
                <p class="main__profile-name">Veratec</p>
                <p class="main__profile-price">от 30 000 <span class="tenge">d</span>/м²</p>
            </li>
            <li class="main__profile-item">
                <div class="main__profile-img-wrap">
                    <img src="/dev_img/profile_5.png" alt="" class="main__profile-img">
                </div>
                <p class="main__profile-name">WSD</p>
                <p class="main__profile-price">от 45 000 <span class="tenge">d</span>/м²</p>
            </li>
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
                    <div class="examples__price">85 925 <span class="tenge">d</span>/окно</div>
                    <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">111 350 <span class="tenge">d</span></span></p>
                </li>
                <li class="examples__item">
                    <div class="examples__img-wrap">
                        <img src="/dev_img/example_window_6.png" alt="" class="examples__img">
                    </div>
                    <div class="examples__price">87 925 <span class="tenge">d</span>/окно</div>
                    <p class="examples__full-price">Цена под ключ <span class="examples__blue-text">167 850 <span class="tenge">d</span></span></p>
                </li>
            </ul>
        </div>
    </div>

    <div class="advantages">
        <div class="advantages__container">
            <h2 class="advantages__title">Преимущества</h2>
            <p class="advantages__subtitle">Благодаря сложной, многоэлементной конструкции металлопластиковые окна обладают
                массой преимуществ:</p>
            <ul class="advantages__list">
                <li class="advantages__item">
                    <div class="advantages__item-img-wrap">
                        <img src="/dev_img/advantage_1.png" alt="" class="advantages__item-img">
                    </div>
                    <div class="advantages__item-text-wrap">
                        <p class="advantages__item-name">Энергоэкономичность.</p>
                        <p class="advantages__item-text">Пластиковые изделия обладают отличными теплоизоляционными свойствами, что способствует меньшим затратам энергии.</p>
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__item-img-wrap">
                        <img src="/dev_img/advantage_2.png" alt="" class="advantages__item-img">
                    </div>
                    <div class="advantages__item-text-wrap">
                        <p class="advantages__item-name">Звукоизоляционность.</p>
                        <p class="advantages__item-text">Наличие воздушных камер предотвращает проникновение каких-либо посторонних шумов извне. Поэтому, пластиковые
                            окна Астана и ее жители считают правильны решением при обустройстве своих квартир и домов.</p>
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__item-img-wrap">
                        <img src="/dev_img/advantage_3.png" alt="" class="advantages__item-img">
                    </div>
                    <div class="advantages__item-text-wrap">
                        <p class="advantages__item-name">Долговечность.</p>
                        <p class="advantages__item-text">Эксплуатационный срок металлопластиковых устройств весьма продолжителен. Многие фирмы пластиковых окон
                            гарантируют сорокалетний срок службы своей высокотехнологичной продукции, при этом их изделия сохраняют внешний
                            первоначальный вид.</p>
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__item-img-wrap">
                        <img src="/dev_img/advantage_4.png" alt="" class="advantages__item-img">
                    </div>
                    <div class="advantages__item-text-wrap">
                        <p class="advantages__item-name">Удобство при обслуживании.</p>
                        <p class="advantages__item-text">Пластиковые окна Казахстан и его домохозяйки оценили за их практичность, доступность при уходе. Пластик и стеклопакет
                            достаточно иногда протереть, что вернет им первозданный вид.</p>
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__item-img-wrap">
                        <img src="/dev_img/advantage_5.png" alt="" class="advantages__item-img">
                    </div>
                    <div class="advantages__item-text-wrap">
                        <p class="advantages__item-name">Привлекательный внешний вид.</p>
                        <p class="advantages__item-text">Вы решились купить пластиковые окна – в результате этого получите не только отличные по своему виду изделия, но
                            и улучшите комфортность своего проживания.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
