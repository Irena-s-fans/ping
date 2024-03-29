import Swiper, {Pagination, Mousewheel} from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/mousewheel';

const paginationNames = ['О нас', 'Услуги', 'Команда', 'Отзывы', 'Контакты'];
const paginationNamesEN = ['About', 'Services', 'Team', 'Reviews', 'Contacts'];
const paginationRels = ['#about_section', '#services_section', '#team_section', '#reviews_section', '#contacts_section'];
const isLocaleEnglish = $('html').attr('lang') === 'en';

$(document).ready(function() {
    let swiper = enableSwiper();
    let resizeTimer = 0;

    $(document).on('click', '.header__nav-item:not(.header__language, .header__nav-language)', function() {
        const headerEl = $(this)
        $('.header_active').removeClass('header_active');
        $('.header__nav-item_active').removeClass('header__nav-item_active');
        $(this).addClass('header__nav-item_active');
        $([document.documentElement, document.body]).animate({
            scrollTop: $(headerEl.attr('rel')).offset().top
        }, 750);
    });

    function breakpointChecker() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            if ($(window).width() <= 768) {
                if (!swiper.destroyed) {
                    $('.header__nav-item_active:not(.header__language, .header__nav-language)').removeClass('header__nav-item_active');
                    $('.header__nav-item:not(.header__language, .header__nav-language):first-of-type').addClass('header__nav-item_active');
                    swiper.destroy( true, true );
                }
                return 0;
            } else if (swiper.destroyed) {
                swiper = enableSwiper();
            }
        }, 100);
    }

    $(window).on('resize', breakpointChecker);
    breakpointChecker();
})

function enableSwiper() {
    const sw = new Swiper('.fullpage', {
        modules: [Pagination, Mousewheel],
        direction: 'vertical',
        threshold: 25,
        spaceBetween: 150,
        speed: 750,
        mousewheel: {
            forceToAxis: true,
        },
        pagination: {
            el: '.header__nav-list',
            type: 'bullets',
            renderBullet: function (index, className) {
                if (isLocaleEnglish) {
                    return `<li class="${className}" rel="${paginationRels[index]}"><p class="nav-item__text">${paginationNamesEN[index]}</p></li>`
                } else {
                    return `<li class="${className}" rel="${paginationRels[index]}"><p class="nav-item__text">${paginationNames[index]}</p></li>`
                }
            },
            bulletClass: 'header__nav-item',
            bulletActiveClass: 'header__nav-item_active',
            verticalClass: 'pagination-vertical',
            clickable: true,
        },
    });

    return sw;
}
