import Swiper, { Autoplay } from 'swiper';
import 'swiper/css';
import 'swiper/css/autoplay';

$(document).ready(function() {
    const swiper = new Swiper('.partners__list', {
        slidesPerView: 'auto',
        loop: true,
    });

    setInterval(() => {
        swiper.slideNext(1000);
    }, 3000);
});
