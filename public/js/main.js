$(document).ready(function(){
    var $window = $(window);

    $(".js_partners_slick").slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            }
        ]
    });

    $(".js_reviews_slick").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true
    });

    $(".js_main_slick").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        dots: true,
        speed: 1000
    });

    //==== Форма "Заказать звонок"
    $('.js_call_back').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });

    $('.js_windows_type').on('click', function (e) {
        e.stopPropagation();
        $('.js_window').hide();
        $('.js_window[data-parent-id='+ $(this).data('id') +']').show();
    });

    $('.js_balcony_category').on('click', function (e) {
        e.stopPropagation();
        $('.js_balcony_type').hide();
        $('.js_balcony_type[data-parent-id='+ $(this).data('id') +']').show();
        $('.js_balcony_types').find('.js_balcony_type').filter(':visible:first').addClass('examples__type--first').trigger('click');
    });

    $('.js_balcony_type').on('click', function (e) {
        e.stopPropagation();
        $('.js_balcony').hide();
        $('.js_balcony[data-parent-id='+ $(this).data('id') +']').show();
    });

    // $('#js_windows_types').quicksand( $('#js_windows_list li'), function() {
    //     // callback code
    // });


    $window.on('resize', function () {
        var $this = $(this);
        if ($this.width() < 768) {
        }
    });

    $('.js_menu_button').on('click', function () {
        $(this).toggleClass('is-open');
        $('.js_menu').slideToggle();
    });


    /* Yandex map */
    var init = function () {
        $('.js_map').each(function () {
            var mapId = $(this).attr('id'),
                latitude = $(this).data('latitude'),
                longitude = $(this).data('longitude');

            var myMap = new ymaps.Map(mapId, {
                center: [latitude, longitude],
                zoom: 16,
                controls: ['zoomControl', 'fullscreenControl']
            },{
                autoFitToViewport: 'always'
            });
            myMap.behaviors.disable("scrollZoom");
            myMap.behaviors.disable("dblClickZoom");
            var myPlacemark = new ymaps.Placemark([latitude, longitude], {}, {
                iconLayout: "default#image",
                iconImageHref: "/img/map_bullet.png",
                iconImageSize: [51, 70],
                iconImageOffset: [-25, -70]
            });
            myMap.geoObjects.add(myPlacemark);

            $window.on('resize', function (){
                if ($window.width() < 1000) {
                    myMap.behaviors.disable("drag");
                } else {
                    myMap.behaviors.enable("drag");
                }
            });
        });
    };

    ymaps.ready(init);
});