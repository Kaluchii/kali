@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => '', 'description' => '', 'keywords' => '', 'spare' => 'Карта сайт'])
    @include('front.rating', ['block_name' => 'sitemap', 'block_id' => 0, 'rating' => $rating])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <span class="breadcrumbs__current" itemprop="item"><span class="breadcrumbs__current-text" itemprop="name">Карта сайта</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="static-page">
        <h1 class="static-page__title">Карта сайта</h1>
        <div class="static-page__text">
            <div class="sitemap">
                <ul class="sitemap__level">
                    <li class="sitemap__level-item"><a href="/about" class="sitemap__link link-black">О компании</a></li>
                    <li class="sitemap__level-item"><a href="/calculator" class="sitemap__link link-black">Калькулятор стоимости</a></li>
                    <li class="sitemap__level-item"><a href="/guarantee" class="sitemap__link link-black">Гарантии</a></li>
                    <li class="sitemap__level-item"><a href="/windows-price" class="sitemap__link link-black">Цены на окна</a></li>
                    <li class="sitemap__level-item"><a href="/balconies-price" class="sitemap__link link-black">Цены на балконы</a></li>
                    <li class="sitemap__level-item"><a href="/sale" class="sitemap__link link-black">Распродажа</a></li>
                    <li class="sitemap__level-item"><a href="/services" class="sitemap__link link-black">Услуги</a></li>
                    <li class="sitemap__level-item"><a href="/contacts" class="sitemap__link link-black">Контакты</a></li>
                    <li class="sitemap__level-item"><a href="/pay" class="sitemap__link link-black">Оплата</a></li>
                    <li class="sitemap__level-item"><a href="/products" class="sitemap__link link-black">Продукция</a>
                        <ul class="sitemap__level">
                            @foreach($products->products_list_1_group as $item)
                                <li class="sitemap__level-item"><a href="/products/{{$item->slug}}" class="sitemap__link link-black">{{$item->product_name}}</a></li>
                            @endforeach
                            @foreach($products->products_list_2_group as $item)
                                <li class="sitemap__level-item"><a href="/products/{{$item->slug}}" class="sitemap__link link-black">{{$item->product_name}}</a></li>
                            @endforeach
                            @foreach($products->other_products_list_group as $item)
                                <li class="sitemap__level-item"><a href="/products/{{$item->slug}}" class="sitemap__link link-black">{{$item->product_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="sitemap__level-item"><a href="/blog" class="sitemap__link link-black">Блог</a>
                        <ul class="sitemap__level">
                            @foreach($blog->posts_group as $item)
                                <li class="sitemap__level-item"><a href="/blog/{{$item->slug}}" class="sitemap__link link-black">{{$item->post_name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="sitemap__level-item"><a href="/components" class="sitemap__link link-black">Комплектующие</a>
                        <ul class="sitemap__level">
                            @foreach($components->components_categories_group as $category)
                                <li class="sitemap__level-item"><a href="/components/{{$category->slug}}" class="sitemap__link link-black">{{$category->category_name}}</a>
                                    <ul class="sitemap__level">
                                        @foreach($category->components_list_group as $item)
                                            <li class="sitemap__level-item"><a href="/components/{{$category->slug}}/{{$item->slug}}" class="sitemap__link link-black">{{$item->component_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @include('front.seo-text', ['seotext' => ''])
@endsection
