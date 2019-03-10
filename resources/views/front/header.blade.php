@section('header')
    <div class="only">
        <div class="only__container">
            <div class="only__text">Единственный дистрибьютор <img src="/img/only_conch.png" alt="Kali дистрибьютор CONCH" title="Kali дистрибьютор CONCH" class="only__img"> в Казахстане</div>
            <div class="only__years"></div>
        </div>
    </div>
    <header class="header" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="Пластиковые окна Kali">
        <meta itemprop="email" content="{{$all_site->bottom_email}}">
        <meta itemprop="telephone" content="{{$all_site->mob_phones}}">
        <meta itemprop="address" content="{{$all_site->address}}">
        <div class="header__container">
            <script>
                if (window.location.pathname == '/') {
                    document.getElementsByClassName('header__container')[0].className += ' header__container--absolute'
                    document.getElementsByClassName('header')[0].className += ' header--absolute'
                }
            </script>
            <div class="header__top">
                <div class="header__left-col">
                    <div class="header__links-wrap">
                        @if(Request::is('about'))
                            <span class="header__link link-black is-active">О компании</span>
                        @else
                            <a href="/about" class="header__link link-black">О компании</a>
                        @endif
                        @if(Request::is('calculator'))
                            <span class="header__link header__link--calc link-black is-active">Калькулятор стоимости</span>
                        @else
                            <a href="/calculator" class="header__link header__link--calc link-black">Калькулятор стоимости</a>
                        @endif
                    </div>
                    <ul class="header__phones-list">
                        @foreach($all_site->top_phones_group as $item)
                            <li class="header__phones-item">{{$item->number}}</li>
                        @endforeach
                    </ul>
                    <div class="header__call-btn-wrap">
                        <a href="#call_back_form" class="header__call-btn button button--orange-border js_call_back">Заказать звонок</a>
                    </div>
                </div>
                <div class="header__center-col">
                    @if(Request::is('/'))
                    <span class="header__home-link">
                        <a href="/" class="hidden" itemprop="url"></a>
                        <img src="/img/logo.svg" alt="Kali логотип пластиковые окна" itemprop="logo" class="header__logo">
                    </span>
                    @else
                    <a href="/" class="header__home-link" itemprop="url">
                        <img src="/img/logo.svg" alt="Kali логотип пластиковые окна" itemprop="logo" class="header__logo">
                    </a>
                    @endif
                    <p class="header__under-logo">ДОСТОЙНОЕ РЕШЕНИЕ</p>
                </div>
                <div class="header__right-col">
                    <div class="header__links-wrap">
                        <a href="#call_back_form" class="header__link header__link--dealer link-black js_call_back">Стань диллером</a>
                        @if(Request::is('contacts'))
                            <span class="header__link link-black is-active">Контакты</span>
                        @else
                            <a href="/contacts" class="header__link link-black">Контакты</a>
                        @endif
                    </div>
                </div>
            </div>
            <nav class="header__nav">
                <ul class="header__nav-list">
                    @if(Request::is('products'))
                        <li class="header__nav-item"><span class="header__nav-link is-active">ПРОДУКЦИЯ</span></li>
                    @else
                        <li class="header__nav-item"><a href="/products" class="header__nav-link">ПРОДУКЦИЯ</a></li>
                    @endif
                    @if(Request::is('guarantee'))
                        <li class="header__nav-item"><span class="header__nav-link is-active">ГАРАНТИИ</span></li>
                    @else
                        <li class="header__nav-item"><a href="/guarantee" class="header__nav-link">ГАРАНТИИ</a></li>
                    @endif
                    @if(Request::is('windows-price'))
                        <li class="header__nav-item"><span class="header__nav-link is-active">ЦЕНЫ НА ОКНА</span></li>
                    @else
                        <li class="header__nav-item"><a href="/windows-price" class="header__nav-link">ЦЕНЫ НА ОКНА</a></li>
                    @endif
                    @if(Request::is('balconies-price'))
                        <li class="header__nav-item"><span class="header__nav-link is-active">ЦЕНЫ НА БАЛКОНЫ</span></li>
                    @else
                        <li class="header__nav-item"><a href="/balconies-price" class="header__nav-link">ЦЕНЫ НА БАЛКОНЫ</a></li>
                    @endif
                    @if(Request::is('sale'))
                        <li class="header__nav-item"><span class="header__nav-link is-active">РАСПРОДАЖА</span></li>
                    @else
                        <li class="header__nav-item"><a href="/sale" class="header__nav-link">РАСПРОДАЖА</a></li>
                    @endif
                    @if(Request::is('components'))
                        <li class="header__nav-item"><span class="header__nav-link is-active">КОМПЛЕКТУЮЩИЕ</span></li>
                    @else
                        <li class="header__nav-item"><a href="/components" class="header__nav-link">КОМПЛЕКТУЮЩИЕ</a></li>
                    @endif
                    @if(Request::is('services'))
                        <li class="header__nav-item"><span class="header__nav-link is-active">УСЛУГИ</span></li>
                    @else
                        <li class="header__nav-item"><a href="/services" class="header__nav-link">УСЛУГИ</a></li>
                    @endif
                    @if(Request::is('contacts'))
                        <li class="header__nav-item"><span class="header__nav-link is-active">КОНТАКТЫ</span></li>
                    @else
                        <li class="header__nav-item"><a href="/contacts" class="header__nav-link">КОНТАКТЫ</a></li>
                    @endif
                </ul>
            </nav>
        </div>
        <div class="header__mobile mobile-header">
            <div class="mobile-header__top">
                @if(Request::is('/'))
                <span class="mobile-header__home-link">
                    <img src="/img/logo.svg" alt="Kali логотип пластиковые окна" class="mobile-header__logo">
                </span>
                @else
                <a href="/" class="mobile-header__home-link">
                    <img src="/img/logo.svg" alt="Kali логотип пластиковые окна" class="mobile-header__logo">
                </a>
                @endif
                <p class="mobile-header__tag">ДОСТОЙНОЕ РЕШЕНИЕ</p>
            </div>
            <div class="mobile-header__navigation">
                <div class="mobile-header__links-list">
                    <a href="{{$all_site->mob_phones}}" class="mobile-header__icon-link mobile-header__icon-link--phone-out"></a>
                    <a href="#call_back_form" class="mobile-header__icon-link mobile-header__icon-link--phone-in js_call_back"></a>
                    @if(Request::is('calculator'))
                        <span class="mobile-header__icon-link mobile-header__icon-link--calc"></span>
                    @else
                        <a href="/calculator" class="mobile-header__icon-link mobile-header__icon-link--calc"></a>
                    @endif
                    @if(Request::is('contacts'))
                        <span class="mobile-header__icon-link mobile-header__icon-link--map"></span>
                    @else
                        <a href="/contacts" class="mobile-header__icon-link mobile-header__icon-link--map"></a>
                    @endif
                </div>
                <div class="mobile-header__hamburger hamburger js_menu_button">
                    <span class="hamburger__item hamburger__item--top"></span>
                    <span class="hamburger__item hamburger__item--middle"></span>
                    <span class="hamburger__item hamburger__item--bottom"></span>
                </div>
                <ul class="mobile-header__menu-list js_menu">
                    @if(Request::is('products'))
                        <li class="mobile-header__menu-item"><span class="mobile-header__menu-link is-active">ПРОДУКЦИЯ</span></li>
                    @else
                        <li class="mobile-header__menu-item"><a href="/products" class="mobile-header__menu-link">ПРОДУКЦИЯ</a></li>
                    @endif
                    @if(Request::is('guarantee'))
                        <li class="mobile-header__menu-item"><span class="mobile-header__menu-link is-active">ГАРАНТИИ</span></li>
                    @else
                        <li class="mobile-header__menu-item"><a href="/guarantee" class="mobile-header__menu-link">ГАРАНТИИ</a></li>
                    @endif
                    @if(Request::is('windows-price'))
                        <li class="mobile-header__menu-item"><span class="mobile-header__menu-link is-active">ЦЕНЫ НА ОКНА</span></li>
                    @else
                        <li class="mobile-header__menu-item"><a href="/windows-price" class="mobile-header__menu-link">ЦЕНЫ НА ОКНА</a></li>
                    @endif
                    @if(Request::is('balconies-price'))
                        <li class="mobile-header__menu-item"><span class="mobile-header__menu-link is-active">ЦЕНЫ НА БАЛКОНЫ</span></li>
                    @else
                        <li class="mobile-header__menu-item"><a href="/balconies-price" class="mobile-header__menu-link">ЦЕНЫ НА БАЛКОНЫ</a></li>
                    @endif
                    @if(Request::is('sale'))
                        <li class="mobile-header__menu-item"><span class="mobile-header__menu-link is-active">РАСПРОДАЖА</span></li>
                    @else
                        <li class="mobile-header__menu-item"><a href="/sale" class="mobile-header__menu-link">РАСПРОДАЖА</a></li>
                    @endif
                    @if(Request::is('components'))
                        <li class="mobile-header__menu-item"><span class="mobile-header__menu-link is-active">КОМПЛЕКТУЮЩИЕ</span></li>
                    @else
                        <li class="mobile-header__menu-item"><a href="/components" class="mobile-header__menu-link">КОМПЛЕКТУЮЩИЕ</a></li>
                    @endif
                    @if(Request::is('services'))
                        <li class="mobile-header__menu-item"><span class="mobile-header__menu-link is-active">УСЛУГИ</span></li>
                    @else
                        <li class="mobile-header__menu-item"><a href="/services" class="mobile-header__menu-link">УСЛУГИ</a></li>
                    @endif
                    @if(Request::is('about'))
                        <li class="mobile-header__menu-item"><span class="mobile-header__menu-link is-active">О КОМПАНИИ</span></li>
                    @else
                        <li class="mobile-header__menu-item"><a href="/about" class="mobile-header__menu-link">О КОМПАНИИ</a></li>
                    @endif
                    @if(Request::is('contacts'))
                        <li class="mobile-header__menu-item"><span class="mobile-header__menu-link is-active">КОНТАКТЫ</span></li>
                    @else
                        <li class="mobile-header__menu-item"><a href="/contacts" class="mobile-header__menu-link">КОНТАКТЫ</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </header>
@endsection