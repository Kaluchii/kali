@section('footer')
    <footer class="footer">
        <div class="footer__contacts-info contacts-info">
            <div class="contacts-info__container">
                <div class="contacts-info__col contacts-info__col--left">
                    <p class="contacts-info__title contacts-info__title--big">Kali в социальных сетях:</p>
                    <div class="contacts-info__socials">
                        <a href="{{$all_site->inst}}" class="contacts-info__social contacts-info__social--inst"></a>
                        <a href="{{$all_site->vk}}" class="contacts-info__social contacts-info__social--vk"></a>
                    </div>
                    <p class="contacts-info__title contacts-info__title--big">График работы:</p>
                    <p class="contacts-info__text contacts-info__text--big">{!! $all_site->bottom_work_time !!}</p>
                </div>
                <div class="contacts-info__col">
                    <p class="contacts-info__title">Телефоны:</p>
                    <p class="contacts-info__text">{{$all_site->bottom_phones}}</p>
                    <p class="contacts-info__title">Факс:</p>
                    <p class="contacts-info__text">{{$all_site->bottom_fax}}</p>
                    <p class="contacts-info__title">E-mail:</p>
                    <p class="contacts-info__text">{{$all_site->bottom_email}}</p>
                </div>
                <div class="contacts-info__col">
                    <p class="contacts-info__title">Мобильные телефоны:</p>
                    <p class="contacts-info__text contacts-info__text--phones">{!! $all_site->bottom_mob_phones !!}</p>
                    <a href="http://goodviz.kz/" target="_blank" class="contacts-info__made-with-love">
                        <span class="contacts-info__made-logo"></span>
                        <span class="contacts-info__made-text">Сайт разработан в GoodViz</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__map-wrap">
            <div class="footer__map js_map" id="map" data-latitude="{{$all_site->latitude}}" data-longitude="{{$all_site->longitude}}"></div>
        </div>
        <div class="footer__our-partners our-partners">
            <div class="our-partners__container">
                <p class="our-partners__title">Наши партнеры</p>
                <div class="our-partners__slider-wrap">
                    <div class="our-partners__slider js_partners_slick">
                        @foreach($all_site->partners_group as $item)
                            <div class="our-partners__item-wrap"><img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="our-partners__item"></div>
                        @endforeach
                    </div>
                </div>
                <div class="our-partners__just-list">
                    @foreach($all_site->partners_group as $item)
                        <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="our-partners__list-item">
                    @endforeach
                </div>
            </div>
        </div>
    </footer>
@endsection