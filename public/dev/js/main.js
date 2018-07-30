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


    // Calculator

    $('.js_calc_category').on('click', function () {
        var $popup = $(this).find('.js_product_list');
        if ( $(this).hasClass('is-open') ) {
            $(this).removeClass('is-open');
            $popup.removeAttr('style');
        } else {
            $('.js_product_list').removeAttr('style');
            $('.js_calc_category').removeClass('is-active is-open');
            $(this).addClass('is-active is-open');

            var $calculator = $('.calculator'),
                maxWidth,
                listWidth = parseFloat($popup.css('padding-left')) + parseFloat($popup.css('padding-right'));
            $(this).find('.js_product').each(function () {
                listWidth += $(this)[0].getBoundingClientRect().width + parseInt($(this).css('margin-right'));
            });

            if ( ($popup.parent().offset().left - $calculator.offset().left) > $calculator.width() - (($popup.parent().offset().left - $calculator.offset().left) + $popup.parent().width()) ) {
                $popup.css({right: '0', left: 'auto'});
                maxWidth = $calculator.width() - ($calculator.width() - (($popup.offset().left - $calculator.offset().left) + $popup.outerWidth())) - parseInt($calculator.css('padding-left'));
                $popup.css({'max-width': maxWidth, width: listWidth});
                $popup.addClass('calculator__types-list--right-align');
            } else {
                $popup.css({left: '0', right: 'auto'});
                maxWidth = $calculator.width() - ($popup.offset().left - $calculator.offset().left) + parseInt($calculator.css('padding-left'));
                $popup.css({'max-width': maxWidth, width: listWidth});
                $popup.removeClass('calculator__types-list--right-align');
            }
        }
    });

    $('.js_product').on('click', function () {
        var productId = $(this).data('id');

        $('.js_product').removeClass('is-active-product');
        $(this).addClass('is-active-product');

        $('.js_window_img').attr('src', productsObj[productId].imgUrl);
        $('.js_window_name').text(productsObj[productId].name);

        calculate();
    });

    $('.js_calculate_price').on('click', function () {
        calculate();
        console.log($window.scrollTop(), $window.scrollTop() + $window.height(),$('.js_window_price').offset().top - $window.height() + 70);
        if ( $window.scrollTop() < $('.js_window_price').offset().top - $window.height() + 70 ) {
            $('html, body').stop().animate({
                scrollTop: $('.js_window_price').offset().top - $window.height() + 70
            }, 700);
        }
    });


    function calculate() {
        var isColored = $('.js_window_color').val() == '1',
            profileId = $('.js_window_profile').val(),
            glassId = $('.js_window_glass').val(),
            outflowId = $('.js_window_outflow').val(),
            sillId = $('.js_window_sill').val(),
            hasNet = $('.js_window_net').is(':checked'),
            currProduct = productsObj[$('.is-active-product').data('id')],
            width = $('.js_window_width').val() / 1000,
            height = $('.js_window_height').val() / 1000,
            profileCost, glassCost, outflowCost, sillCost, netCost, furniturePrice,
            impostsCount, flapsCount, flapWidth, totalPrice;

        profileCost = isColored ? +componentsObj['profiles'][profileId]['price_color'] : +componentsObj['profiles'][profileId]['price'];
        glassCost = +componentsObj['glass'][glassId]['price'];
        outflowCost = +componentsObj['outflow'][outflowId]['price'];
        sillCost = isColored ? +componentsObj['window_sill'][sillId]['price_color'] : +componentsObj['window_sill'][sillId]['price'];
        if (hasNet) {
            netCost = isColored ? +componentsObj['net_price_color'] : +componentsObj['net_price'];
        } else {
            netCost = 0;
        }
        furniturePrice = isColored ? +currProduct['furniture_price_color'] : +currProduct['furniture_price'];
        impostsCount = +currProduct['imposts_count'];
        flapsCount = +currProduct['flaps_count'];

        flapWidth = width / (impostsCount + 1);

        totalPrice = (width * 2 + height * 2 + height * impostsCount) * profileCost + furniturePrice +
            (width * height * glassCost) + (flapWidth * 2 + height * 2) * flapsCount * profileCost +
            (flapWidth * height) * flapsCount * netCost +
            (width + 0.015) * sillCost + (width + 0.01) * outflowCost;

        $('.js_window_price').text(parseInt(totalPrice).toLocaleString('ru')).addClass('is-load');
        setTimeout(function () {
            $('.js_window_price').removeClass('is-load')
        }, 1000);
    }


    $window.on('load', function () {
        $('.js_product').first().trigger('click');
        $('.js_product').first().trigger('click');
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