import Swiper from 'swiper';
import 'swiper/css';

$(document).ready(function() {
    const swiper = new Swiper('.services__swiper', {
        spaceBetween: 20,
        breakpoints: {
            375: {
                slidesPerView: 1,
            },
            450: {
                slidesPerView: 1.25,
            },
            576: {
                slidesPerView: 1.5,
            },
        },
    })
});
