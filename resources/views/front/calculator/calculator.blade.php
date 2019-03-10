@extends('front.layout')
@section('content')
    @include('front.calculator.objects')
    @yield('objects')
    @include('front.meta', ['title' => $calculator->seo_title, 'description' => $calculator->seo_description, 'keywords' => $calculator->seo_keywords, 'spare' => $calculator->title])
    @include('front.rating', ['block_name' => 'calculator', 'block_id' => 0, 'rating' => $rating])
    <ul class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black" itemprop="item"><span class="breadcrumbs__link-text" itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumbs__separator"></li>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/calculator" itemprop="item" class="hide"><span itemprop="name">{{$calculator->title}}</span></a>
            <span class="breadcrumbs__current"><span class="breadcrumbs__current-text">{{$calculator->title}}</span></span>
            <meta itemprop="position" content="2" />
        </li>
    </ul>

    <div class="calculator">
        <h1 class="calculator__title">{{$calculator->title}}</h1>
        <h2 class="calculator__subtitle">{{$calculator->sub_title}}</h2>
        <div class="calculator__categories-list">
            @php $i = 0 @endphp
            @foreach($calculator->product_categories_group as $category)
                <div class="calculator__category-item js_calc_category">
                    <div class="calculator__category-name">{{$category->category_name}}</div>
                    <div class="calculator__category-img-wrap">
                        <img src="{{$category->img->link}}?{{$category->img->cache_index}}" alt="{{$category->img->alt}}" title="{{$category->img->alt}}" class="calculator__category-img">
                    </div>
                    <div class="calculator__types-list js_product_list">
                        @foreach($category->product_types_group as $item)
                        <div class="calculator__types-item js_product @if($i++ == 0) is-active-product @endif" data-id="{{$item->id}}">
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" title="{{$item->img->alt}}" class="calculator__type-img">
                        </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="calculator__form-wrap">
            <div class="calculator__window-name js_window_name"></div>
            <div class="calculator__form">
                <div class="calculator__row-1">
                    <div class="calculator__size">
                        <div class="calculator__size-field-wrap">
                            <input type="text" data-mask="0000" id="window-width" class="calculator__size-field js_window_width" value="1360">
                            <label class="calculator__size-field-label" for="window-width">мм</label>
                        </div>
                        <div class="calculator__size-field-wrap">
                            <input type="text" data-mask="0000" id="window-height" class="calculator__size-field js_window_height" value="1150">
                            <label class="calculator__size-field-label" for="window-height">мм</label>
                        </div>
                    </div>
                    <div class="calculator__window-img-wrap">
                        <img src="" alt="" class="calculator__img js_window_img">
                    </div>
                </div>
                <div class="calculator__row-2">
                    <div class="calculator__fields">
                        <div class="calculator__fields-col">
                            <div class="calculator__field">
                                <label class="calculator__field-name">Цвет</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input js_window_color">
                                        <option value="0">Белый</option>
                                        <option value="0">Белый</option>
                                        @foreach($calculator_components->colors_group as $color)
                                        <option value="1">{{$color->color_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="calculator__field">
                                <label class="calculator__field-name">Профиль</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input js_window_profile">
                                        @php $i = 0 @endphp
                                        @foreach($calculator_components->profiles_group as $profile)
                                        <option value="{{$profile->id}}">{{$profile->component_name}}</option>
                                        @if( $i++ == 0 )
                                            <option value="{{$profile->id}}">{{$profile->component_name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="calculator__field">
                                <label class="calculator__field-name">Стеклопакет</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input js_window_glass">
                                        @php $i = 0 @endphp
                                        @foreach($calculator_components->double_glazed_windows_group as $glass)
                                        <option value="{{$glass->id}}">{{$glass->component_name}}</option>
                                        @if( $i++ == 0 )
                                        <option value="{{$glass->id}}">{{$glass->component_name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="calculator__fields-col">
                            <div class="calculator__field">
                                <label class="calculator__field-name">Подоконник</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input js_window_outflow">
                                        @php $i = 0 @endphp
                                        @foreach($calculator_components->outflow_group as $outflow)
                                            <option value="{{$outflow->id}}">{{$outflow->component_name}}</option>
                                            @if( $i++ == 0 )
                                                <option value="{{$outflow->id}}">{{$outflow->component_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="calculator__field">
                                <label class="calculator__field-name">Отлив</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input js_window_sill">
                                        @php $i = 0 @endphp
                                        @foreach($calculator_components->window_sill_group as $window_sill)
                                            <option value="{{$window_sill->id}}">{{$window_sill->component_name}}</option>
                                            @if( $i++ == 0 )
                                                <option value="{{$window_sill->id}}">{{$window_sill->component_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="calculator__field">
                                <label class="calculator__field-name calculator__field-name--checkbox">
                                    <input type="checkbox" class="calculator__checkbox-input js_window_net">
                                    <span class="calculator__checkbox-text">Москитная сетка</span>
                                </label>
                            </div>
                            <div class="calculator__btn-wrap">
                                <button class="calculator__btn button button--orange-border-sqare js_calculate_price">Рассчитать стоимость</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="calculator__window-price">Цена выбранного окна <span class="calculator__price-num js_window_price"></span>&nbsp;тенге</div>
        <p class="calculator__important-text">{{$calculator->under_price}}</p>
    </div>
    @include('front.seo-text', ['seotext' => $calculator->seotext])
@endsection
