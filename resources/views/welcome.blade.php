<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Креативное Агенство PinG</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/public/img/favicon_180x180.ico">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="/public/img/favicon_32x32.ico">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="/public/img/favicon_16x16.ico">

    <link rel="stylesheet" href="/public/css/index.css">
    <link href="/public/fonts/Play-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link href="/public/fonts/Play-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link href="/public/fonts/TTSquares-Black.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" as="image" href="/public/img/loader__logo.png">
    <link rel="preload" as="image" href="/public/img/bg.png">
    <script src="/public/js/libs/jquery-3.6.1.min.js"></script>
    <script src="/public/js/libs/yall.js" type="module"></script>
    <script src="/public/js/index.js"></script>
</head>
<style>
    .loader {
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: url("/public/img/bg.png");
        z-index: 9999;
    }
    .loader_active {
        z-index: 9999;
    }
    .loader__wrap {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: -5%;
    }
    .loader__logo {
        width: min(43.28vw, 830px);
    }
    @media (min-width: 1921px) {
        .loader__logo {
            width: min(43.28vw, 1107px);
        }
    }
    @media (max-width: 991px) {
        .loader__logo {
            width: 450px;
        }
    }
    @media (max-width: 576px) {
        .loader__logo {
            max-width: 95vw;
        }
    }
    .loader__progress {
        width: 1000px;
        height: 23px;
        box-sizing: border-box;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin-top: clamp(25px, 3.9vw, 60px);
        padding: 3px;
        transform: skewX(-16deg);
        border: 1px solid #FFFFFF;
    }
    @media (min-width: 2200px) {
        .loader__progress {
            width: 1250px;
        }
    }
    @media (min-width: 1921px) {
        .loader__progress {
            height: clamp(23px, 1.09vw, 28px);
            margin-top: clamp(25px, 3.9vw, 100px);
        }
    }
    @media (max-width: 1600px) {
        .loader__progress {
            width: 750px;
        }
    }
    @media (max-width: 1340px) {
        .loader__progress {
            width: 600px;
        }
    }
    @media (max-width: 991px) {
        .loader__progress {
            width: 500px;
        }
    }
    @media (max-width: 768px) {
        .loader__progress {
            width: 450px;
        }
    }
    @media (max-width: 576px) {
        .loader__progress {
            width: 400px;
        }
    }
    @media (max-width: 450px) {
        .loader__progress {
            width: 330px;
        }
    }
    @media (max-width: 375px) {
        .loader__progress {
            width: 280px;
        }
    }
    .loader__progress::before {
        content: "";
        width: 2px;
        height: calc(100% + 2px);
        box-sizing: border-box;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(-8px, -50%);
        background: #8E0CD0;
    }
    .loader__el {
        width: calc((1000px - 2 * 3px - 71 * 4px) / 71);
        height: 100%;
        flex-shrink: 0;
        margin-right: 4px;
        background: #90FFFF;
        opacity: 0;
        transition: 0.35s opacity;
    }
    .loader__el:last-child {
        margin-right: 0;
    }
    .loader__el_active {
        opacity: 1;
    }
    @media (min-width: 2200px) {
        .loader__el {
            width: calc((1250px - 2 * 3px - 71 * 4px) / 71);
        }
    }
    @media (max-width: 1600px) {
        .loader__el {
            width: calc((750px - 2 * 3px - 50 * 4px) / 50);
        }
        .loader__el:nth-last-child(-n+21) {
            display: none;
        }
    }
    @media (max-width: 1340px) {
        .loader__el {
            width: calc((600px - 2 * 3px - 40 * 4px) / 40);
        }
        .loader__el:nth-last-child(-n+31) {
            display: none;
        }
    }
    @media (max-width: 991px) {
        .loader__el {
            width: calc((500px - 2 * 3px - 35 * 4px) / 35);
        }
        .loader__el:nth-last-child(-n+36) {
            display: none;
        }
    }
    @media (max-width: 768px) {
        .loader__el {
            width: calc((450px - 2 * 3px - 27 * 4px) / 27);
        }
        .loader__el:nth-last-child(-n+44) {
            display: none;
        }
    }
    @media (max-width: 576px) {
        .loader__el {
            width: calc((400px - 2 * 3px - 24 * 4px) / 24);
        }
        .loader__el:nth-last-child(-n+47) {
            display: none;
        }
    }
    @media (max-width: 450px) {
        .loader__el {
            width: calc((330px - 2 * 3px - 20 * 4px) / 20);
        }
        .loader__el:nth-last-child(-n+51) {
            display: none;
        }
    }
    @media (max-width: 375px) {
        .loader__el {
            width: calc((280px - 2 * 3px - 16 * 4px) / 16);
        }
        .loader__el:nth-last-child(-n+55) {
            display: none;
        }
    }
    .loader__text-wrap {
        margin-top: 30px;
        text-align: center;
    }
    @media (max-width: 991px) {
        .loader__text-wrap {
            margin-top: 20px;
        }
    }
    .loader__text {
        font-family: Play, sans-serif;
        font-weight: 400;
        font-size: 25px;
        color: #FFFFFF;
    }
    @media (min-width: 1921px) {
        .loader__text {
            font-size: clamp(25px, 1.25vw, 32px);
        }
    }

    .main_disabled {
        display: block !important;
    }
</style>
<body class="body">
<div class="loader loader_active">
    <div class="loader__wrap">
        <img src="/public/img/loader__logo.png" alt="" class="loader__logo">
        <div class="loader__progress">
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
            <div class="loader__el"></div>
        </div>
        <div class="loader__text-wrap">
            <p class="loader__text">
                <span class="loader__text-percents">0</span>
                %
            </p>
        </div>
    </div>
</div>
<script>
    $('body').css('overflow', 'hidden');
    (function() {
        let loadRatio = 0
        const intervalID = setInterval(() => {
            loadRatio += 0.02;
            if (loadRatio >= 1) {
                clearInterval(intervalID);
                finishLoad();
            } else {
                changeLoaderPercent(loadRatio)
            }
        },100)
    }());

    $(window).on('load', function() {
        finishLoad();
    });

    function changeLoaderPercent(ratio) {
        if ($('.loader__text-percents').hasClass('finished')) {
            return false;
        }

        const percents = ratio * 100;
        let elementsAmount = 0;
        $('.loader__text-percents').html(percents.toFixed());

        $('.loader__el').each(function(idx) {
            if ($(this).css('display') === 'none') {
                return false;
            }

            elementsAmount++;
        });

        $('.loader__el').each(function(idx) {
            if ($(this).css('display') === 'none' || ratio < (idx + 1) / elementsAmount) {
                return false;
            }
            const isHidden = !$(this).hasClass('loader__el_active');

            if (isHidden) {
                if (idx + 1 === elementsAmount) {
                    if (document.readyState === 'complete') {
                        $(this).addClass('loader__el_active');
                    } else {
                        return false;
                    }
                } else {
                    $(this).addClass('loader__el_active');
                }
            }
        });
    }

    function finishLoad() {
        changeLoaderPercent(1);
        $('.loader__text-percents').addClass('finished');
        $('body').css('overflow', 'auto');
        $('.loader').fadeOut(500);
        $('.main').fadeIn(750);
    }
</script>
<div class="popup" id="loader__popup">
    <div class="popup-loader popup__loader">
        <div class="popup-loader__ring"></div>
    </div>
</div>
<div class="popup" id="popup1">
    <div class="popup__body">
        <div class="popup__content">
            <div class="popup__wrap">
                <div class="popup__border close_popup">
                    <p class="popup__close">{{ __('Close') }}</p>
                </div>
            </div>
            <p class="popup__text">
                {{ __('Our task is to help brands build and establish partnerships with key representatives of gaming culture, well-known players and opinion leaders and make them known amongst the gaming community') }}.
            </p>
            <p class="popup__text">
                {{ __('We apply our experience in marketing and PR communications in esports to  create a global ecosystem of cybersports and well-established communications between companies and the industry') }}.
            </p>
            <div class="popup__icon-wrap">
                <p class="popup__icon">!</p>
            </div>
        </div>
    </div>
</div>
<div class="popup popup_phrase" id="phrase_andrey">
    <div class="popup__body">
        <div class="popup__content popup__content_phrase">
            <img src="/public/img/cross.svg" alt="" class="popup-phrase__cross close_popup">
            <p class="popup__text popup__text_xl popup__text_bold">
                {{ __('I also like: argue with your friends on discord about your next purchase of a co-op game on Steam') }}
            </p>
        </div>
    </div>
</div>
<div class="popup popup_phrase" id="phrase_vika">
    <div class="popup__body">
        <div class="popup__content popup__content_phrase">
            <img src="/public/img/cross.svg" alt="" class="popup-phrase__cross close_popup">
            <p class="popup__text popup__text_xl popup__text_bold">
                {{ __('I also like: buying Battle Pass in the games but never levelling it') }}
            </p>
        </div>
    </div>
</div>
<div class="popup popup_phrase" id="phrase_anton">
    <div class="popup__body">
        <div class="popup__content popup__content_phrase">
            <img src="/public/img/cross.svg" alt="" class="popup-phrase__cross close_popup">
            <p class="popup__text popup__text_xl popup__text_bold">
                {{ __('I also like: planning a whole bunch of streams only to never start them') }}
            </p>
        </div>
    </div>
</div>
<div class="popup popup_phrase" id="phrase_ruslan">
    <div class="popup__body">
        <div class="popup__content popup__content_phrase">
            <img src="/public/img/cross.svg" alt="" class="popup-phrase__cross close_popup">
            <p class="popup__text popup__text_xl popup__text_bold">
                {{ __('I also like: sharing pictures of my cat') }}
            </p>
        </div>
    </div>
</div>
<div class="popup popup_phrase" id="phrase_maxim">
    <div class="popup__body">
        <div class="popup__content popup__content_phrase">
            <img src="/public/img/cross.svg" alt="" class="popup-phrase__cross close_popup">
            <p class="popup__text popup__text_xl popup__text_bold">
                {{ __('I also like: riding a bicycle for at least 20 kms straight') }}
            </p>
        </div>
    </div>
</div>
<div class="popup popup_phrase" id="phrase_andrey">
    <div class="popup__body">
        <div class="popup__content popup__content_phrase">
            <img src="/public/img/cross.svg" alt="" class="popup-phrase__cross close_popup">
            <p class="popup__text popup__text_xl popup__text_bold">
                {{ __('I also like: argue with your friends on discord about your next purchase of a co-op game on Steam') }}
            </p>
        </div>
    </div>
</div>
<div class="popup popup_info" id="popup-success">
    <div class="popup__body">
        <div class="popup__content popup__content_phrase popup__content_info">
            <img src="/public/img/cross.svg" alt="" class="popup-phrase__cross close_popup">
            <p class="popup__text popup__text_xl popup__text_bold">
                {{ __('Your form was sent. Thanks!') }}

            </p>
        </div>
    </div>
</div>
<div class="popup popup_info" id="popup-error">
    <div class="popup__body">
        <div class="popup__content popup__content_phrase popup__content_info">
            <img src="/public/img/cross.svg" alt="" class="popup-phrase__cross close_popup">
            <p class="popup__text popup__text_xl popup__text_bold">
                {{ __('An error occurred. Try again.') }}
            </p>
        </div>
    </div>
</div>
<div class="popup popup-video" id="video__popup">
    <div class="popup-video__wrap">
        <iframe class="popup-video__content" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <img src="/public/img/cross.svg" alt="" class="popup-video__cross">
    </div>
