import Swiper from 'swiper';
import 'swiper/css';

$(document).ready(function() {
/*    const swiper = new Swiper('.services__swiper', {
        spaceBetween: 20,
        breakpoints: {
            375: {
                slidesPerView: 1,
                height: 270,
            },
            450: {
                slidesPerView: 1.25,
                height: 300,
            },
            576: {
                slidesPerView: 1.5,
            },
        },
        height: 325,
    })*/

    return new Splide('#services__splide', {
        arrows: false,
        pagination: false,
        drag: true,
        perPage: 1,
        autoWidth: true,
        perMove: 1,
        //padding: { left: '0', right: '25%' },
    }).mount();

    /*let splide = enableSplide();
    let resizeTimer = 0;

    function breakpointChecker() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            if ($(window).width() <= 768) {
                if (!splide.state.is(Splide.STATES.DESTROYED)) {
                    $('.header__nav-item_active').removeClass('header__nav-item_active');
                    $('.header__nav-item:first-of-type').addClass('header__nav-item_active');
                    splide.destroy();
                }
                return 0;
            } else if (splide.state.is(Splide.STATES.DESTROYED)) {
                splide = enableSwiper();
            }
        }, 100);
    }

    $(window).on('resize', breakpointChecker);
    breakpointChecker();*/
});


function enableSplide() {
    return new Splide('#services__splide', {
        arrows: false,
        pagination: false,
        drag: 'free',
        autoWidth: true,
        padding: { left: '0', right: '25%' },
    }).mount();
}


