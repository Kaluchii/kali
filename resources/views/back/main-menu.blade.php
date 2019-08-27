@section('main-menu')
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">Страницы редактирования</li>
            <li>
                <a href="/adm/all">
                    <i class="fa fa-circle-o"></i> <span>Для всего сайта</span>
                </a>
            </li>
            <li class="header"></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-angle-double-right"></i> <span>Главная страница</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/adm/home-slider"><i class="fa fa-circle-o"></i> <span>Слайдер</span></a></li>
                    <li><a href="/adm/home-facts"><i class="fa fa-circle-o"></i> <span>Факты</span></a></li>
                    <li><a href="/adm/home-examples"><i class="fa fa-circle-o"></i> <span>Примеры профиля</span></a></li>
                    <li><a href="/adm/home-windows"><i class="fa fa-circle-o"></i> <span>Цены на окна</span></a></li>
                    <li><a href="/adm/home-balconies"><i class="fa fa-circle-o"></i> <span>Цены на балконы</span></a></li>
                    <li><a href="/adm/home-advantages"><i class="fa fa-circle-o"></i> <span>Преимущества</span></a></li>
                    <li><a href="/adm/home-info"><i class="fa fa-circle-o"></i> <span>Об окнах</span></a></li>
                    <li><a href="/adm/home-seo"><i class="fa fa-circle-o"></i> <span>Метаданные</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-angle-double-right"></i> <span>Продукция</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/adm/production_cat_1"><i class="fa fa-circle-o"></i> <span>Категория 1</span></a></li>
                    <li><a href="/adm/production_cat_2"><i class="fa fa-circle-o"></i> <span>Категория 2</span></a></li>
                    <li><a href="/adm/production_cat_3"><i class="fa fa-circle-o"></i> <span>Другая продукция</span></a></li>
                </ul>
            </li>
            <li>
                <a href="/adm/guarantee">
                    <i class="fa fa-circle-o"></i> <span>Гарантии</span>
                </a>
            </li>
            <li>
                <a href="/adm/windows-price">
                    <i class="fa fa-circle-o"></i> <span>Цены на окна</span>
                </a>
            </li>
            <li>
                <a href="/adm/balconies-price">
                    <i class="fa fa-circle-o"></i> <span>Цены на балконы</span>
                </a>
            </li>
            <li>
                <a href="/adm/sale">
                    <i class="fa fa-circle-o"></i> <span>Распродажа</span>
                </a>
            </li>
            <li>
                <a href="/adm/components">
                    <i class="fa fa-circle-o"></i> <span>Комплектующие</span>
                </a>
            </li>
            <li>
                <a href="/adm/services">
                    <i class="fa fa-circle-o"></i> <span>Услуги</span>
                </a>
            </li>
            <li>
                <a href="/adm/about">
                    <i class="fa fa-circle-o"></i> <span>О компании</span>
                </a>
            </li>
            <li>
                <a href="/adm/blog">
                    <i class="fa fa-circle-o"></i> <span>Блог</span>
                </a>
            </li>
            <li>
                <a href="/adm/contacts">
                    <i class="fa fa-circle-o"></i> <span>Контакты</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-angle-double-right"></i> <span>Калькулятор</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/adm/calculator"><i class="fa fa-circle-o"></i> <span>Категории изделий</span></a></li>
                    <li><a href="/adm/calculator-components/colors"><i class="fa fa-circle-o"></i> <span>Цвета изделий</span></a></li>
                    <li><a href="/adm/calculator-components/profiles"><i class="fa fa-circle-o"></i> <span>Профили</span></a></li>
                    <li><a href="/adm/calculator-components/glaz"><i class="fa fa-circle-o"></i> <span>Стеклопакеты</span></a></li>
                    <li><a href="/adm/calculator-components/sill"><i class="fa fa-circle-o"></i> <span>Подоконники</span></a></li>
                    <li><a href="/adm/calculator-components/outflow"><i class="fa fa-circle-o"></i> <span>Отливы</span></a></li>
                    {{--<li><a href="/adm/calculator-components/slope"><i class="fa fa-circle-o"></i> <span>Откосы</span></a></li>--}}
                    <li><a href="/adm/calculator-components/net"><i class="fa fa-circle-o"></i> <span>Москитные сетки</span></a></li>
                </ul>
            </li>
            <li>
                <a href="/adm/pay">
                    <i class="fa fa-circle-o"></i> <span>Оплата</span>
                </a>
            </li>
            <li>
                <a href="/adm/post">
                    <i class="fa fa-circle-o"></i> <span>Настройки почты</span>
                </a>
            </li>
            <li>
                <a href="/adm/scripts">
                    <i class="fa fa-circle-o"></i> <span>Скрипты</span>
                </a>
            </li>



            {{--<li>--}}
                {{--<a href="reg">--}}
                    {{--<i class="fa fa-link"></i> <span>Регистрация</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
                        {{--<span class="pull-right-container">--}}
                            {{--<i class="fa fa-angle-left pull-right"></i>--}}
                        {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </section>

@endsection
