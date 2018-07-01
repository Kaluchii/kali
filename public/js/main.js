$(document).ready(function(){
    var $window = $(window);

    var partnersSlider = function() {
        $(".js_partners_slick").slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
                {
                    breakpoint: 941,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                }
            ]
        });
    }();


    $window.on('resize', function () {
        var $this = $(this);
        if ($this.width() < 768) {
            $(".js_partners_slick").slick('unslick');
        } else {
            partnersSlider();
        }
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
                iconImageSize: [74, 102],
                iconImageOffset: [-37, -102]
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