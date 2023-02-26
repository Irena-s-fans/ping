import Swiper from 'swiper';
import 'swiper/css';

$(document).ready(function() {
    const swiper = new Swiper('.partners__list', {
        slidesPerView: 'auto',
        loop: true,
    })
});
