import {Swiper, Grid} from 'swiper';
import 'swiper/css';
import 'swiper/css/grid'

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
    });

    const projects_swiper = new Swiper('.projects__list', {
        modules: [Grid],
        slidesPerView: 1,
        spaceBetween: 15,
        grid: {
            rows: 1,
        },
        breakpoints: {
            376: {
                slidesPerView: 1,
                grid: {
                    rows: 1,
                },
            },
            451: {
                slidesPerView: 1.25,
                grid: {
                    rows: 1,
                },
            },
            577: {
                slidesPerView: 1.5,
                grid: {
                    rows: 1,
                },
            },
            769: {
                grid: {
                    rows: 2,
                },
                slidesPerView:3,
           }
        }
    })
});
