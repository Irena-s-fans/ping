import Swiper, { Pagination, Thumbs } from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/thumbs';

$(document).ready(function() {
    const swiperText = new Swiper('.team__swiper-text', {
        spaceBetween: 100,
        slidesPerView: 1,
        allowTouchMove: false,
    })

    const swiper = new Swiper('.team__swiper', {
        modules: [Pagination, Thumbs],
        spaceBetween: 0,
        slidesPerView: 1,
        breakpoints: {
            376: {
                slidesPerView: 1,
            }
        },
        thumbs: {
            swiper: swiperText,
        },
        pagination: {
            el: '.team__pagination',
            type: 'bullets',
            renderBullet: function (index, className) {
                return `<div class=" ${className}"></div>`
            },
            bulletClass: 'team__pagination-item',
            bulletActiveClass: 'team__pagination-item_active',
            clickable: true,
        },
    });
});
