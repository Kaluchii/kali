$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.js_set_rating').on('click', function () {
        var obj = {};

        obj['rating'] = $(this).data('rating');
        obj['entity_name'] = $('.js_rating_proprietor').data('entity');
        obj['entity_id'] = $('.js_rating_proprietor').data('id');

        var deferred = $.ajax(
            {
                type: 'POST',
                url: '/rating/send',
                dataType: 'json',
                data: obj
            }
        );
        deferred.done(function (data) {
            if (data.status === 'OK') {
                $('.js_current_rating').css('width', data.rating['percent'] + '%');
                $('.js_rating_result').html(' <meta itemprop="ratingValue" content="' + data.rating['middle'] + '">Текущий рейтинг — ' + data.rating['middle'] + ' <meta itemprop="bestRating" content="5"> <meta itemprop="ratingCount" content="' + data.rating['count'] + '"> (' + data.rating['count'] + ' человек)');
            }
            $('.js_rating_text').text(data.text);
        });

    });

});