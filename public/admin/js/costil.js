$(document).ready(function(){
    $('.js-slug-source').on('change', function () {
        $('.slug').val( $(this).val() + '-' + $(this).data('id') ).trigger('change');
    });

    if ( /^new\d{6}/.test($('.slug').val()) ) {
        $('.js-slug-source').trigger('change');
    }

    $(window).on('load', function () {
        if ( ($date = $('.pub_date')).length ) {
            if ( $date.val() == '' ) {
                var date = new Date();
                $date.val(date.getDate() + '.' + date.getMonth() + '.' + date.getFullYear()).trigger('change');
            }
        }
    })
});
