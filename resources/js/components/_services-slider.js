import Swiper from 'swiper';
import 'swiper/css';

$(document).ready(function() {
    const swiper = new Swiper('.services__swiper', {
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
    })
});
