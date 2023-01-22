import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const paginationNames = ['О нас', 'Услуги', 'Команда', 'Партнёры', 'Контакты'];

$(document).ready(function() {
    const swiper = new Swiper('.fullpage', {
        direction: 'vertical',
        threshold: 25,
        mousewheel: {
            forceToAxis: true,
        },
        pagination: {
            el: '.header__nav-list',
            type: 'bullets',
            renderBullet: function (index, className) {
                return `<li class=" ${className}"><p class="nav-item__text">${paginationNames[index]}</p></li>`
            },
            bulletClass: 'header__nav-item',
            bulletActiveClass: 'header__nav-item_active',
            verticalClass: 'pagination-vertical',
            clickable: true,
        },
    });
})
