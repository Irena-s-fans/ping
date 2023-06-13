$(document).ready(function() {
    $('.team__item').on('click', function() {
        if (!$(this).hasClass('team__item_active')) {
            $('.team__item_active').find('.team__phrase').fadeOut(350);
            $('.team__item_active').removeClass('team__item_active');
            $(this).addClass('team__item_active');
            $(this).find('.team__phrase').fadeIn(350);
        }
    });

    $('.team__phrase').on('mouseenter', function() {
        $(this).find('.team__phrase-content').stop(true);
        $(this).find('.team__phrase-content').fadeIn(350);
    });

    $('.team__phrase').on('mouseleave', function() {
        $(this).find('.team__phrase-content').stop(true);
        $(this).find('.team__phrase-content').fadeOut(350);
    });
});
