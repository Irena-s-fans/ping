$(document).ready(function() {
    $('.team__item').on('click', function() {
        if (!$(this).hasClass('team__item_active')) {
            $('.team__item_active').removeClass('team__item_active');
            $(this).addClass('team__item_active');
        }
    });
});
