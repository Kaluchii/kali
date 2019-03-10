@section('footer')
    <footer class="footer">
        <div class="footer__contacts-info contacts-info">
            <div class="contacts-info__container">
                <div class="contacts-info__col contacts-info__col--left">
                    <p class="contacts-info__title contacts-info__title--big">Kali в социальных сетях:</p>
                    <div class="contacts-info__socials">
                        <a href="{{$all_site->inst}}" target="_blank" rel="noopener" class="contacts-info__social contacts-info__social--inst"></a>
                        <a href="{{$all_site->vk}}" target="_blank" rel="noopener" class="contacts-info__social contacts-info__social--vk"></a>
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
                    <p class="contacts-info__text"><a href="mailto:{{$all_site->bottom_email}}" class="link-white">{{$all_site->bottom_email}}</a></p>
                    @yield('rating')
                </div>
                <div class="contacts-info__col">
                    <p class="contacts-info__title">Мобильные телефоны:</p>
                    <p class="contacts-info__text contacts-info__text--phones">{!! $all_site->bottom_mob_phones !!}</p>
                    <a href="http://goodviz.kz/" target="_blank" rel="noopener" class="contacts-info__made-with-love">
                        <span class="contacts-info__made-logo"></span>
                        <span class="contacts-info__made-text">Сайт разработан в GoodViz</span>
                    </a>
                    <p class="contacts-info__sitemap-wrap">
                        @if(Request::is('sitemap'))
                            <span class="contacts-info__sitemap is-active">Карта сайта</span>
                        @else
                            <a href="/sitemap" class="contacts-info__sitemap link-white">Карта сайта</a>
                        @endif
                    </p>
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
                            <a href="{{$item->link}}" target="_blank" rel="noopener" class="our-partners__item-wrap"><img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="our-partners__item"></a>
                        @endforeach
                    </div>
                </div>
                <div class="our-partners__just-list">
                    @foreach($all_site->partners_group as $item)
                        <a href="{{$item->link}}" target="_blank" rel="noopener" class="our-partners__list-item-wrap">
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="our-partners__list-item">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="footer__copyright">© {{$all_site->copyright}} Kali.kz - @if(Request::is('/'))Пластиковые окна в Алматы@else
                <a href="/" class="link-black">Пластиковые окна в Алматы</a> @endif. Все права защищены</div>
    </footer>
@endsection