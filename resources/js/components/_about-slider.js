import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

$(document).ready(function() {
    const swiper = new Swiper('.partners__list', {
        slidesPerView: 4.8,
        loop: true,
    })
});