</div>
<div class="container main">
    <div class="header__nav_sm">
        <img src="/public/img/logo_sm.png" alt="" class="header__logo header__logo_sm">
        <div class="header__burger">
            <div class="header__burger-line"></div>
            <div class="header__burger-line"></div>
            <div class="header__burger-line"></div>
        </div>
    </div>
    <div class="header">
        <div class="header__bg_sm"></div>
        <div class="header__wrapper">
            <img class="header__logo" src="/public/img/logo.svg" alt="">
            <nav class="header__nav">
                <ul class="header__nav-list">

                </ul>
                <div  class="header__nav-item header__language">
                    <p class="header__language-item">
                        <a class="header__language-item-lang {{ App::currentLocale() === 'ru' ? 'active' : '' }}" href="/locale/ru">Ru</a>
                        /
                        <a class="header__language-item-lang {{ App::currentLocale() === 'en' ? 'active' : '' }}" href="/locale/en">En</a>
                    </p>
                </div>
            </nav>
            <div class="header__nav header__nav_mobile">
                <ul class="header__nav-list_sm">
                    <li class="header__nav-item" rel="#about_section">
                        <p class="nav-item__text">{{ __('About') }}</p>
                    </li>
                    <li class="header__nav-item" rel="#services_section">
                        <p class="nav-item__text">{{ __('Services') }}</p>
                    </li>
                    <li class="header__nav-item" rel="#team_section">
                        <p class="nav-item__text">{{ __('Team') }}</p>
                    </li>
                    <li class="header__nav-item" rel="#reviews_section">
                        <p class="nav-item__text">{{ __('Reviews') }}</p>
                    </li>
                    <li class="header__nav-item" rel="#contacts_section">
                        <p class="nav-item__text">{{ __('Contacts') }}</p>
                    </li>
                    <a href="/locale/{{ App::currentLocale() == 'en' ? 'ru' : 'en' }}" class="header__nav-item header__nav-language">
                        <p class="nav-item__text">
                            <span class="{{ App::currentLocale() === 'ru' ? 'nav-item__text_underlined' : '' }}">Ru</span> /
                            <span class="{{ App::currentLocale() === 'en' ? 'nav-item__text_underlined' : '' }}">En</span>
                        </p>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <div class="content fullpage">
        <div class="swiper-wrapper">
            <div class="section swiper-slide" id="about_section">
                <div class="section__wrapper">
                    <video class="about__video" draggable="false" autoplay muted loop preload="auto">
                        <source src="/public/videos/main.mp4" type="video/mp4">
                    </video>
                    <div class="about">
                        <div class="about__wrap">
                            <h1 class="about__title">
                                {{ __('About') }}
                            </h1>
                            <p class="about__text about__text_blue">
                                {{ __('PinG is a creative agency that’s all about cybersports, gaming and  geek culture') }}.
                            </p>
                        </div>
                        <p class="about__text about__text-description">
                            <span class="about__text_purple">PinG</span> {{ __('is your guide in the world of marketing for gaming communities. We will help to tell stories about your brand and find suitable opportunities for its promotion to those who share its values') }}.
                        </p>
                    </div>
                    <div class="quest">
                        <h2 class="quest__title">
                            {{ __('Main') }} <br> {{ __('quest') }}
                            <span class="quest__icon-wrap quest__icon-wrap_sm show_popup" rel="popup1">
                                    <span class="quest__icon" rel="popup1">!</span>
                                </span>
                        </h2>
                        <p class="quest__text">
                                <span class="quest__icon-wrap show_popup" rel="popup1">
                                    <span class="quest__icon">!</span>
                                </span>
                            {{ __('We create and implement turnkey creative campaigns, manage events and offer strategic consulting for brands and well-known players') }}.
                        </p>
                    </div>
                    <div class="partners">
                        <h2 class="partners__title">{{ __('Partners') }}</h2>
                        <div class="partners__list-wrapper">
                            <div class="partners__list">
                                <img class="partners__img partners__img_xl" draggable="false" src="/public/img/partners/igromania 2.png" alt="">
                                <img class="partners__img partners__img_sm" draggable="false" src="/public/img/partners/wd.svg" alt="">
                                <img class="partners__img partners__img_xxl" draggable="false" src="/public/img/partners/universal.svg" alt="">
                                <img class="partners__img partners__img_xxl" draggable="false" src="/public/img/partners/ubisoft 2.png" alt="">
                                <img class="partners__img partners__img_regular" draggable="false" src="/public/img/partners/kanobu.svg" alt="">
                                <img class="partners__img partners__img_xxl" draggable="false" src="/public/img/partners/lg.png" alt="">
                                <img class="partners__img partners__img_xl" draggable="false" src="/public/img/partners/dtf 2.png" alt="">
                                <img class="partners__img partners__img_regular" draggable="false" src="/public/img/partners/syberia 2.png" alt="">
                                <img class="partners__img partners__img_regular" draggable="false" src="/public/img/partners/sports_ru 2.png" alt="">
                                <img class="partners__img partners__img_sm" draggable="false" src="/public/img/partners/viewsonic 2.png" alt="">
                                <img class="partners__img partners__img_xxl" draggable="false" src="/public/img/partners/cm.png" alt="">
                                <img class="partners__img partners__img_xl" draggable="false" src="/public/img/partners/vk.svg" alt="">
                                <img class="partners__img partners__img_xl" draggable="false" src="/public/img/partners/fond.png" alt="">
                            </div>
                            <div class="partners__list">
                                <img class="partners__img partners__img_xl" draggable="false" src="/public/img/partners/igromania 2.png" alt="">
                                <img class="partners__img partners__img_sm" draggable="false" src="/public/img/partners/wd.svg" alt="">
                                <img class="partners__img partners__img_xxl" draggable="false" src="/public/img/partners/universal.svg" alt="">
                                <img class="partners__img partners__img_xxl" draggable="false" src="/public/img/partners/ubisoft 2.png" alt="">
                                <img class="partners__img partners__img_regular" draggable="false" src="/public/img/partners/kanobu.svg" alt="">
                                <img class="partners__img partners__img_xxl" draggable="false" src="/public/img/partners/lg.png" alt="">
                                <img class="partners__img partners__img_xl" draggable="false" src="/public/img/partners/dtf 2.png" alt="">
                                <img class="partners__img partners__img_regular" draggable="false" src="/public/img/partners/syberia 2.png" alt="">
                                <img class="partners__img partners__img_regular" draggable="false" src="/public/img/partners/sports_ru 2.png" alt="">
                                <img class="partners__img partners__img_sm" draggable="false" src="/public/img/partners/viewsonic 2.png" alt="">
                                <img class="partners__img partners__img_xxl" draggable="false" src="/public/img/partners/cm.png" alt="">
                                <img class="partners__img partners__img_xl" draggable="false" src="/public/img/partners/vk.svg" alt="">
                                <img class="partners__img partners__img_xl" draggable="false" src="/public/img/partners/fond.png" alt="">
                            </div>
                        </div>
                        <div class="partners__line"></div>
                    </div>
                </div>
            </div>
            <div class="section swiper-slide" id="services_section">
                <div class="section__wrapper section__wrapper_no-overflow">
                    <div class="services__header">
                        <h1 class="services__title" id="services__title">{{ __('Services') }}</h1>
                        <div class="services__line"></div>
                    </div>
                    <div class="services__wrap services__wrap_active" id="services">
                        <div class="services__list">
                            <div class="services__list-item show-services" rel="tournaments">
                                <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_1.png" alt="">
                                <p class="services__list-text">{{ __('Tournaments') }}</p>
                            </div>
                            <div class="services__list-item show-services" rel="specialProjects">
                                <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_2.png" alt="">
                                <p class="services__list-text">{{ __('Spec projects') }}</p>
                            </div>
                            <div class="services__list-item show-services" rel="offline">
                                <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_3.png" alt="">
                                <p class="services__list-text">{{ __('Offline events') }}</p>
                            </div>
                            <div class="services__list-item show-services" rel="digital">
                                <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_4.png" alt="">
                                <p class="services__list-text">{{ __('Digital ads') }}</p>
                            </div>
                            <div class="services__list-item show-services" rel="design">
                                <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_5.png" alt="">
                                <p class="services__list-text">{{ __('Design') }}</p>
                            </div>
                            <div class="services__list-item services__list-item_non-blur show-services" rel="projects">
                                <p class="services__list-text">{{ __('All projects') }}</p>
                            </div>
                        </div>
                        <div class="services__list_sm">
                            <div class="services__swiper">
                                <div class="swiper-wrapper">
                                    <div class="services__list-item services__list-item_sm swiper-slide show-services"
                                         rel="tournaments">
                                        <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_1.png"
                                             alt="">
                                        <p class="services__list-text">{{ __('Tournaments') }}</p>
                                    </div>
                                    <div class="services__list-item services__list-item_sm swiper-slide show-services" rel="specialProjects">
                                        <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_2.png"
                                             alt="">
                                        <p class="services__list-text">{{ __('Spec projects') }}</p>
                                    </div>
                                    <div class="services__list-item services__list-item_sm swiper-slide show-services" rel="offline">
                                        <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_3.png"
                                             alt="">
                                        <p class="services__list-text">{{ __('Offline events') }}</p>
                                    </div>
                                    <div class="services__list-item services__list-item_sm swiper-slide show-services" rel="digital">
                                        <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_4.png" alt="">
                                        <p class="services__list-text">{{ __('Digital ads') }}</p>
                                    </div>
                                    <div class="services__list-item services__list-item_sm swiper-slide show-services" rel="design">
                                        <img class="services__list-img" draggable="false" src="/public/img/services/dir_desc_5.png"
                                             alt="">
                                        <p class="services__list-text">{{ __('Design') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services__list-line"></div>
                        <div class="services__btn-wrap">
                            <button class="services__btn show-services" rel="projects">
                                <span class="services__btn-text">
                                    {{ __('All projects') }}
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="services-full">
                        <div class="project services__wrap" id="tournaments">
                            <div class="project__content">
                                <div class="project__img-wrap">
                                    <img class="project__img" draggable="false" src="/public/img/services/dir_desc_1.png" alt="">
                                </div>
                                <div class="project__wrap">
                                    <h2 class="project__title">{{ __('Tournaments') }}</h2>
                                    <p class="project__text">{{ __('In esports, tournaments are an efficient way for brands to promote to a new audience, engage them in the product and establish a direct contact between the brand and the consumer. Our team knows that behind each tournament lies a concept and a strategy') }}.</p>
                                    <p class="project__text">
                                        {{ __('We organize turnkey tournaments:') }}
                                        <span class="project__text_blue">{{ __('come up with ideas how to use the tournament to advertise your brand or product in a native way') }}</span>, <span class="project__text_blue">{{ __('develop a set of rules and regulations for participants') }}</span>, <span class="project__text_blue">{{ __('plan and manage the matches') }}</span>, <span class="project__text_blue">{{ __('coordinate on-set') }}</span>.
                                    </p>
                                </div>
                                <div class="project__btn show-services" rel="services">
                                    <p class="project__btn-text">{{ __('To other services') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="project services__wrap" id="specialProjects">
                            <div class="project__content">
                                <div class="project__img-wrap">
                                    <img class="project__img" draggable="false" src="/public/img/services/dir_desc_2.png" alt="">
                                </div>
                                <div class="project__wrap">
                                    <h2 class="project__title">{{ __('Spec projects') }}</h2>
                                    <p class="project__text">{{ __('Special projects with gamification help to attract and engage the audience in an advertising campaign, as well as in the culture of the brand and its product') }}.
                                    </p>
                                    <p class="project__text">
                                        {{ __('Based on your marketing objectives, we can create unique special projects of various formats and scales: from') }} <span class="project__text_blue">{{ __('entertaining game shows') }}</span> {{ __('to') }} <span class="project__text_blue">{{ __('news digests with augmented widgets') }}</span>.
                                    </p>
                                    <p class="project__text">{{ __('It is important for us to convey brand values to consumers, clearly present the product to the community and spark its interest') }}.</p>
                                </div>
                                <div class="project__btn show-services" rel="services">
                                    <p class="project__btn-text">{{ __('To other services') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="project services__wrap" id="offline">
                            <div class="project__content">
                                <div class="project__img-wrap">
                                    <img class="project__img" draggable="false" src="/public/img/services/dir_desc_3.png" alt="">
                                </div>
                                <div class="project__wrap">
                                    <h2 class="project__title">{{ __('Offline events') }}</h2>
                                    <p class="project__text">{{ __("We produce fascinating and exciting events that help our clients reach their goals. For that, we offer creative solutions and come up with a format of the event, based on the client's requests") }}.</p>
                                    <p class="project__text">
                                        {{ __("Here's a list of events we can organize for you") }}:
                                        <span class="project__text_blue">{{ __('lan-finals') }}</span>, <span class="project__text_blue">
                                            {{ __('presentations') }}</span>, <span class="project__text_blue">
                                            {{ __('exhibitions') }}</span>, <span class="project__text_blue">
                                            {{ __('theme parties') }}</span>, <span class="project__text_blue">
                                            {{ __('corporate events') }}</span>, <span class="project__text_blue">
                                            {{ __('team building') }}</span>, <span class="project__text_blue">
                                            {{ __('festivals') }}</span>.
                                    </p>
                                </div>
                                <div class="project__btn show-services" rel="services">
                                    <p class="project__btn-text">{{ __('To other services') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="project services__wrap" id="digital">
                            <div class="project__content">
                                <div class="project__img-wrap">
                                    <img class="project__img" draggable="false" src="/public/img/services/dir_desc_4.png" alt="">
                                </div>
                                <div class="project__wrap">
                                    <h2 class="project__title">{{ __('Digital ads') }}</h2>
                                    <p class="project__text">{{ __("We know which digital platforms and social networks are popular with the esports community. Our team will develop a communication and marketing campaign for your brand, which the target audience will definitely notice - and which will reach the brand's image and business objectives") }}.</p>
                                    <p class="project__text">
                                        {{ __('We create individual marketing campaigns') }}: <span class="project__text_blue">
                                            {{ __('placement of brand promotions') }}</span>, <span class="project__text_blue">
                                            {{ __('influencer engagement and social media coverage') }}</span>, <span class="project__text_blue">
                                            {{ __('brand coverage on streams') }}</span>, <span class="project__text_blue">{{ __('voice mentions') }}</span>, <span class="project__text_blue">
                                            {{ __('banner on the broadcast and in the channel description') }}</span>.
                                    </p>
                                </div>
                                <div class="project__btn show-services" rel="services">
                                    <p class="project__btn-text">{{ __('To other services') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="project services__wrap" id="design">
                            <div class="project__content">
                                <div class="project__img-wrap">
                                    <img class="project__img" draggable="false" src="/public/img/services/dir_desc_5.png" alt="">
                                </div>
                                <div class="project__wrap">
                                    <h2 class="project__title">{{ __('Creative services') }}</h2>
                                    <p class="project__text">{{ __("The appearance of integrations is very important for the perception of an advertising campaign and the transmission of the brand's key messages: from the design of the live broadcast studio of the championship to banners and all things digital") }}.</p>
                                    <p class="project__text">
                                        {{ __("We will develop and prepare a design code for you from scratch or prepare layouts based on the company's brandbook and your wishes: our services also include") }} <span class="project__text_blue">{{ __('printing products with a personal identity') }}</span>, <span class="project__text_blue">{{ __('development and production of merchandise') }}</span>, <span class="project__text_blue">{{ __('pos materials and decorative elements') }}</span>.
                                    </p>
                                </div>
                                <div class="project__btn show-services" rel="services">
                                    <p class="project__btn-text">{{ __('To other services') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services__wrap" id="projects">
                        <div class="projects__list">
                            <div class="swiper-wrapper">
                                <div class="services__list-item services__list-item_non-blur swiper-slide show-services projects__return" rel="services">
                                    <p class="services__list-text">{{ __('Go back') }}</p>
                                </div>
                                @foreach($projects as $project)
                                    <div class="services__list-item swiper-slide show-services" rel="project{{ $project->id }}">
                                        @if (explode('/', mime_content_type(base_path() . '/img/preview/' . $project->preview))[0] === 'video')
                                            <video class="services__list-img lazy initialize" draggable="false" src="/img/preview/{{ $project->preview }}" muted loop preload="auto" playsinline></video>
                                        @else
                                            <img class="services__list-img" alt="" draggable="false" src="/img/preview/{{ $project->preview }}">
                                        @endif
                                        <p class="services__list-text">{{ $project->title }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="projects__controls">
                            <div class="services__list-line"></div>
                            <div class="services__btn-wrap">
                                <button class="services__btn show-services" rel="services">
                                    <span class="services__btn-text">
                                        {{ __('Go back') }}
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="projects-full">
                        @foreach($projects as $project)
                            <div class="project services__wrap" id="project{{ $project->id }}">
                                <div class="project__content">
                                    <a
                                        href="{{ $project->is_vk ? $project->video : '' }}"
                                        target="{{ $project->is_vk ? '_blank' : '_self' }}"
                                        class="project__img-wrap project__img-wrap_clickable"
                                        data-video-embed="{{ $project->is_vk ? '' : ($project->video . '?enablejsapi=1&origin=https://peopleingaming.com/') }}"
                                    >
                                        @if (explode('/', mime_content_type(base_path() . '/img/media/' . $project->pic))[0] === 'video')
                                            <video class="project__img project__img_blurred lazy initialize" draggable="false" src="/img/media/{{ $project->pic }}" muted loop preload="auto" playsinline></video>
                                        @else
                                            <img class="project__img project__img_blurred" draggable="false" alt="" src="/img/media/{{ $project->pic }}">
                                        @endif

                                        <svg viewBox="0 0 42 42" class="project__video-icon">
                                            <path class="project__video-icon-path" d="M37.7051 13.6966C37.521 13.0661 37.1605 12.4913 36.6596 12.0296C36.1587 11.5679 35.535 11.2356 34.851 11.0659C32.332 10.4375 22.2096 10.4375 22.2096 10.4375C22.2096 10.4375 12.0873 10.4375 9.56825 11.0659C8.88423 11.2356 8.26056 11.5679 7.75967 12.0296C7.25878 12.4913 6.89824 13.0661 6.71412 13.6966C6.24376 16.0645 6.01551 18.4678 6.03236 20.875C6.01551 23.2822 6.24376 25.6856 6.71412 28.0534C6.89824 28.6839 7.25878 29.2588 7.75967 29.7204C8.26056 30.1821 8.88423 30.5144 9.56825 30.6841C12.0873 31.3125 22.2096 31.3125 22.2096 31.3125C22.2096 31.3125 32.332 31.3125 34.851 30.6841C35.535 30.5144 36.1587 30.1821 36.6596 29.7204C37.1605 29.2588 37.521 28.6839 37.7051 28.0534C38.1755 25.6856 38.4037 23.2822 38.3869 20.875C38.4037 18.4678 38.1755 16.0645 37.7051 13.6966ZM18.9742 25.3482V16.4018L27.3748 20.875L18.9742 25.3482Z" fill="#FFFFFF"/>
                                        </svg>
                                    </a>
                                    <div class="project__wrap">
                                        <h2 class="project__title">{{ $project->title }}</h2>
                                        {!! $project->description !!}
                                    </div>
                                    <div class="project__btn show-services" rel="projects">
                                        <p class="project__btn-text">
                                            {{ __('To other projects') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="section swiper-slide" id="team_section">
                <div class="section__wrapper">
                    <div class="team">
                        <div class="team__header">
                            <h1 class="services__title">{{ __('Team') }}</h1>
                            <div class="services__line team__header-line"></div>
                        </div>
                        <div class="team__content">
                            <div class="team__item team__item_active">
                                <div class="team__phrase">
                                    <img src="/public/img/team/team__phrase-icon.svg" draggable="false" alt="" class="team__phrase-icon">
                                    <div class="team__phrase-content">
                                        <p class="team__phrase-text">
                                            {{ __('I also like: argue with your friends on discord about your next purchase of a co-op game on Steam') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="team__img-wrap">
                                    <img class="team__img_shadow" draggable="false" src="/public/img/team/team1.png" alt="">
                                    <img class="team__img" draggable="false" src="/public/img/team/team1.png" alt="">
                                </div>
                                <div class="team__about">
                                    <div class="team__wrap">
                                        <h2 class="team__name">{{ __('Andrey Dubchak') }}</h2>
                                        <p class="team__title">{{ __("I’m responsible for") }}:</p>
                                    </div>

                                    <ul class="team__list">
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Promotion strategy and financial estimates') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Creative events and activations') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __("Product's integration into the esports industry")  }}</p>
                                        </li>
                                    </ul>
                                    <div class="team__socials">
                                        @if (App::currentLocale() == 'ru')
                                            <a href="https://vk.com/cd_tux0" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                          fill="#4F4F4F"/>
                                                    <path
                                                        class="contacts__icon-path"
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                        fill="#1E1E1E"
                                                    />
                                                </svg>
                                            </a>
                                        @else
                                            <a
                                                href="https://www.facebook.com/cdtux0"
                                                class="team__socials-item"
                                                target="_blank"
                                            >
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                        @endif
                                        <a href="https://t.me/cd_tux0" class="team__socials-item" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.625" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                        <a href="mailto:dubchak@ping.moscow" class="team__socials-item" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                      fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team__item">
                                <div class="team__phrase">
                                    <img src="/public/img/team/team__phrase-icon.svg" draggable="false" alt="" class="team__phrase-icon">
                                    <div class="team__phrase-content">
                                        <p class="team__phrase-text">
                                            {{ __('I also like: buying Battle Pass in the games but never levelling it') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="team__img-wrap">
                                    <img class="team__img_shadow" draggable="false" src="/public/img/team/team2.png" alt="">
                                    <img class="team__img" draggable="false" src="/public/img/team/team2.png" alt="">
                                </div>
                                <div class="team__about">
                                    <div class="team__wrap">
                                        <h2 class="team__name">{{ __('Victoria Martoyan') }}</h2>
                                        <p class="team__title">{{ __("I’m responsible for") }}:</p>
                                    </div>
                                    <ul class="team__list">
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Live streams graphic design') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Venue design solutions') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Social media design') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Creation of an individual merch') }}</p>
                                        </li>
                                    </ul>
                                    <div class="team__socials">
                                        @if (App::currentLocale() == 'ru')
                                            <a href="https://vk.com/v1ktorika" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                          fill="#4F4F4F"/>
                                                    <path
                                                        class="contacts__icon-path"
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                        fill="#1E1E1E"
                                                    />
                                                </svg>
                                            </a>
                                        @else
                                            <a
                                                href="https://www.facebook.com/profile.php?id=100053719274059"
                                                class="team__socials-item"
                                                target="_blank"
                                            >
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                        @endif
                                        <a href="https://t.me/V1ktorika" class="team__socials-item" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.625" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                        <a href="mailto:viktoria@ping.moscow" class="team__socials-item"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                      fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="team__item">
                                <div class="team__phrase">
                                    <img src="/public/img/team/team__phrase-icon.svg" draggable="false" alt="" class="team__phrase-icon">
                                    <div class="team__phrase-content">
                                        <p class="team__phrase-text">
                                            {{ __('I also like: planning a whole bunch of streams only to never start them') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="team__img-wrap">
                                    <img class="team__img_shadow" draggable="false" src="/public/img/team/team3.png" alt="">
                                    <img class="team__img" draggable="false" src="/public/img/team/team3.png" alt="">
                                </div>
                                <div class="team__about">
                                    <div class="team__wrap">
                                        <h2 class="team__name">{{ __('Anton Murashov') }}</h2>
                                        <p class="team__title">{{ __("I’m responsible for") }}:</p>
                                    </div>
                                    <ul class="team__list">
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Advising on projects of varying complexity') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Creative ideas generation and realization') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Influencer recruitment') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Partnership with clients') }}</p>
                                        </li>
                                    </ul>
                                    <div class="team__socials">
                                        @if (App::currentLocale() == 'ru')
                                            <a href="https://vk.com/deeoneezy" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">

                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                          fill="#4F4F4F"/>
                                                    <path
                                                        class="contacts__icon-path"
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                        fill="#1E1E1E"
                                                    />
                                                </svg>
                                            </a>
                                        @else
                                            <a
                                                href="https://www.facebook.com/eaexelle"
                                                class="team__socials-item"
                                                target="_blank"
                                            >
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                        @endif
                                        <a href="https://t.me/deeoneezy" class="team__socials-item" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.625" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                        <a href="mailto:murashov@ping.moscow" class="team__socials-item"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                      fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>--}}
                            <div class="team__item">
                                <div class="team__phrase">
                                    <img src="/public/img/team/team__phrase-icon.svg" draggable="false" alt="" class="team__phrase-icon">
                                    <div class="team__phrase-content">
                                        <p class="team__phrase-text">
                                            {{ __('I also like: sharing pictures of my cat') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="team__img-wrap">
                                    <img class="team__img_shadow" draggable="false" src="/public/img/team/team4.png" alt="">
                                    <img class="team__img" draggable="false" src="/public/img/team/team4.png" alt="">
                                </div>
                                <div class="team__about">
                                    <div class="team__wrap">
                                        <h2 class="team__name">{{ __('Ruslan Sokolov') }}</h2>
                                        <p class="team__title">{{ __("I’m responsible for") }}:</p>
                                    </div>
                                    <ul class="team__list">
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Live stream organization') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Influencer recruitment') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __('Video production') }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">Event-management</p>
                                        </li>
                                    </ul>
                                    <div class="team__socials">
                                        @if (App::currentLocale() == 'ru')
                                            <a href="https://vk.com/onitaka" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">

                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                          fill="#4F4F4F"/>
                                                    <path
                                                        class="contacts__icon-path"
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                        fill="#1E1E1E"
                                                    />
                                                </svg>
                                            </a>
                                        @else
                                            <a
                                                href="https://www.facebook.com/rslnmb"
                                                class="team__socials-item"
                                                target="_blank"
                                            >
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                        @endif
                                        <a href="https://t.me/Ruslan_maybe" class="team__socials-item" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.625" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                        <a href="mailto:sokolov@ping.moscow" class="team__socials-item" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                      fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="team__item">
                                <div class="team__phrase">
                                    <img src="/public/img/team/team__phrase-icon.svg" draggable="false" alt="" class="team__phrase-icon">
                                    <div class="team__phrase-content">
                                        <p class="team__phrase-text">
                                            {{ __('I also like: riding a bicycle for at least 20 kms straight') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="team__img-wrap">
                                    <img class="team__img_shadow" draggable="false" src="/public/img/team/team5.png" alt="">
                                    <img class="team__img" draggable="false" src="/public/img/team/team5.png" alt="">
                                </div>
                                <div class="team__about">
                                    <div class="team__wrap">
                                        <h2 class="team__name">{{ __('Maxim Lagutkin') }}</h2>
                                        <p class="team__title">{{ __("I’m responsible for") }}:</p>
                                    </div>
                                    <ul class="team__list">
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __("PinG Communities events management") }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __("Social media promotion strategy and SMM") }}</p>
                                        </li>
                                        <li class="team__list-item">
                                            <p class="team__list-text">{{ __("Graphic content of the project") }}</p>
                                        </li>
                                    </ul>
                                    <div class="team__socials">
                                        @if (App::currentLocale() == 'ru')
                                            <a href="https://vk.com/lagustkin" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                          fill="#4F4F4F"/>
                                                    <path
                                                        class="contacts__icon-path"
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                        fill="#1E1E1E"
                                                    />
                                                </svg>
                                            </a>
                                        @else
                                            <a
                                                href="https://www.facebook.com/profile.php?id=100011623239774"
                                                class="team__socials-item"
                                                target="_blank"
                                            >
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                        @endif
                                        <a href="https://t.me/LAGUSTKIN" class="team__socials-item" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.625" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                        <a href="mailto:lagutkin@ping.moscow" class="team__socials-item" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                      fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team__content team__content_sm">
                            <div class="swiper team__swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide team__slide">
                                        <div class="team__img-wrap team__img-wrap_sm">
                                            <img src="/public/img/team/team1.png" draggable="false" alt=""
                                                 class="team__img_shadow team__img_shadow-sm">
                                            <img src="/public/img/team/team1.png" draggable="false" alt="" class="team__img team__img_sm">
                                        </div>
                                        <h2 class="team__name team__name_sm">
                                            {{ __('Andrey') }} <br> {{ __('Dubchak') }}
                                        </h2>
                                        <img src="/public/img/team/triangle.svg" draggable="false" alt="" class="team__triangle">
                                        <div class="team__socials team__socials_sm">
                                            @if (App::currentLocale() == 'ru')
                                                <a href="https://vk.com/cd_tux0"
                                                   class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path class="contacts__icon-path" fill-rule="evenodd"
                                                              clip-rule="evenodd"
                                                              d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                              fill="#1E1E1E"
                                                        />
                                                    </svg>
                                                </a>
                                            @else
                                                <a
                                                    href="https://www.facebook.com/cdtux0"
                                                    class="team__socials-item team__socials-item_sm"
                                                    target="_blank"
                                                >
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path class="contacts__icon-path"
                                                              d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                              fill="#1E1E1E"/>
                                                    </svg>
                                                </a>
                                            @endif
                                            <a href="https://t.me/cd_tux0"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.625" width="41.75"
                                                          height="41.75" rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <a href="mailto:dubchak@ping.moscow"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <div class="team__phrase_sm show_popup" rel="phrase_andrey">
                                                <img src="/public/img/team/team__phrase-icon_sm.svg" draggable="false" alt="" class="team__phrase-icon_sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide team__slide">
                                        <div class="team__img-wrap team__img-wrap_sm">
                                            <img src="/public/img/team/team2.png" draggable="false" alt=""
                                                 class="team__img_shadow team__img_shadow-sm">
                                            <img src="/public/img/team/team2.png" draggable="false" alt="" class="team__img team__img_sm">
                                        </div>
                                        <h2 class="team__name team__name_sm">
                                            {{ __('Victoria') }} <br> {{ __('Martoyan') }}
                                        </h2>
                                        <img src="/public/img/team/triangle.svg" draggable="false" alt="" class="team__triangle">
                                        <div class="team__socials team__socials_sm">
                                            @if (App::currentLocale() == 'ru')
                                                <a href="https://vk.com/v1ktorika"
                                                   class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">

                                                        <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path
                                                            class="contacts__icon-path"
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                            fill="#1E1E1E"
                                                        />
                                                    </svg>
                                                </a>
                                            @else
                                                <a
                                                    href="https://www.facebook.com/profile.php?id=100053719274059"
                                                    class="team__socials-item team__socials-item_sm"
                                                    target="_blank"
                                                >
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path class="contacts__icon-path"
                                                              d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                              fill="#1E1E1E"/>
                                                    </svg>
                                                </a>
                                            @endif
                                            <a href="https://t.me/V1ktorika"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.625" width="41.75"
                                                          height="41.75" rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <a href="mailto:viktoria@ping.moscow"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <div class="team__phrase_sm show_popup" rel="phrase_vika">
                                                <img src="/public/img/team/team__phrase-icon_sm.svg" draggable="false" alt="" class="team__phrase-icon_sm">
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="swiper-slide team__slide">
                                        <div class="team__img-wrap team__img-wrap_sm">
                                            <img src="/public/img/team/team3.png" draggable="false" alt=""
                                                 class="team__img_shadow team__img_shadow-sm">
                                            <img src="/public/img/team/team3.png" draggable="false" alt="" class="team__img team__img_sm">
                                        </div>
                                        <h2 class="team__name team__name_sm">
                                            {{ __('Anton') }} <br> {{ __('Murashov') }}
                                        </h2>
                                        <img src="/public/img/team/triangle.svg" draggable="false" alt="" class="team__triangle">
                                        <div class="team__socials team__socials_sm">
                                            @if (App::currentLocale() == 'ru')
                                                <a href="https://vk.com/deeoneezy"
                                                   class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">

                                                        <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path
                                                            class="contacts__icon-path"
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                            fill="#1E1E1E"
                                                        />
                                                    </svg>
                                                </a>
                                            @else
                                                <a
                                                    href="https://www.facebook.com/eaexelle"
                                                    class="team__socials-item team__socials-item_sm"
                                                    target="_blank"
                                                >
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path class="contacts__icon-path"
                                                              d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                              fill="#1E1E1E"/>
                                                    </svg>
                                                </a>
                                            @endif
                                            <a href="https://t.me/deeoneezy"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.625" width="41.75"
                                                          height="41.75" rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <a href="mailto:murashov@ping.moscow"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <div class="team__phrase_sm show_popup" rel="phrase_anton">
                                                <img src="/public/img/team/team__phrase-icon_sm.svg" draggable="false" alt="" class="team__phrase-icon_sm">
                                            </div>
                                        </div>
                                    </div>--}}
                                    <div class="swiper-slide team__slide">
                                        <div class="team__img-wrap team__img-wrap_sm">
                                            <img src="/public/img/team/team4.png" draggable="false" alt=""
                                                 class="team__img_shadow team__img_shadow-sm">
                                            <img src="/public/img/team/team4.png" draggable="false" alt="" class="team__img team__img_sm">
                                        </div>
                                        <h2 class="team__name team__name_sm">
                                            {{ __('Ruslan') }} <br> {{ __('Sokolov') }}
                                        </h2>
                                        <img src="/public/img/team/triangle.svg" draggable="false" alt="" class="team__triangle">
                                        <div class="team__socials team__socials_sm">
                                            @if (App::currentLocale() == 'ru')
                                                <a href="https://vk.com/onitaka"
                                                   class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">

                                                        <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path
                                                            class="contacts__icon-path"
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                            fill="#1E1E1E"
                                                        />
                                                    </svg>
                                                </a>
                                            @else
                                                <a
                                                    href="https://www.facebook.com/rslnmb"
                                                    class="team__socials-item team__socials-item_sm"
                                                    target="_blank"
                                                >
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path class="contacts__icon-path"
                                                              d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                              fill="#1E1E1E"/>
                                                    </svg>
                                                </a>
                                            @endif
                                            <a href="https://t.me/Ruslan_maybe"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.625" width="41.75"
                                                          height="41.75" rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <a href="mailto:sokolov@ping.moscow"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <div class="team__phrase_sm show_popup" rel="phrase_ruslan">
                                                <img src="/public/img/team/team__phrase-icon_sm.svg" draggable="false" alt="" class="team__phrase-icon_sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide team__slide">
                                        <div class="team__img-wrap team__img-wrap_sm">
                                            <img src="/public/img/team/team5.png" draggable="false" alt=""
                                                 class="team__img_shadow team__img_shadow-sm">
                                            <img src="/public/img/team/team5.png" draggable="false" alt="" class="team__img team__img_sm">
                                        </div>
                                        <h2 class="team__name team__name_sm">
                                            {{ __('Maxim') }} <br> {{ __('Lagutkin') }}
                                        </h2>
                                        <img src="/public/img/team/triangle.svg" draggable="false" alt="" class="team__triangle">
                                        <div class="team__socials team__socials_sm">
                                            @if (App::currentLocale() == 'ru')
                                                <a href="https://vk.com/lagustkin"
                                                   class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">

                                                        <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path
                                                            class="contacts__icon-path"
                                                            fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                            fill="#1E1E1E"
                                                        />
                                                    </svg>
                                                </a>
                                            @else
                                                <a
                                                    href="https://www.facebook.com/profile.php?id=100011623239774"
                                                    class="team__socials-item team__socials-item_sm"
                                                    target="_blank"
                                                >
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                              rx="5" fill="#4F4F4F"/>
                                                        <path class="contacts__icon-path"
                                                              d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                              fill="#1E1E1E"/>
                                                    </svg>
                                                </a>
                                            @endif
                                            <a href="https://t.me/LAGUSTKIN"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" x="0.625" width="41.75"
                                                          height="41.75" rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <a href="mailto:lagutkin@ping.moscow"
                                               class="team__socials-item team__socials-item_sm" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <rect class="contacts__icon-rect" width="41.75" height="41.75"
                                                          rx="5" fill="#4F4F4F"/>
                                                    <path class="contacts__icon-path"
                                                          d="M20.9999 32.6668C19.4055 32.6668 17.8985 32.3604 16.4791 31.7475C15.0596 31.1354 13.8203 30.2993 12.7609 29.2392C11.7008 28.1798 10.8647 26.9404 10.2526 25.521C9.6397 24.1016 9.33325 22.5946 9.33325 21.0002C9.33325 19.3863 9.6397 17.8747 10.2526 16.4653C10.8647 15.0552 11.7008 13.8205 12.7609 12.7612C13.8203 11.7011 15.0596 10.8646 16.4791 10.2517C17.8985 9.63955 19.4055 9.3335 20.9999 9.3335C22.6138 9.3335 24.1254 9.63955 25.5348 10.2517C26.9449 10.8646 28.1796 11.7011 29.2389 12.7612C30.299 13.8205 31.1351 15.0552 31.7473 16.4653C32.3601 17.8747 32.6666 19.3863 32.6666 21.0002V22.6918C32.6666 23.8391 32.273 24.8159 31.4859 25.6225C30.698 26.4298 29.7305 26.8335 28.5833 26.8335C27.8833 26.8335 27.2319 26.6779 26.6291 26.3668C26.0263 26.0557 25.5305 25.6474 25.1416 25.1418C24.6166 25.6668 23.9994 26.0802 23.2901 26.382C22.58 26.683 21.8166 26.8335 20.9999 26.8335C19.386 26.8335 18.0105 26.2646 16.8734 25.1267C15.7355 23.9896 15.1666 22.6141 15.1666 21.0002C15.1666 19.3863 15.7355 18.0104 16.8734 16.8725C18.0105 15.7354 19.386 15.1668 20.9999 15.1668C22.6138 15.1668 23.9897 15.7354 25.1276 16.8725C26.2647 18.0104 26.8333 19.3863 26.8333 21.0002V22.6918C26.8333 23.2557 27.0083 23.6979 27.3583 24.0183C27.7083 24.3396 28.1166 24.5002 28.5833 24.5002C29.0499 24.5002 29.4583 24.3396 29.8083 24.0183C30.1583 23.6979 30.3333 23.2557 30.3333 22.6918V21.0002C30.3333 18.4529 29.4143 16.2604 27.5764 14.4225C25.7393 12.5854 23.5471 11.6668 20.9999 11.6668C18.4527 11.6668 16.2601 12.5854 14.4223 14.4225C12.5851 16.2604 11.6666 18.4529 11.6666 21.0002C11.6666 23.5474 12.5851 25.7396 14.4223 27.5767C16.2601 29.4146 18.4527 30.3335 20.9999 30.3335H26.8333V32.6668H20.9999ZM20.9999 24.5002C21.9721 24.5002 22.7985 24.1599 23.4791 23.4793C24.1596 22.7988 24.4999 21.9724 24.4999 21.0002C24.4999 20.0279 24.1596 19.2016 23.4791 18.521C22.7985 17.8404 21.9721 17.5002 20.9999 17.5002C20.0277 17.5002 19.2013 17.8404 18.5208 18.521C17.8402 19.2016 17.4999 20.0279 17.4999 21.0002C17.4999 21.9724 17.8402 22.7988 18.5208 23.4793C19.2013 24.1599 20.0277 24.5002 20.9999 24.5002Z"
                                                          fill="#1E1E1E"/>
                                                </svg>
                                            </a>
                                            <div class="team__phrase_sm show_popup" rel="phrase_maxim">
                                                <img src="/public/img/team/team__phrase-icon_sm.svg" draggable="false" alt="" class="team__phrase-icon_sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination team__pagination"></div>
                        <div class="swiper team__swiper-text">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide team__slide-text">
                                    <ul class="team__list team__list_sm">
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Promotion strategy and financial estimates') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __("Product's integration into the esports industry") }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Creative events and activations') }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide team__slide-text">
                                    <ul class="team__list team__list_sm">
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Creation of an individual merch') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Live streams graphic design') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Venue design solutions') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Social media design') }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide team__slide-text">
                                    <ul class="team__list team__list_sm">
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Advising on projects of varying complexity') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Creative ideas generation and realization') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Influencer recruitment') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Partnership with clients') }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide team__slide-text">
                                    <ul class="team__list team__list_sm">
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Live stream organization') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Influencer recruitment') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Video production') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                Event-management
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="swiper-slide team__slide-text">
                                    <ul class="team__list team__list_sm">
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('PinG Communities events management') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Graphic content of the project') }}
                                            </p>
                                        </li>
                                        <li class="team__list-item team__list-item_sm">
                                            <p class="team__list-text team__list-text_sm">
                                                {{ __('Social media promotion strategy and SMM') }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team__line"></div>
                </div>
            </div>
            <div class="section swiper-slide" id="reviews_section">
                <div class="section__wrapper">
                    <div class="review__header">
                        <h2 class="services__title review__title">{{ __('Reviews') }}</h2>
                        <div class="services__line review__header-line"></div>
                    </div>
                    <div class="review__content">
                        <div class="swiper-wrapper">
                            <div class="review__row swiper-slide">
                                <div class="review__el">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review1.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Sergey') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Viewer') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">{{ __('I want to thank your entire team for all the work they did in organizing the tournament, the broadcasts, and the face-to-face meeting at the movie theater! It was cool!') }}</p>
                                    </div>
                                </div>
                                <div class="review__el">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review2.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">もっと試す</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __("Great tournament, everything is done at a high level and the organization this time is much better. I can't speak for everyone, how convenient it is to use Battlefy, but after the Overwatch tournament , we got used to it.") }}
                                        </p>
                                        <p class="review__el-text">
                                            {{ __('Special thanks for the grid with a loser brackets, gives a second chance and adds interest to play. The growth of the organization is noticeable, which creates a very pleasant impression and a clear understanding that PinG is not created for fun.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="review__row swiper-slide">
                                <div class="review__el">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review3.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">TobyGRI_N</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __('PinG are the coolest guys!') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="review__el">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review4.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Eva') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Viewer') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __('Hello. Thank you for the event, very cool organization of the event. Only prosperity to you! The film is also very cool, in such a company everything is very pleasant!') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="review__el">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review5.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">hAron</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __("It was an awesome tournament! According to those who were in the audience at the finals, it was the best thing that ever happened to DBD tournaments. I'm glad that PinG keeps making tournaments.") }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="review__row swiper-slide">
                                <div class="review__el">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review6.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Anonymous') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __("The impression is extremely positive. I participated in the tournament myself, and even though we lost, I'm looking forward to the new one.") }}
                                        </p>
                                    </div>
                                </div>
                                <div class="review__el">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review7.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Anonymous') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __("The event was good for us, even if we didn't win. We got a good experience and the zeal to improve our skills to be a stronger competitor. Thank you for this opportunity!") }}
                                        </p>
                                    </div>
                                </div>
                                <div class="review__el">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review8.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Vlas') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Viewer') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __('Thanks for the mega cool event PinG. You are always the top.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review__content_sm">
                        <div class="swiper-wrapper">
                            <div class="review__group swiper-slide">
                                <div class="review__el review__el_sm">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review2.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">もっと試す</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __("Great tournament, everything is done at a high level and the organization this time is much better. I can't speak for everyone, how convenient it is to use Battlefy, but after the Overwatch tournament , we got used to it.") }}
                                        </p>
                                        <p class="review__el-text">
                                            {{ __('Special thanks for the grid with a loser brackets, gives a second chance and adds interest to play. The growth of the organization is noticeable, which creates a very pleasant impression and a clear understanding that PinG is not created for fun.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="review__group swiper-slide">
                                <div class="review__el review__el_sm">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review1.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Sergey') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Viewer') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __('I want to thank your entire team for all the work they did in organizing the tournament, the broadcasts, and the face-to-face meeting at the movie theater! It was cool!') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="review__el review__el_sm">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review3.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">TobyGRI_N</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __('PinG are the coolest guys!') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="review__group swiper-slide">
                                <div class="review__el review__el_sm">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review4.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Eva') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Viewer') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __('Hello. Thank you for the event, very cool organization of the event. Only prosperity to you! The film is also very cool, in such a company everything is very pleasant!') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="review__group swiper-slide">
                                <div class="review__el review__el_sm">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review5.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">hAron</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __("It was an awesome tournament! According to those who were in the audience at the finals, it was the best thing that ever happened to DBD tournaments. I'm glad that PinG keeps making tournaments.") }}
                                        </p>
                                    </div>
                                </div>
                                <div class="review__el review__el_sm">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review8.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Vlas') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Viewer') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __('Thanks for the mega cool event PinG. You are always the top.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="review__group swiper-slide">
                                <div class="review__el review__el_sm">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review6.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Anonymous') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __("The impression is extremely positive. I participated in the tournament myself, and even though we lost, I'm looking forward to the new one.") }}
                                        </p>
                                    </div>
                                </div>
                                <div class="review__el review__el_sm">
                                    <div class="review__el-header">
                                        <img src="/public/img/team/review7.jpg" draggable="false" alt="" class="review__el-avatar">
                                        <h4 class="review__el-name">{{ __('Anonymous') }}</h4>
                                        <h4 class="review__el-subname">{{ __('Participant') }}</h4>
                                    </div>
                                    <div class="review__el-content">
                                        <p class="review__el-text">
                                            {{ __("The event was good for us, even if we didn't win. We got a good experience and the zeal to improve our skills to be a stronger competitor. Thank you for this opportunity!") }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section swiper-slide" id="contacts_section">
                <div class="section__wrapper">
                    <div class="contacts">
                        <div class="contacts__header">
                            <h1 class="services__title contacts__header-title">{{ __('Contacts') }}</h1>
                            <div class="contacts__icon-list">
                                <div class="contacts__icon-row">
                                    <a href="https://vk.com/ping_agency" class="contacts__icon-wrap" target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">

                                            <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                  fill="#4F4F4F"/>
                                            <path
                                                class="contacts__icon-path"
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                fill="#1E1E1E"
                                            />
                                        </svg>
                                    </a>

                                    @if (App::currentLocale() == 'ru')
                                        <a href="https://www.facebook.com/pingmsk" class="contacts__icon-wrap"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a href="https://www.facebook.com/peopleingaming" class="contacts__icon-wrap"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    @endif

                                    <a href="https://twitter.com/agencyping" class="contacts__icon-wrap"
                                       target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" x="0.8125" width="41.75" height="41.75"
                                                  rx="5" fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M36.3 12.2178C35.2243 12.7121 34.0648 13.0369 32.8634 13.1922C34.0927 12.4438 35.0427 11.2576 35.4897 9.83132C34.3302 10.5374 33.045 11.0316 31.6899 11.3141C30.5863 10.0996 29.0356 9.39355 27.2754 9.39355C23.9925 9.39355 21.3103 12.1048 21.3103 15.4516C21.3103 15.9317 21.3661 16.3977 21.4639 16.8355C16.4907 16.5813 12.0622 14.1666 9.11456 10.5091C8.59767 11.3988 8.3043 12.4438 8.3043 13.5452C8.3043 15.6493 9.35204 17.5133 10.9726 18.5724C9.98069 18.5724 9.05868 18.29 8.24842 17.8664V17.9087C8.24842 20.846 10.316 23.3031 13.0541 23.8538C12.175 24.097 11.2521 24.1308 10.3579 23.9526C10.7373 25.1565 11.4804 26.2098 12.4827 26.9646C13.485 27.7194 14.6962 28.1378 15.9458 28.1608C13.8275 29.856 11.2017 30.7723 8.49988 30.7591C8.0249 30.7591 7.54993 30.7309 7.07495 30.6744C9.72923 32.3972 12.8864 33.3998 16.2671 33.3998C27.2754 33.3998 33.3244 24.1645 33.3244 16.1577C33.3244 15.8894 33.3244 15.6352 33.3104 15.3669C34.4839 14.5196 35.4897 13.4464 36.3 12.2178Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>

                                    @if (App::currentLocale() == 'ru')
                                        <a href="https://www.instagram.com/ping_agency" class="contacts__icon-wrap"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.21875" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M14.5181 5.21875H27.6694C32.6794 5.21875 36.75 9.28938 36.75 14.2994V27.4506C36.75 29.859 35.7933 32.1687 34.0904 33.8716C32.3874 35.5745 30.0777 36.5313 27.6694 36.5313H14.5181C9.50813 36.5313 5.4375 32.4606 5.4375 27.4506V14.2994C5.4375 11.891 6.39421 9.58135 8.09715 7.8784C9.8001 6.17546 12.1098 5.21875 14.5181 5.21875ZM14.205 8.35C12.7102 8.35 11.2766 8.94382 10.2196 10.0008C9.16257 11.0578 8.56875 12.4914 8.56875 13.9863V27.7638C8.56875 30.8793 11.0894 33.4 14.205 33.4H27.9825C29.4773 33.4 30.9109 32.8062 31.9679 31.7492C33.0249 30.6922 33.6188 29.2586 33.6188 27.7638V13.9863C33.6188 10.8707 31.0981 8.35 27.9825 8.35H14.205ZM29.3133 10.6984C29.8323 10.6984 30.3301 10.9046 30.6971 11.2716C31.0641 11.6387 31.2703 12.1364 31.2703 12.6555C31.2703 13.1745 31.0641 13.6723 30.6971 14.0393C30.3301 14.4063 29.8323 14.6125 29.3133 14.6125C28.7942 14.6125 28.2965 14.4063 27.9295 14.0393C27.5624 13.6723 27.3563 13.1745 27.3563 12.6555C27.3563 12.1364 27.5624 11.6387 27.9295 11.2716C28.2965 10.9046 28.7942 10.6984 29.3133 10.6984ZM21.0938 13.0469C23.1699 13.0469 25.161 13.8716 26.6291 15.3397C28.0971 16.8077 28.9219 18.7989 28.9219 20.875C28.9219 22.9512 28.0971 24.9423 26.6291 26.4103C25.161 27.8784 23.1699 28.7031 21.0938 28.7031C19.0176 28.7031 17.0265 27.8784 15.5584 26.4103C14.0904 24.9423 13.2656 22.9512 13.2656 20.875C13.2656 18.7989 14.0904 16.8077 15.5584 15.3397C17.0265 13.8716 19.0176 13.0469 21.0938 13.0469ZM21.0938 16.1781C19.8481 16.1781 18.6534 16.673 17.7726 17.5538C16.8917 18.4346 16.3969 19.6293 16.3969 20.875C16.3969 22.1207 16.8917 23.3154 17.7726 24.1962C18.6534 25.077 19.8481 25.5719 21.0938 25.5719C22.3394 25.5719 23.5341 25.077 24.4149 24.1962C25.2958 23.3154 25.7906 22.1207 25.7906 20.875C25.7906 19.6293 25.2958 18.4346 24.4149 17.5538C23.5341 16.673 22.3394 16.1781 21.0938 16.1781Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a href="https://instagram.com/people_in_gaming" class="contacts__icon-wrap"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.21875" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M14.5181 5.21875H27.6694C32.6794 5.21875 36.75 9.28938 36.75 14.2994V27.4506C36.75 29.859 35.7933 32.1687 34.0904 33.8716C32.3874 35.5745 30.0777 36.5313 27.6694 36.5313H14.5181C9.50813 36.5313 5.4375 32.4606 5.4375 27.4506V14.2994C5.4375 11.891 6.39421 9.58135 8.09715 7.8784C9.8001 6.17546 12.1098 5.21875 14.5181 5.21875ZM14.205 8.35C12.7102 8.35 11.2766 8.94382 10.2196 10.0008C9.16257 11.0578 8.56875 12.4914 8.56875 13.9863V27.7638C8.56875 30.8793 11.0894 33.4 14.205 33.4H27.9825C29.4773 33.4 30.9109 32.8062 31.9679 31.7492C33.0249 30.6922 33.6188 29.2586 33.6188 27.7638V13.9863C33.6188 10.8707 31.0981 8.35 27.9825 8.35H14.205ZM29.3133 10.6984C29.8323 10.6984 30.3301 10.9046 30.6971 11.2716C31.0641 11.6387 31.2703 12.1364 31.2703 12.6555C31.2703 13.1745 31.0641 13.6723 30.6971 14.0393C30.3301 14.4063 29.8323 14.6125 29.3133 14.6125C28.7942 14.6125 28.2965 14.4063 27.9295 14.0393C27.5624 13.6723 27.3563 13.1745 27.3563 12.6555C27.3563 12.1364 27.5624 11.6387 27.9295 11.2716C28.2965 10.9046 28.7942 10.6984 29.3133 10.6984ZM21.0938 13.0469C23.1699 13.0469 25.161 13.8716 26.6291 15.3397C28.0971 16.8077 28.9219 18.7989 28.9219 20.875C28.9219 22.9512 28.0971 24.9423 26.6291 26.4103C25.161 27.8784 23.1699 28.7031 21.0938 28.7031C19.0176 28.7031 17.0265 27.8784 15.5584 26.4103C14.0904 24.9423 13.2656 22.9512 13.2656 20.875C13.2656 18.7989 14.0904 16.8077 15.5584 15.3397C17.0265 13.8716 19.0176 13.0469 21.0938 13.0469ZM21.0938 16.1781C19.8481 16.1781 18.6534 16.673 17.7726 17.5538C16.8917 18.4346 16.3969 19.6293 16.3969 20.875C16.3969 22.1207 16.8917 23.3154 17.7726 24.1962C18.6534 25.077 19.8481 25.5719 21.0938 25.5719C22.3394 25.5719 23.5341 25.077 24.4149 24.1962C25.2958 23.3154 25.7906 22.1207 25.7906 20.875C25.7906 19.6293 25.2958 18.4346 24.4149 17.5538C23.5341 16.673 22.3394 16.1781 21.0938 16.1781Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    @endif

                                    <a href="https://t.me/ping_agency" class="contacts__icon-wrap" target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" x="0.625" width="41.75" height="41.75"
                                                  rx="5" fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="contacts__icon-row">
                                    <a href="https://discord.gg/2tdUey9Xzz" class="contacts__icon-wrap" target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                  fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M30.9905 11.2151C29.1395 10.366 27.1355 9.7497 25.0479 9.39362C25.0296 9.39304 25.0114 9.39642 24.9946 9.40352C24.9777 9.41062 24.9627 9.42126 24.9505 9.4347C24.7 9.88666 24.4077 10.4756 24.2129 10.9275C21.9987 10.5988 19.7469 10.5988 17.5327 10.9275C17.3379 10.4619 17.0456 9.88666 16.7812 9.4347C16.7673 9.40731 16.7255 9.39362 16.6838 9.39362C14.5962 9.7497 12.6061 10.366 10.7412 11.2151C10.7273 11.2151 10.7134 11.2288 10.6994 11.2425C6.914 16.8167 5.87022 22.2401 6.38515 27.6088C6.38515 27.6362 6.39907 27.6636 6.4269 27.6773C8.93197 29.4851 11.3396 30.5808 13.7194 31.3066C13.7612 31.3203 13.8029 31.3066 13.8169 31.2792C14.3735 30.526 14.8746 29.7316 15.306 28.8962C15.3338 28.8414 15.306 28.7866 15.2503 28.7729C14.457 28.4716 13.7055 28.1156 12.9679 27.7047C12.9122 27.6773 12.9122 27.5951 12.954 27.554C13.1071 27.4445 13.2602 27.3212 13.4133 27.2116C13.4411 27.1842 13.4828 27.1842 13.5107 27.1979C18.2981 29.3482 23.4614 29.3482 28.1932 27.1979C28.221 27.1842 28.2628 27.1842 28.2906 27.2116C28.4437 27.3349 28.5968 27.4445 28.7498 27.5677C28.8055 27.6088 28.8055 27.691 28.7359 27.7184C28.0122 28.1429 27.2468 28.4853 26.4535 28.7866C26.3979 28.8003 26.384 28.8688 26.3979 28.9099C26.8432 29.7453 27.3442 30.5397 27.887 31.2929C27.9287 31.3066 27.9705 31.3203 28.0122 31.3066C30.406 30.5808 32.8136 29.4851 35.3187 27.6773C35.3465 27.6636 35.3604 27.6362 35.3604 27.6088C35.9728 21.4047 34.3445 16.0223 31.0462 11.2425C31.0322 11.2288 31.0183 11.2151 30.9905 11.2151ZM16.0297 24.3356C14.5962 24.3356 13.3993 23.0345 13.3993 21.4321C13.3993 19.8297 14.5684 18.5286 16.0297 18.5286C17.5049 18.5286 18.6739 19.8434 18.66 21.4321C18.66 23.0345 17.491 24.3356 16.0297 24.3356ZM25.7299 24.3356C24.2964 24.3356 23.0995 23.0345 23.0995 21.4321C23.0995 19.8297 24.2686 18.5286 25.7299 18.5286C27.2051 18.5286 28.3741 19.8434 28.3602 21.4321C28.3602 23.0345 27.2051 24.3356 25.7299 24.3356Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.twitch.tv/ping_agency" class="contacts__icon-wrap"
                                       target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                  rx="5" fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M20.2112 12.2105H22.3882V18.688H20.2112M26.1942 12.2105H28.3712V18.688H26.1942M13.1473 6.2627L7.7124 11.6657V31.1285H14.2282V36.5315L19.6784 31.1285H24.0172L33.8062 21.3971V6.2627M31.6291 20.3225L27.2903 24.6358H22.9363L19.1303 28.4194V24.6358H14.2282V8.42691H31.6291V20.3225Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                    <a href="https://youtube.com/@ping_agency" class="contacts__icon-wrap"
                                       target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                  fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M37.7051 13.6966C37.521 13.0661 37.1605 12.4913 36.6596 12.0296C36.1587 11.5679 35.535 11.2356 34.851 11.0659C32.332 10.4375 22.2096 10.4375 22.2096 10.4375C22.2096 10.4375 12.0873 10.4375 9.56825 11.0659C8.88423 11.2356 8.26056 11.5679 7.75967 12.0296C7.25878 12.4913 6.89824 13.0661 6.71412 13.6966C6.24376 16.0645 6.01551 18.4678 6.03236 20.875C6.01551 23.2822 6.24376 25.6856 6.71412 28.0534C6.89824 28.6839 7.25878 29.2588 7.75967 29.7204C8.26056 30.1821 8.88423 30.5144 9.56825 30.6841C12.0873 31.3125 22.2096 31.3125 22.2096 31.3125C22.2096 31.3125 32.332 31.3125 34.851 30.6841C35.535 30.5144 36.1587 30.1821 36.6596 29.7204C37.1605 29.2588 37.521 28.6839 37.7051 28.0534C38.1755 25.6856 38.4037 23.2822 38.3869 20.875C38.4037 18.4678 38.1755 16.0645 37.7051 13.6966ZM18.9742 25.3482V16.4018L27.3748 20.875L18.9742 25.3482Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                    <a href="https://trovo.live/s/ping_agency" class="contacts__icon-wrap"
                                       target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                  fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M30.8479 26.0904C30.4171 24.3446 29.1251 23.1792 27.3055 23.1932C25.5241 23.2069 24.5352 24.3528 24.4021 25.6229C24.3041 26.5593 24.6575 27.3113 25.17 27.6188C26.1124 28.1841 26.774 27.2211 26.4068 26.8636C26.1704 26.6334 26.0607 26.4386 26.1124 26.0904C26.164 25.7423 26.4268 25.3938 27.0472 25.3938C27.6676 25.3938 28.1902 25.8424 28.3016 26.7709C28.4329 27.8663 27.7211 29.0523 26.4648 29.3211C24.8743 29.6612 23.2701 28.8023 22.7016 27.4192C22.1331 26.0361 22.2874 23.8794 23.6473 22.5604C24.7245 21.5156 26.1187 21.1306 27.3055 21.1306L31.2755 21.307C31.5693 21.3201 31.8317 21.1221 31.9032 20.8334L33.6003 13.8274C33.6127 13.7775 33.6189 13.7263 33.6189 13.6749C33.6189 13.3288 33.3811 13.0482 33.0392 13.0482H25.7803C25.7568 13.0482 25.7334 13.0455 25.7105 13.0402C25.5439 13.0012 25.4401 12.8329 25.4786 12.6643L26.2893 9.11779C26.2998 9.07149 26.3052 9.02411 26.3052 8.97653C26.3052 8.63046 26.028 8.3499 25.686 8.3499H18.1737C17.7539 8.3499 17.3863 8.63482 17.2769 9.04498L16.4482 12.5849C16.3753 12.8583 16.1302 13.0482 15.8503 13.0482H11.0387C10.6043 13.0482 10.2279 13.3531 10.1325 13.782L8.58395 20.7506C8.57393 20.7957 8.56885 20.8418 8.56885 20.8881C8.56885 21.2342 8.84608 21.5147 9.1881 21.5147H14.1213C14.1516 21.5147 14.1818 21.5177 14.2115 21.5237C14.4631 21.5741 14.6266 21.8214 14.5768 22.076C14.4305 22.8235 14.3322 23.5626 14.282 24.2932C14.1325 26.4656 14.6954 28.8443 16.3896 30.7017C19.2723 33.8622 24.5944 34.0455 27.7429 32.2897C30.2743 30.8781 31.3876 28.278 30.8479 26.0904Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="services__line contacts__header-line"></div>
                        </div>

                        <form class="form">
                            @csrf
                            <div class="form__wrap">
                                <div class="form__item">
                                    <label class="form__label" for="name">{{ __('Name') }}</label>
                                    <div class="form__input-wrap">
                                        <input class="form__input form__field" type="text" id="name" name="name" autocomplete="off" maxlength="255">
                                    </div>
                                </div>
                                <div class="form__item">
                                    <label class="form__label" for="email">E-Mail</label>
                                    <div class="form__input-wrap">
                                        <input class="form__input form__field" type="text" id="email" name="email" autocomplete="off" maxlength="255">
                                    </div>
                                </div>
                                <div class="form__item">
                                    <label class="form__label form__textarea-label" for="message">{{ __('Message') }}</label>
                                    <div class="form__texarea-wrap">
                                        <textarea class="form__textarea form__field" id="message" name="message" cols="30" rows="10" autocomplete="off" maxlength="1024"></textarea>
                                    </div>
                                </div>
                                <button class="form__btn" type="submit">{{ __('Send') }}</button>
                            </div>
                            <div class="form__list">
                                <h2 class="form__subtitle">{{ __('Choose services') }}</h2>
                                <div class="form__list-item">
                                    <input name="tournaments" type="checkbox" id="tours" hidden>
                                    <label class="form__checkbox-label" for="tours">
                                        <span class="form__checkbox"></span>
                                        {{ __('Tournaments') }}
                                    </label>
                                </div>
                                <div class="form__list-item">
                                    <input name="special_projects" type="checkbox" id="special_projects" hidden>
                                    <label class="form__checkbox-label" for="special_projects">
                                        <span class="form__checkbox"></span>
                                        {{ __('Spec projects') }}
                                    </label>
                                </div>
                                <div class="form__list-item">
                                    <input name="offline_events" type="checkbox" id="offline_events" hidden>
                                    <label class="form__checkbox-label" for="offline_events">
                                        <span class="form__checkbox"></span>
                                        {{ __('Offline events') }}
                                    </label>
                                </div>
                                <div class="form__list-item">
                                    <input name="digital_ads" type="checkbox" id="digital_ads" hidden>
                                    <label class="form__checkbox-label" for="digital_ads">
                                        <span class="form__checkbox"></span>
                                        {{ __('Digital ads') }}
                                    </label>
                                </div>
                                <div class="form__list-item">
                                    <input name="design_service" type="checkbox" id="design_service" hidden>
                                    <label class="form__checkbox-label" for="design_service">
                                        <span class="form__checkbox"></span>
                                        {{ __('Design') }}
                                    </label>
                                </div>
                            </div>
                            <div class="form__btn-wrap">
                                <button class="form__btn form__btn_sm contact-form-send" type="submit">{{ __('Send') }}</button>
                            </div>
                        </form>
                        <div class="contacts__icons-wrap">
                            <div class="contacts__icon-list contacts__icon-list_sm">
                                <div class="contacts__icon-row">
                                    <a href="https://vk.com/ping_agency" class="contacts__icon-wrap" target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">

                                            <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                  fill="#4F4F4F"/>
                                            <path
                                                class="contacts__icon-path"
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M33.7043 29.7825H30.6736C29.8558 29.7825 29.4411 29.3204 28.5237 28.2982C28.1533 27.8854 27.7008 27.3812 27.1067 26.7792C25.3128 25.0401 24.5182 24.8092 24.076 24.8092C23.451 24.8092 23.2736 24.9853 23.2736 25.8425V28.5809C23.2736 29.3154 23.0427 29.7564 21.0988 29.7564C17.8841 29.7564 14.3172 27.8125 11.8162 24.1908C8.04445 18.8835 7.01248 14.9082 7.01248 14.0863C7.01248 13.644 7.18861 13.2304 8.03793 13.2304H11.0751C11.8436 13.2304 12.1358 13.584 12.4346 14.4059C13.9362 18.7413 16.4372 22.5391 17.4692 22.5391C17.8502 22.5391 18.0263 22.363 18.0263 21.391V16.9134C17.9545 15.637 17.512 15.0817 17.1844 14.6706C16.982 14.4166 16.8234 14.2176 16.8234 13.9375C16.8234 13.584 17.1157 13.2304 17.584 13.2304H22.3603C23.0061 13.2304 23.2436 13.584 23.2436 14.3446V20.3851C23.2436 21.0374 23.5358 21.2684 23.712 21.2684C24.0929 21.2684 24.4191 21.0374 25.1249 20.3303C27.3063 17.8841 28.8692 14.1124 28.8692 14.1124C29.0728 13.6701 29.4263 13.2565 30.1948 13.2565H33.232C34.1426 13.2565 34.3461 13.7249 34.1426 14.3772C33.7617 16.1437 30.0447 21.3897 30.0447 21.3897C29.7251 21.9194 29.6024 22.1503 30.0447 22.7413C30.2056 22.9595 30.5454 23.2933 30.9331 23.6743C31.3312 24.0654 31.7798 24.5063 32.1374 24.9227C33.4355 26.3969 34.4335 27.6337 34.6997 28.4896C34.9985 29.3389 34.5575 29.7812 33.7003 29.7812L33.7043 29.7825Z"
                                                fill="#1E1E1E"
                                            />
                                        </svg>
                                    </a>

                                    @if (App::currentLocale() == 'ru')
                                        <a href="https://www.facebook.com/pingmsk" class="contacts__icon-wrap"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a href="https://www.facebook.com/peopleingaming" class="contacts__icon-wrap"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M36.9375 20.9142C36.9375 12.2503 29.9235 5.21875 21.2813 5.21875C12.639 5.21875 5.625 12.2503 5.625 20.9142C5.625 28.5109 11.0108 34.8361 18.15 36.2958V25.6229H15.0188V20.9142H18.15V16.9904C18.15 13.9611 20.608 11.4969 23.6297 11.4969H27.5438V16.2056H24.4125C23.5514 16.2056 22.8469 16.9119 22.8469 17.7751V20.9142H27.5438V25.6229H22.8469V36.5313C30.7533 35.7465 36.9375 29.0602 36.9375 20.9142Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    @endif

                                    <a href="https://twitter.com/agencyping" class="contacts__icon-wrap"
                                       target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" x="0.8125" width="41.75" height="41.75"
                                                  rx="5" fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M36.3 12.2178C35.2243 12.7121 34.0648 13.0369 32.8634 13.1922C34.0927 12.4438 35.0427 11.2576 35.4897 9.83132C34.3302 10.5374 33.045 11.0316 31.6899 11.3141C30.5863 10.0996 29.0356 9.39355 27.2754 9.39355C23.9925 9.39355 21.3103 12.1048 21.3103 15.4516C21.3103 15.9317 21.3661 16.3977 21.4639 16.8355C16.4907 16.5813 12.0622 14.1666 9.11456 10.5091C8.59767 11.3988 8.3043 12.4438 8.3043 13.5452C8.3043 15.6493 9.35204 17.5133 10.9726 18.5724C9.98069 18.5724 9.05868 18.29 8.24842 17.8664V17.9087C8.24842 20.846 10.316 23.3031 13.0541 23.8538C12.175 24.097 11.2521 24.1308 10.3579 23.9526C10.7373 25.1565 11.4804 26.2098 12.4827 26.9646C13.485 27.7194 14.6962 28.1378 15.9458 28.1608C13.8275 29.856 11.2017 30.7723 8.49988 30.7591C8.0249 30.7591 7.54993 30.7309 7.07495 30.6744C9.72923 32.3972 12.8864 33.3998 16.2671 33.3998C27.2754 33.3998 33.3244 24.1645 33.3244 16.1577C33.3244 15.8894 33.3244 15.6352 33.3104 15.3669C34.4839 14.5196 35.4897 13.4464 36.3 12.2178Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>

                                    @if (App::currentLocale() == 'ru')
                                        <a href="https://www.instagram.com/ping_agency" class="contacts__icon-wrap"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.21875" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M14.5181 5.21875H27.6694C32.6794 5.21875 36.75 9.28938 36.75 14.2994V27.4506C36.75 29.859 35.7933 32.1687 34.0904 33.8716C32.3874 35.5745 30.0777 36.5313 27.6694 36.5313H14.5181C9.50813 36.5313 5.4375 32.4606 5.4375 27.4506V14.2994C5.4375 11.891 6.39421 9.58135 8.09715 7.8784C9.8001 6.17546 12.1098 5.21875 14.5181 5.21875ZM14.205 8.35C12.7102 8.35 11.2766 8.94382 10.2196 10.0008C9.16257 11.0578 8.56875 12.4914 8.56875 13.9863V27.7638C8.56875 30.8793 11.0894 33.4 14.205 33.4H27.9825C29.4773 33.4 30.9109 32.8062 31.9679 31.7492C33.0249 30.6922 33.6188 29.2586 33.6188 27.7638V13.9863C33.6188 10.8707 31.0981 8.35 27.9825 8.35H14.205ZM29.3133 10.6984C29.8323 10.6984 30.3301 10.9046 30.6971 11.2716C31.0641 11.6387 31.2703 12.1364 31.2703 12.6555C31.2703 13.1745 31.0641 13.6723 30.6971 14.0393C30.3301 14.4063 29.8323 14.6125 29.3133 14.6125C28.7942 14.6125 28.2965 14.4063 27.9295 14.0393C27.5624 13.6723 27.3563 13.1745 27.3563 12.6555C27.3563 12.1364 27.5624 11.6387 27.9295 11.2716C28.2965 10.9046 28.7942 10.6984 29.3133 10.6984ZM21.0938 13.0469C23.1699 13.0469 25.161 13.8716 26.6291 15.3397C28.0971 16.8077 28.9219 18.7989 28.9219 20.875C28.9219 22.9512 28.0971 24.9423 26.6291 26.4103C25.161 27.8784 23.1699 28.7031 21.0938 28.7031C19.0176 28.7031 17.0265 27.8784 15.5584 26.4103C14.0904 24.9423 13.2656 22.9512 13.2656 20.875C13.2656 18.7989 14.0904 16.8077 15.5584 15.3397C17.0265 13.8716 19.0176 13.0469 21.0938 13.0469ZM21.0938 16.1781C19.8481 16.1781 18.6534 16.673 17.7726 17.5538C16.8917 18.4346 16.3969 19.6293 16.3969 20.875C16.3969 22.1207 16.8917 23.3154 17.7726 24.1962C18.6534 25.077 19.8481 25.5719 21.0938 25.5719C22.3394 25.5719 23.5341 25.077 24.4149 24.1962C25.2958 23.3154 25.7906 22.1207 25.7906 20.875C25.7906 19.6293 25.2958 18.4346 24.4149 17.5538C23.5341 16.673 22.3394 16.1781 21.0938 16.1781Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a href="https://instagram.com/people_in_gaming" class="contacts__icon-wrap"
                                           target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <rect class="contacts__icon-rect" x="0.21875" width="41.75" height="41.75"
                                                      rx="5" fill="#4F4F4F"/>
                                                <path class="contacts__icon-path"
                                                      d="M14.5181 5.21875H27.6694C32.6794 5.21875 36.75 9.28938 36.75 14.2994V27.4506C36.75 29.859 35.7933 32.1687 34.0904 33.8716C32.3874 35.5745 30.0777 36.5313 27.6694 36.5313H14.5181C9.50813 36.5313 5.4375 32.4606 5.4375 27.4506V14.2994C5.4375 11.891 6.39421 9.58135 8.09715 7.8784C9.8001 6.17546 12.1098 5.21875 14.5181 5.21875ZM14.205 8.35C12.7102 8.35 11.2766 8.94382 10.2196 10.0008C9.16257 11.0578 8.56875 12.4914 8.56875 13.9863V27.7638C8.56875 30.8793 11.0894 33.4 14.205 33.4H27.9825C29.4773 33.4 30.9109 32.8062 31.9679 31.7492C33.0249 30.6922 33.6188 29.2586 33.6188 27.7638V13.9863C33.6188 10.8707 31.0981 8.35 27.9825 8.35H14.205ZM29.3133 10.6984C29.8323 10.6984 30.3301 10.9046 30.6971 11.2716C31.0641 11.6387 31.2703 12.1364 31.2703 12.6555C31.2703 13.1745 31.0641 13.6723 30.6971 14.0393C30.3301 14.4063 29.8323 14.6125 29.3133 14.6125C28.7942 14.6125 28.2965 14.4063 27.9295 14.0393C27.5624 13.6723 27.3563 13.1745 27.3563 12.6555C27.3563 12.1364 27.5624 11.6387 27.9295 11.2716C28.2965 10.9046 28.7942 10.6984 29.3133 10.6984ZM21.0938 13.0469C23.1699 13.0469 25.161 13.8716 26.6291 15.3397C28.0971 16.8077 28.9219 18.7989 28.9219 20.875C28.9219 22.9512 28.0971 24.9423 26.6291 26.4103C25.161 27.8784 23.1699 28.7031 21.0938 28.7031C19.0176 28.7031 17.0265 27.8784 15.5584 26.4103C14.0904 24.9423 13.2656 22.9512 13.2656 20.875C13.2656 18.7989 14.0904 16.8077 15.5584 15.3397C17.0265 13.8716 19.0176 13.0469 21.0938 13.0469ZM21.0938 16.1781C19.8481 16.1781 18.6534 16.673 17.7726 17.5538C16.8917 18.4346 16.3969 19.6293 16.3969 20.875C16.3969 22.1207 16.8917 23.3154 17.7726 24.1962C18.6534 25.077 19.8481 25.5719 21.0938 25.5719C22.3394 25.5719 23.5341 25.077 24.4149 24.1962C25.2958 23.3154 25.7906 22.1207 25.7906 20.875C25.7906 19.6293 25.2958 18.4346 24.4149 17.5538C23.5341 16.673 22.3394 16.1781 21.0938 16.1781Z"
                                                      fill="#1E1E1E"/>
                                            </svg>
                                        </a>
                                    @endif

                                    <a href="https://t.me/ping_agency" class="contacts__icon-wrap" target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" x="0.625" width="41.75" height="41.75"
                                                  rx="5" fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M22.3229 14.8647C20.0898 15.7927 15.6255 17.7158 8.93196 20.6321C7.84507 21.0645 7.27483 21.4874 7.22316 21.9008C7.13514 22.6011 8.01154 22.8767 9.20177 23.2498C9.36442 23.3015 9.53281 23.3531 9.70503 23.4105C10.878 23.7913 12.4548 24.2372 13.2738 24.2544C14.0182 24.2697 14.8486 23.9636 15.7652 23.3359C22.0187 19.1127 25.2468 16.9791 25.4497 16.9332C25.5932 16.9007 25.7922 16.8586 25.9261 16.9791C26.0601 17.0978 26.0467 17.3236 26.0333 17.3848C25.9453 17.7541 22.5124 20.9478 20.7328 22.6011C20.1778 23.1159 19.7856 23.4813 19.7052 23.5655C19.5253 23.7512 19.3416 23.9291 19.1656 24.0994C18.0749 25.148 17.2597 25.9364 19.2115 27.2223C20.1219 27.8224 20.8554 28.3215 21.5821 28.8159L21.6474 28.8603C22.4645 29.4172 23.2797 29.9721 24.336 30.6648C24.6039 30.8408 24.8603 31.0226 25.111 31.2006C26.062 31.8799 26.9173 32.4884 27.9736 32.3927C28.5859 32.3353 29.2212 31.7593 29.5427 30.0391C30.3024 25.9709 31.7988 17.1609 32.1451 13.529C32.1662 13.2275 32.1534 12.9245 32.1069 12.6258C32.079 12.3846 31.9616 12.1626 31.7777 12.0039C31.5041 11.78 31.0793 11.7322 30.8879 11.736C30.0249 11.7513 28.7008 12.2125 22.3229 14.8647Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="contacts__icon-row">
                                    <a href="https://discord.gg/2tdUey9Xzz" class="contacts__icon-wrap" target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                  fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M30.9905 11.2151C29.1395 10.366 27.1355 9.7497 25.0479 9.39362C25.0296 9.39304 25.0114 9.39642 24.9946 9.40352C24.9777 9.41062 24.9627 9.42126 24.9505 9.4347C24.7 9.88666 24.4077 10.4756 24.2129 10.9275C21.9987 10.5988 19.7469 10.5988 17.5327 10.9275C17.3379 10.4619 17.0456 9.88666 16.7812 9.4347C16.7673 9.40731 16.7255 9.39362 16.6838 9.39362C14.5962 9.7497 12.6061 10.366 10.7412 11.2151C10.7273 11.2151 10.7134 11.2288 10.6994 11.2425C6.914 16.8167 5.87022 22.2401 6.38515 27.6088C6.38515 27.6362 6.39907 27.6636 6.4269 27.6773C8.93197 29.4851 11.3396 30.5808 13.7194 31.3066C13.7612 31.3203 13.8029 31.3066 13.8169 31.2792C14.3735 30.526 14.8746 29.7316 15.306 28.8962C15.3338 28.8414 15.306 28.7866 15.2503 28.7729C14.457 28.4716 13.7055 28.1156 12.9679 27.7047C12.9122 27.6773 12.9122 27.5951 12.954 27.554C13.1071 27.4445 13.2602 27.3212 13.4133 27.2116C13.4411 27.1842 13.4828 27.1842 13.5107 27.1979C18.2981 29.3482 23.4614 29.3482 28.1932 27.1979C28.221 27.1842 28.2628 27.1842 28.2906 27.2116C28.4437 27.3349 28.5968 27.4445 28.7498 27.5677C28.8055 27.6088 28.8055 27.691 28.7359 27.7184C28.0122 28.1429 27.2468 28.4853 26.4535 28.7866C26.3979 28.8003 26.384 28.8688 26.3979 28.9099C26.8432 29.7453 27.3442 30.5397 27.887 31.2929C27.9287 31.3066 27.9705 31.3203 28.0122 31.3066C30.406 30.5808 32.8136 29.4851 35.3187 27.6773C35.3465 27.6636 35.3604 27.6362 35.3604 27.6088C35.9728 21.4047 34.3445 16.0223 31.0462 11.2425C31.0322 11.2288 31.0183 11.2151 30.9905 11.2151ZM16.0297 24.3356C14.5962 24.3356 13.3993 23.0345 13.3993 21.4321C13.3993 19.8297 14.5684 18.5286 16.0297 18.5286C17.5049 18.5286 18.6739 19.8434 18.66 21.4321C18.66 23.0345 17.491 24.3356 16.0297 24.3356ZM25.7299 24.3356C24.2964 24.3356 23.0995 23.0345 23.0995 21.4321C23.0995 19.8297 24.2686 18.5286 25.7299 18.5286C27.2051 18.5286 28.3741 19.8434 28.3602 21.4321C28.3602 23.0345 27.2051 24.3356 25.7299 24.3356Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.twitch.tv/ping_agency" class="contacts__icon-wrap"
                                       target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" x="0.40625" width="41.75" height="41.75"
                                                  rx="5" fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M20.2112 12.2105H22.3882V18.688H20.2112M26.1942 12.2105H28.3712V18.688H26.1942M13.1473 6.2627L7.7124 11.6657V31.1285H14.2282V36.5315L19.6784 31.1285H24.0172L33.8062 21.3971V6.2627M31.6291 20.3225L27.2903 24.6358H22.9363L19.1303 28.4194V24.6358H14.2282V8.42691H31.6291V20.3225Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                    <a href="https://youtube.com/@ping_agency" class="contacts__icon-wrap"
                                       target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                  fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M37.7051 13.6966C37.521 13.0661 37.1605 12.4913 36.6596 12.0296C36.1587 11.5679 35.535 11.2356 34.851 11.0659C32.332 10.4375 22.2096 10.4375 22.2096 10.4375C22.2096 10.4375 12.0873 10.4375 9.56825 11.0659C8.88423 11.2356 8.26056 11.5679 7.75967 12.0296C7.25878 12.4913 6.89824 13.0661 6.71412 13.6966C6.24376 16.0645 6.01551 18.4678 6.03236 20.875C6.01551 23.2822 6.24376 25.6856 6.71412 28.0534C6.89824 28.6839 7.25878 29.2588 7.75967 29.7204C8.26056 30.1821 8.88423 30.5144 9.56825 30.6841C12.0873 31.3125 22.2096 31.3125 22.2096 31.3125C22.2096 31.3125 32.332 31.3125 34.851 30.6841C35.535 30.5144 36.1587 30.1821 36.6596 29.7204C37.1605 29.2588 37.521 28.6839 37.7051 28.0534C38.1755 25.6856 38.4037 23.2822 38.3869 20.875C38.4037 18.4678 38.1755 16.0645 37.7051 13.6966ZM18.9742 25.3482V16.4018L27.3748 20.875L18.9742 25.3482Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                    <a href="https://trovo.live/s/ping_agency" class="contacts__icon-wrap"
                                       target="_blank">
                                        <svg viewBox="0 0 42 42" class="contacts__icon">
                                            <rect class="contacts__icon-rect" width="41.75" height="41.75" rx="5"
                                                  fill="#4F4F4F"/>
                                            <path class="contacts__icon-path"
                                                  d="M30.8479 26.0904C30.4171 24.3446 29.1251 23.1792 27.3055 23.1932C25.5241 23.2069 24.5352 24.3528 24.4021 25.6229C24.3041 26.5593 24.6575 27.3113 25.17 27.6188C26.1124 28.1841 26.774 27.2211 26.4068 26.8636C26.1704 26.6334 26.0607 26.4386 26.1124 26.0904C26.164 25.7423 26.4268 25.3938 27.0472 25.3938C27.6676 25.3938 28.1902 25.8424 28.3016 26.7709C28.4329 27.8663 27.7211 29.0523 26.4648 29.3211C24.8743 29.6612 23.2701 28.8023 22.7016 27.4192C22.1331 26.0361 22.2874 23.8794 23.6473 22.5604C24.7245 21.5156 26.1187 21.1306 27.3055 21.1306L31.2755 21.307C31.5693 21.3201 31.8317 21.1221 31.9032 20.8334L33.6003 13.8274C33.6127 13.7775 33.6189 13.7263 33.6189 13.6749C33.6189 13.3288 33.3811 13.0482 33.0392 13.0482H25.7803C25.7568 13.0482 25.7334 13.0455 25.7105 13.0402C25.5439 13.0012 25.4401 12.8329 25.4786 12.6643L26.2893 9.11779C26.2998 9.07149 26.3052 9.02411 26.3052 8.97653C26.3052 8.63046 26.028 8.3499 25.686 8.3499H18.1737C17.7539 8.3499 17.3863 8.63482 17.2769 9.04498L16.4482 12.5849C16.3753 12.8583 16.1302 13.0482 15.8503 13.0482H11.0387C10.6043 13.0482 10.2279 13.3531 10.1325 13.782L8.58395 20.7506C8.57393 20.7957 8.56885 20.8418 8.56885 20.8881C8.56885 21.2342 8.84608 21.5147 9.1881 21.5147H14.1213C14.1516 21.5147 14.1818 21.5177 14.2115 21.5237C14.4631 21.5741 14.6266 21.8214 14.5768 22.076C14.4305 22.8235 14.3322 23.5626 14.282 24.2932C14.1325 26.4656 14.6954 28.8443 16.3896 30.7017C19.2723 33.8622 24.5944 34.0455 27.7429 32.2897C30.2743 30.8781 31.3876 28.278 30.8479 26.0904Z"
                                                  fill="#1E1E1E"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<img src="/public/img/bg.png" alt="" class="body__background">
</body>
</html>
