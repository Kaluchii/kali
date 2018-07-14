@section('header')
    <div class="only">
        <div class="only__container">
            <div class="only__text">Единственный дистрибьютор <img src="/img/only_conch.png" alt="Kali дистрибьютор CONCH" class="only__img"> в Казахстане</div>
            <div class="only__years"></div>
        </div>
    </div>
    <header class="header">
        <div class="header__container">
            <div class="header__top">
                <div class="header__left-col">
                    <div class="header__links-wrap">
                        <a href="/about" class="header__link link-black">О компании</a>
                        <a href="/calculator" class="header__link header__link--calc link-black">Калькулятор стоимости</a>
                    </div>
                    <ul class="header__phones-list">
                        <li class="header__phones-item">+ 7 (727) 294 86 51</li>
                        <li class="header__phones-item">+ 7 (777) 256 09 07</li>
                    </ul>
                    <div class="header__call-btn-wrap">
                        <a href="#call_back_form" class="header__call-btn button button--orange-border js_call_back">Заказать звонок</a>
                    </div>
                </div>
                <div class="header__center-col">
                    <a href="/" class="header__home-link">
                        <img src="/img/logo.svg" alt="Kali логотип пластиковые окна" class="header__logo">
                    </a>
                    <p class="header__under-logo">ДОСТОЙНОЕ РЕШЕНИЕ</p>
                </div>
                <div class="header__right-col">
                    <div class="header__links-wrap">
                        <a href="#call_back_form" class="header__link header__link--dealer link-black js_call_back">Стань диллером</a>
                        <a href="/contacts" class="header__link link-black">Контакты</a>
                    </div>
                </div>
            </div>
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-item"><a href="/production" class="header__nav-link">ПРОДУКЦИЯ</a></li>
                    <li class="header__nav-item"><a href="/guarantee" class="header__nav-link">ГАРАНТИИ</a></li>
                    <li class="header__nav-item"><a href="/windows-price" class="header__nav-link">ЦЕНЫ НА ОКНА</a></li>
                    <li class="header__nav-item"><a href="/balconies-price" class="header__nav-link">ЦЕНЫ НА БАЛКОНЫ</a></li>
                    <li class="header__nav-item"><a href="/sale" class="header__nav-link">РАСПРОДАЖА</a></li>
                    <li class="header__nav-item"><a href="#" class="header__nav-link">КОМПЛЕКТУЮЩИЕ</a></li>
                    <li class="header__nav-item"><a href="/services" class="header__nav-link">УСЛУГИ</a></li>
                    <li class="header__nav-item"><a href="/contacts" class="header__nav-link">КОНТАКТЫ</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__mobile mobile-header">
            <div class="mobile-header__top">
                <a href="/" class="mobile-header__home-link">
                    <img src="/img/logo.svg" alt="Kali логотип пластиковые окна" class="mobile-header__logo">
                </a>
                <p class="mobile-header__tag">ДОСТОЙНОЕ РЕШЕНИЕ</p>
            </div>
            <div class="mobile-header__navigation">
                <div class="mobile-header__links-list">
                    <a href="#" class="mobile-header__icon-link mobile-header__icon-link--phone-out"></a>
                    <a href="#call_back_form" class="mobile-header__icon-link mobile-header__icon-link--phone-in js_call_back"></a>
                    <a href="/calculator" class="mobile-header__icon-link mobile-header__icon-link--calc"></a>
                    <a href="/contacts" class="mobile-header__icon-link mobile-header__icon-link--map"></a>
                </div>
                <div class="mobile-header__hamburger hamburger js_menu_button">
                    <span class="hamburger__item hamburger__item--top"></span>
                    <span class="hamburger__item hamburger__item--middle"></span>
                    <span class="hamburger__item hamburger__item--bottom"></span>
                </div>
                <ul class="mobile-header__menu-list js_menu">
                    <li class="mobile-header__menu-item"><a href="/production" class="mobile-header__menu-link">ПРОДУКЦИЯ</a></li>
                    <li class="mobile-header__menu-item"><a href="/guarantee" class="mobile-header__menu-link">ГАРАНТИИ</a></li>
                    <li class="mobile-header__menu-item"><a href="/windows-price" class="mobile-header__menu-link">ЦЕНЫ НА ОКНА</a></li>
                    <li class="mobile-header__menu-item"><a href="/balconies-price" class="mobile-header__menu-link">ЦЕНЫ НА БАЛКОНЫ</a></li>
                    <li class="mobile-header__menu-item"><a href="/sale" class="mobile-header__menu-link">РАСПРОДАЖА</a></li>
                    <li class="mobile-header__menu-item"><a href="#" class="mobile-header__menu-link">КОМПЛЕКТУЮЩИЕ</a></li>
                    <li class="mobile-header__menu-item"><a href="/services" class="mobile-header__menu-link">УСЛУГИ</a></li>
                    <li class="mobile-header__menu-item"><a href="/about" class="mobile-header__menu-link">О КОМПАНИИ</a></li>
                    <li class="mobile-header__menu-item"><a href="/contacts" class="mobile-header__menu-link">КОНТАКТЫ</a></li>
                </ul>
            </div>
        </div>
    </header>
@endsection