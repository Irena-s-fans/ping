$(document).ready(function () {
    $('.header__burger').on('click', function() {
        if ($('.header').hasClass('header_active')) {
            $('.header').removeClass('header_active');
        } else {
            $('.header').addClass('header_active');
        }
    });
});
