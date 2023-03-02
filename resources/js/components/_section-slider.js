/*import Swiper, {Pagination, Mousewheel} from 'swiper';*/
/*import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/mousewheel';*/

const paginationNames = ['О нас', 'Услуги', 'Команда', 'Отзывы', 'Контакты'];
const paginationRels = ['#about_section', '#services_section', '#team_section', '#reviews_section', '#contacts_section'];

$(document).ready(function() {
    new Splide('#fullpage', {
        height: '100vh',
        direction: 'ttb',
        drag: true,
        wheel: true,
        wheelSleep: 250,
        speed: 650,
        dragMinThreshold: {
            mouse: 25,
            touch: 25,
        },
        arrows: false,
        pagination: false,
        mediaQuery: 'max',
        breakpoints: {
            768: {
                destroy: true,
            }
        }
    }).mount();
    /*let swiper = enableSwiper();
    let resizeTimer = 0;

    function breakpointChecker() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            if ($(window).width() <= 768) {
                if (!swiper.destroyed) {
                    $('.header__nav-item_active').removeClass('header__nav-item_active');
                    $('.header__nav-item:first-of-type').addClass('header__nav-item_active');
                    swiper.destroy( true, true );
                }
                return 0;
            } else if (swiper.destroyed) {
                swiper = enableSwiper();
            }
        }, 100);
    }

    $(window).on('resize', breakpointChecker);
    breakpointChecker();*/
})

function enableSwiper() {
    /*const sw = new Swiper('.fullpage', {
        modules: [Pagination, Mousewheel],
        direction: 'vertical',
        threshold: 25,
        spaceBetween: 150,
        mousewheel: {
            forceToAxis: true,
        },
        pagination: {
            el: '.header__nav-list',
            type: 'bullets',
            renderBullet: function (index, className) {
                return `<li class="${className}" rel="${paginationRels[index]}"><p class="nav-item__text">${paginationNames[index]}</p></li>`
            },
            bulletClass: 'header__nav-item',
            bulletActiveClass: 'header__nav-item_active',
            verticalClass: 'pagination-vertical',
            clickable: true,
        },
    });*/

    /*$('.header__nav-item').on('click', function() {
        if ($(window).width() <= 768) {
            $('.header__nav-item_active').removeClass('header__nav-item_active');
            $(this).addClass('header__nav-item_active');
            $('.header').removeClass('header_active');
            $($(this).attr('rel')).get(0).scrollIntoView({behavior: 'smooth'});
        }
    });

    return sw;*/

/*    return new Splide('.fullpage', {
        direction: 'ttb',
        heightRatio: 1,
        drag: true,
        dragMinThreshold: {
            mouse: 25,
            touch: 25,
        },
        arrows: false,
        pagination: false,
    });*/
}
