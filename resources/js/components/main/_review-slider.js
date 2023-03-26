import Swiper from 'swiper';
import 'swiper/css';

$(document).ready(function() {
    const swiper = new Swiper('.review__content', {
        slidesPerView: 'auto',
        spaceBetween: 25,
    });

    const swiper_sm = new Swiper('.review__content_sm', {
        slidesPerView: 1,
        spaceBetween: 25,
    });
});
