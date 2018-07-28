@extends('front.layout')
@section('content')
    @include('front.meta', ['title' => $calculator->seo_title, 'description' => $calculator->seo_description, 'keywords' => $calculator->seo_keywords, 'spare' => $calculator->title])
    <div class="breadcrumbs">
        <a href="/" class="breadcrumbs__link breadcrumbs__link--home link-black">Главная</a>
        <span class="breadcrumbs__separator"></span>
        <span class="breadcrumbs__current">{{$calculator->title}}</span>
    </div>

    <div class="calculator">
        <h1 class="calculator__title">{{$calculator->title}}</h1>
        <h2 class="calculator__subtitle">{{$calculator->sub_title}}</h2>
        @foreach($calculator->product_categories_group as $item)
        @endforeach

        <div class="calculator__form-wrap">
            <div class="calculator__window-name">Двухсекционное окно с простым открыванием</div>
            <div class="calculator__form">
                <div class="calculator__col-1">
                    <div class="calculator__size">
                        <div class="calculator__size-field-wrap">
                            <input type="text" id="window-width" class="calculator__size-field js_window_width" value="1360">
                            <label class="calculator__size-field-label" for="window-width">мм</label>
                        </div>
                        <div class="calculator__size-field-wrap">
                            <input type="text" id="window-height" class="calculator__size-field js_window_height" value="1150">
                            <label class="calculator__size-field-label" for="window-height">мм</label>
                        </div>
                    </div>
                    <div class="calculator__window-img-wrap">
                        <img src="#" alt="" class="calculator__img">
                    </div>
                </div>
                <div class="calculator__col-2">
                    <div class="calculator__fields">
                        <div class="calculator__fields-col-1">
                            <div class="calculator__field">
                                <label class="calculator__field-name">Цвет</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input">
                                        <option value="0">Белый</option>
                                        <option value="0">Белый</option>
                                        <option value="1">Черный</option>
                                        <option value="2">Коричневый</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculator__field">
                                <label class="calculator__field-name">Профиль</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input">
                                        <option value="0">CONCH 3-ех кам. 60 серия</option>
                                        <option value="0">CONCH 3-ех кам. 60 серия</option>
                                        <option value="1">CONCH 4-ех кам. 70 серия</option>
                                        <option value="2">CONCH 5-ти кам. 60 серия</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculator__field">
                                <label class="calculator__field-name">Стеклопакет</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input">
                                        <option value="0">Энергосберегающий 32 мм</option>
                                        <option value="0">Энергосберегающий 32 мм</option>
                                        <option value="1">CONCH 4-ех кам. 70 серия</option>
                                        <option value="2">CONCH 5-ти кам. 60 серия</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="calculator__fields-col-2">
                            <div class="calculator__field">
                                <label class="calculator__field-name">Подоконник</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input">
                                        <option value="0">Нет</option>
                                        <option value="0">Нет</option>
                                        <option value="1">200 мм</option>
                                        <option value="2">400 мм</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculator__field">
                                <label class="calculator__field-name">Отлив</label>
                                <div class="calculator__field-input custom-select">
                                    <select class="js_form_input">
                                        <option value="0">Нет</option>
                                        <option value="0">Нет</option>
                                        <option value="1">200 мм</option>
                                        <option value="2">400 мм</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculator__field">
                                <label class="calculator__field-name">
                                    <input type="checkbox" class="calculator__checkbox-input">
                                    <span class="calculator__checkbox-text">Москитная сетка</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="calculator__btn-wrap">
                        <button class="calculator__btn button">Рассчитать стоимость</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="calculator__window-price">Цена выбранного окна <span class="js_window_price">135 700</span> тенге</div>
        <p class="calculator__important-text"></p>
    </div>
    @include('front.seo-text', ['seo_text' => $calculator->seo_text])
@endsection
