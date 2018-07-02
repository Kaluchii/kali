@section('footer')
    <footer class="footer">
        <div class="footer__contacts-info contacts-info">
            <div class="contacts-info__container">
                <div class="contacts-info__col contacts-info__col--left">
                    <p class="contacts-info__title contacts-info__title--big">Kali в социальных сетях:</p>
                    <div class="contacts-info__socials">
                        <a href="#" class="contacts-info__social contacts-info__social--inst"></a>
                        <a href="#" class="contacts-info__social contacts-info__social--vk"></a>
                    </div>
                    <p class="contacts-info__title contacts-info__title--big">График работы:</p>
                    <p class="contacts-info__text contacts-info__text--big">С понедельника по пятницу<br>с 9.00 до 17.30</p>
                </div>
                <div class="contacts-info__col">
                    <p class="contacts-info__title">Телефоны:</p>
                    <p class="contacts-info__text">8(727) 294-86-51; 8(727) 294-86-50</p>
                    <p class="contacts-info__title">Факс:</p>
                    <p class="contacts-info__text">8(727) 252-20-33</p>
                    <p class="contacts-info__title">E-mail:</p>
                    <p class="contacts-info__text">kali_ltd@mail.ru</p>
                </div>
                <div class="contacts-info__col">
                    <p class="contacts-info__title">Мобильные телефоны:</p>
                    <p class="contacts-info__text contacts-info__text--phones">8(777) 256-09-07<br>8(777) 256-09-01<br>8(701) 788-88-89</p>
                    <a href="http://goodviz.kz/" target="_blank" class="contacts-info__made-with-love">
                        <span class="contacts-info__made-logo"></span>
                        <span class="contacts-info__made-text">Сайт разработан в GoodViz</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__map-wrap">
            <div class="footer__map js_map" id="map" data-latitude="43.259511" data-longitude="76.939174"></div>
        </div>
        <div class="footer__our-partners our-partners">
            <div class="our-partners__container">
                <p class="our-partners__title">Наши партнеры</p>
                <div class="our-partners__slider-wrap">
                    <div class="our-partners__slider js_partners_slick">
                        <div class="our-partners__item-wrap"><img src="/dev_img/f_conch.png" alt="" class="our-partners__item"></div>
                        <div class="our-partners__item-wrap"><img src="/dev_img/f_conch.png" alt="" class="our-partners__item"></div>
                        <div class="our-partners__item-wrap"><img src="/dev_img/f_veratec.png" alt="" class="our-partners__item"></div>
                        <div class="our-partners__item-wrap"><img src="/dev_img/f_alutech.png" alt="" class="our-partners__item"></div>
                        <div class="our-partners__item-wrap"><img src="/dev_img/f_artec.png" alt="" class="our-partners__item"></div>
                        <div class="our-partners__item-wrap"><img src="/dev_img/f_wds.png" alt="" class="our-partners__item"></div>
                    </div>
                </div>
                <div class="our-partners__just-list">
                    <img src="/dev_img/f_conch.png" alt="" class="our-partners__list-item">
                    <img src="/dev_img/f_veratec.png" alt="" class="our-partners__list-item">
                    <img src="/dev_img/f_alutech.png" alt="" class="our-partners__list-item">
                    <img src="/dev_img/f_artec.png" alt="" class="our-partners__list-item">
                    <img src="/dev_img/f_wds.png" alt="" class="our-partners__list-item">
                </div>
            </div>
        </div>
    </footer>
@endsection