import {Swiper, Grid} from 'swiper';
import 'swiper/css';
import 'swiper/css/grid'

$(document).ready(function() {
    const swiper = new Swiper('.services__swiper', {
        spaceBetween: 20,
        cssMode: true,
        centeredSlides: true,
        centeredSlidesBounds: true,
        slidesPerView: 1.35,
        breakpoints: {
            375: {
                slidesPerView: 1.2,
            },
            450: {
                slidesPerView: 1.5,
            },
            576: {
                slidesPerView: 1.75,
            },
        },
    });

    const projects_swiper = new Swiper('.projects__list', {
        modules: [Grid],
        cssMode: true,
        centeredSlides: true,
        centeredSlidesBounds: true,
        spaceBetween: 20,
        slidesPerView: 1.35,
        grid: {
            rows: 1,
        },
        breakpoints: {
            376: {
                slidesPerView: 1.2,
                grid: {
                    rows: 1,
                },
            },
            451: {
                slidesPerView: 1.5,
                grid: {
                    rows: 1,
                },
            },
            577: {
                slidesPerView: 1.75,
                grid: {
                    rows: 1,
                },
            },
            769: {
                cssMode: false,
                centeredSlides: false,
                centeredSlidesBounds: false,
                grid: {
                    rows: 2,
                },
                slidesPerView:3,
           }
        }
    });

    let resizeTimer = 0;

    function breakpointChecker() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            if ($(window).width() <= 768) {
                projects_swiper.updateSlidesClasses();
                return 0;
            }
        }, 100);
    }

    $(window).on('resize', breakpointChecker);
    breakpointChecker();

});
