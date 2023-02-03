<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Креативное Агенство PinG</title>
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="preload" href="/public/fonts/Play-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/public/fonts/Play-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/public/fonts/TTSquares-Black.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" as="image" href="/public/img/loader__logo.png">
    <link rel="preload" as="image" href="/public/img/bg.png">
    <script src="/public/js/libs/jquery-3.6.1.min.js"></script>
    <script src="/public/js/index.js"></script>
</head>
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
    <div class="popup" id="popup1">
        <div class="popup__body">
            <div class="popup__content">
                <div class="popup__wrap">
                    <div class="popup__border close_popup">
                        <p class="popup__close">Закрыть</p>
                    </div>
                </div>
                <p class="popup__text">Все, что мы делаем, основано на принципе построения <span class="about__text_purple">значимых связей</span>.
                    В такой захватывающей отрасли, как <span class="popup__text_bold">киберспорт</span>, мы понимаем
                    важность обеспечения <span class="popup__text_bold">надежных партнерских отношений</span> между
                    брендами с известными игроками и лидерами мнений.
                </p>
                <p class="popup__text">
                    <span class="popup__text_blue">Наше агентство</span> хочет внести
                    активный вклад в создание <span class="about__text_purple">глобальной экосистемы киберспорта</span>.
                    Мы видим свою миссию в преодолении разрыва и установки коммуникации между <span class="popup__text_bold">брендами</span> и
                    <span class="popup__text_bold">миром геймеров</span> благодаря возможностям партнерства, маркетинга, создания и распространения контента.
                </p>
                <div class="popup__icon-wrap">
                    <p class="popup__icon">!</p>
                </div>
            </div>
        </div>

    </div>
    <div class="container main main_disabled">
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
                    <img class="header__logo" src="/public/img/logo.png" alt="">
                    <nav class="header__nav">
                        <ul class="header__nav-list"></ul>
                    </nav>
                    <div class="header__nav header__nav_mobile">
                        <ul class="header__nav-list_sm">
                            <li class="header__nav-item" rel="#about_section">
                                <p class="nav-item__text">О нас</p>
                            </li>
                            <li class="header__nav-item" rel="#services_section">
                                <p class="nav-item__text">Услуги</p>
                            </li>
                            <li class="header__nav-item" rel="#team_section">
                                <p class="nav-item__text">Команда</p>
                            </li>
                            <li class="header__nav-item" rel="#contacts_section">
                                <p class="nav-item__text">Контакты</p>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="content fullpage">
            <div class="swiper-wrapper">
                <div class="section swiper-slide" id="about_section">
                    <div class="section__wrapper">
                        <video class="about__video" src="/public/videos/main.mp4" autoplay muted loop preload></video>
                        <div class="about">
                            <div class="about__wrap">
                                <h1 class="about__title">
                                    О НАС
                                </h1>
                                <p class="about__text about__text_blue">
                                    Мы креативное агентство, совмещающее в себе функции event и рекламной деятельности в киберспорте, гейминге и гик культуре.
                                </p>
                            </div>
                            <p class="about__text about__text-description">
                                <span class="about__text_purple">PinG</span> поможет развиваться в мире маркетинга и коммерческого партнерства, чтобы найти подходящие возможности, которые соответствуют ценностям вашего бренда, команды и коммьюнити. Мы точно знаем, как создать проект, который привлекает любую аудиторию.
                            </p>
                        </div>
                        <div class="quest">
                            <h2 class="quest__title">
                                Главный <br> квест
                                <span class="quest__icon-wrap quest__icon-wrap_sm show_popup" rel="popup1">
                                    <span class="quest__icon" rel="popup1">!</span>
                                </span>
                            </h2>
                            <p class="quest__text">
                                <span class="quest__icon-wrap show_popup" rel="popup1">
                                    <span class="quest__icon">!</span>
                                </span>
                                Наша задача состоит в том, чтобы предлагать <span class="about__text_purple">инновационные и креативные кампании</span>, которые находят отклик в игровом сообществе.
                            </p>
                        </div>
                        <div class="partners">
                            <h2 class="partners__title">Партнёры</h2>
                            <div class="partners__list-wrapper">
                                <div class="partners__list swiper">
                                    <div class="swiper-wrapper partners__swiper-wrapper">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/igromania 2.png" alt="">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/wd.svg" alt="">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/universal.svg" alt="">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/ubisoft 2.png" alt="">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/kanobu.svg" alt="">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/dtf 2.png" alt="">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/syberia 2.png" alt="">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/sports_ru 2.png" alt="">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/viewsonic 2.png" alt="">
                                        <img class="partners__img swiper-slide" src="/public/img/partners/vk.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="partners__line"></div>
                        </div>
                    </div>
                </div>
                <div class="section swiper-slide" id="services_section">
                    <div class="section__wrapper section__wrapper_no-overflow">
                        <div class="services">
                            <h1 class="services__title">Услуги</h1>
                            <div class="services__line"></div>
                        </div>
                        <div class="services__list">
                            <div class="services__list-item" rel="tournaments">
                                <img class="services__list-img" src="/public/img/services/dir_desc_1.png" alt="">
                                <p class="services__list-text">Турниры</p>
                            </div>
                            <div class="services__list-item">
                                <img class="services__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                <p class="services__list-text">Спец проекты</p>
                            </div>
                            <div class="services__list-item">
                                <img class="services__list-img" src="/public/img/services/dir_desc_3.png" alt="">
                                <p class="services__list-text">Офлайн ивенты</p>
                            </div>
                            <div class="services__list-item">
                                <img class="services__list-img" src="/public/img/services/dir_desc_4.png" alt="">
                                <p class="services__list-text">digital реклама</p>
                            </div>
                            <div class="services__list-item">
                                <img class="services__list-img" src="/public/img/services/dir_desc_5.png" alt="">
                                <p class="services__list-text">дизайн</p>
                            </div>
                            <div class="services__list-item">
                                <p class="services__list-text">все проекты</p>
                            </div>
                        </div>
                        <div class="services__list_sm">
                            <div class="swiper services__swiper">
                                <div class="swiper-wrapper">
                                    <div class="services__list-item services__list-item_sm swiper-slide show_service" rel="tournaments">
                                        <img class="services__list-img" src="/public/img/services/dir_desc_1.png" alt="">
                                        <p class="services__list-text">Турниры</p>
                                    </div>
                                    <div class="services__list-item services__list-item_sm swiper-slide">
                                        <img class="services__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                        <p class="services__list-text">Спец проекты</p>
                                    </div>
                                    <div class="services__list-item services__list-item_sm swiper-slide">
                                        <img class="services__list-img" src="/public/img/services/dir_desc_3.png" alt="">
                                        <p class="services__list-text">Офлайн ивенты</p>
                                    </div>
                                    <div class="services__list-item services__list-item_sm swiper-slide">
                                        <img class="services__list-img" src="/public/img/services/dir_desc_4.png" alt="">
                                        <p class="services__list-text">digital реклама</p>
                                    </div>
                                    <div class="services__list-item services__list-item_sm swiper-slide">
                                        <img class="services__list-img" src="/public/img/services/dir_desc_5.png" alt="">
                                        <p class="services__list-text">дизайн</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services__list-line"></div>
                        <div class="services__btn-wrap">
                            <button class="services__btn show_projects">
                                <span class="services__btn-text">
                                    Все проекты
                                </span>
                            </button>
                        </div>
                        <div class="tournaments" id="tournaments">
                            <div class="tournaments__content">
                                <div class="tournaments__img-wrap">
                                    <img class="tournaments__img" src="/public/img/services/dir_desc_1.png" alt="">
                                </div>
                                <div class="tournaments__wrap">
                                    <h2 class="tournaments__title">Турниры</h2>
                                    <p class="tournaments__text"> Все профессиональные киберспортивные турниры начинаются с
                                        правильно
                                        разработанной концепции и стратегии.</p>
                                    <p class="tournaments__text"> Наша команда имеет многолетний опыт в создании форматов турниров и
                                        соревнований, а также сводов правил, регламента для участников, планировании и управлении
                                        матчами и, конечно же, администрировании.</p>
                                    <p class="tournaments__text"> Данный вид мероприятия повысит узнаваемость вашего бренда и
                                        привлечет
                                        внимание, установив прямой контакт с аудиторией.</p>
                                </div>
                                <div class="tournaments__btn close_service">
                                    <p class="tournaments__btn-text">К остальным услугам</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--            <div class="section swiper-slide">
                                <div class="section__wrapper">
                                    <div class="projects">
                                        <div class="projects__wrap">
                                            <h1 class="projects__title">Проекты</h1>
                                            <div class="services__line"></div>
                                        </div>

                                        <div class="projects__list">
                                            <div class="projects__list-item projects_1">
                                                <img class="projects__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                                <p class="projects__list-text">Проект 1</p>
                                            </div>
                                            <div class="projects__list-item">
                                                <img class="projects__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                                <p class="projects__list-text">Проект 2</p>
                                            </div>
                                            <div class="projects__list-item">
                                                <img class="projects__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                                <p class="projects__list-text">Проект 3</p>
                                            </div>
                                            <div class="projects__list-item">
                                                <img class="projects__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                                <p class="projects__list-text">Проект 1</p>
                                            </div>
                                            <div class="projects__list-item">
                                                <img class="projects__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                                <p class="projects__list-text">Проект 2</p>
                                            </div>
                                            <div class="projects__list-item">
                                                <img class="projects__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                                <p class="projects__list-text">Проект 3</p>
                                            </div>
                                            <div class="projects__list-item">
                                                <img class="projects__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                                <p class="projects__list-text">Проект 1</p>
                                            </div>
                                            <div class="projects__list-item">
                                                <img class="projects__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                                <p class="projects__list-text">Проект 2</p>
                                            </div>
                                            <div class="projects__list-item">
                                                <img class="projects__list-img" src="/public/img/services/dir_desc_2.png" alt="">
                                                <p class="projects__list-text">Проект 3</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project">
                                        <div class="projects__wrap">
                                            <h1 class="projects__title">Проект №1</h1>
                                            <div class="services__line"></div>
                                        </div>

                                        <div class="project__content">
                                            <div class="project__wrapper">
                                                <img class="project__img" src="/public/img/services/dir_desc_1.png" alt="">
                                                <img class="project__icon" src="/public/img/team/yt.svg" alt="">
                                            </div>

                                            <div class="project__wrap">
                                                <h2 class="project__title">Проектик был норм</h2>
                                                <p class="project__text"> Все профессиональные киберспортивные турниры начинаются с
                                                    правильно
                                                    разработанной концепции и стратегии.</p>
                                                <p class="project__text"> Наша команда имеет многолетний опыт в создании форматов турниров и
                                                    соревнований, а также сводов правил, регламента для участников, планировании и управлении
                                                    матчами и, конечно же, администрировании.</p>
                                                <p class="project__text"> Данный вид мероприятия повысит узнаваемость вашего бренда и
                                                    привлечет
                                                    внимание, установив прямой контакт с аудиторией.</p>
                                            </div>
                                            <div class="project__btn">
                                                <p class="project__btn-text">К остальным проектам</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                <div class="section swiper-slide" id="team_section">
                    <div class="section__wrapper">
                        <div class="team">
                            <div class="team__header">
                                <h1 class="services__title">Команда</h1>
                                <div class="services__line team__header-line"></div>
                            </div>
                            <div class="team__content">
                                <div class="team__item team__item_active">
                                    <div class="team__img-wrap">
                                        <img class="team__img_shadow" src="public/img/team/team1.png" alt="">
                                        <img class="team__img" src="public/img/team/team1.png" alt="">
                                    </div>
                                    <div class="team__about">
                                        <div class="team__wrap">
                                            <h2 class="team__name">Андрей Дубчак</h2>
                                            <p class="team__title">В агентстве отвечает за:</p>
                                        </div>
                                        <ul class="team__list">
                                            <li class="team__list-item">
                                                <p class="team__list-text">Стратегия продвижения бренда и сметы</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Креативное наполнение ивента</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Написание сценария</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">SMM</p>
                                            </li>
                                        </ul>
                                        <div class="team__socials">
                                            <a href="https://vk.com/cd_tux0" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                                </svg>
                                            </a>
                                            <a href="https://t.me/cd_tux0" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                                </svg>
                                            </a>
                                            <a href="mailto:dubchak@ping.moscow" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#email"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item">
                                    <div class="team__img-wrap">
                                        <img class="team__img_shadow" src="public/img/team/team2.png" alt="">
                                        <img class="team__img" src="public/img/team/team2.png" alt="">
                                    </div>
                                    <div class="team__about">
                                        <div class="team__wrap">
                                            <h2 class="team__name">Виктория Мартоян</h2>
                                            <p class="team__title">В агентстве отвечает за:</p>
                                        </div>
                                        <ul class="team__list">
                                            <li class="team__list-item">
                                                <p class="team__list-text">Индивидуальный мерч</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Графическое оформление для трансляций</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Дизайнерское решение по декору</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Дизайн соцсетей</p>
                                            </li>
                                        </ul>
                                        <div class="team__socials">
                                            <a href="https://vk.com/v1ktorika" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                                </svg>
                                            </a>
                                            <a href="https://t.me/V1ktorika" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                                </svg>
                                            </a>
                                            <a href="mailto:viktoria@ping.moscow" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#email"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item">
                                    <div class="team__img-wrap">
                                        <img class="team__img_shadow" src="public/img/team/team3.png" alt="">
                                        <img class="team__img" src="public/img/team/team3.png" alt="">
                                    </div>
                                    <div class="team__about">
                                        <div class="team__wrap">
                                            <h2 class="team__name">Антон Мурашов</h2>
                                            <p class="team__title">В агентстве отвечает за:</p>
                                        </div>
                                        <ul class="team__list">
                                            <li class="team__list-item">
                                                <p class="team__list-text">Работа с клиентами</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Поиск индивидуального подхода</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Создание креативов</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Подбор инфлюенсера</p>
                                            </li>
                                        </ul>
                                        <div class="team__socials">
                                            <a href="https://vk.com/deeoneezy" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                                </svg>
                                            </a>
                                            <a href="https://t.me/deeoneezy" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                                </svg>
                                            </a>
                                            <a href="mailto:murashov@ping.moscow" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#email"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__item">
                                    <div class="team__img-wrap">
                                        <img class="team__img_shadow" src="public/img/team/team4.png" alt="">
                                        <img class="team__img" src="public/img/team/team4.png" alt="">
                                    </div>
                                    <div class="team__about">
                                        <div class="team__wrap">
                                            <h2 class="team__name">Руслан Соколов</h2>
                                            <p class="team__title">В агентстве отвечает за:</p>
                                        </div>
                                        <ul class="team__list">
                                            <li class="team__list-item">
                                                <p class="team__list-text">Организация мероприятий</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Коммуникация с инфлюенсерами</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Продюссирование трансляций</p>
                                            </li>
                                            <li class="team__list-item">
                                                <p class="team__list-text">Event-management</p>
                                            </li>
                                        </ul>
                                        <div class="team__socials">
                                            <a href="https://vk.com/onitaka" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                                </svg>
                                            </a>
                                            <a href="https://t.me/Ruslan_maybe" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                                </svg>
                                            </a>
                                            <a href="mailto:sokolov@ping.moscow" class="team__socials-item" target="_blank">
                                                <svg viewBox="0 0 42 42" class="contacts__icon">
                                                    <use xlink:href="/public/img/contacts/sprite.svg#email"></use>
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
                                                <img src="/public/img/team/team1.png" alt="" class="team__img_shadow team__img_shadow-sm">
                                                <img src="/public/img/team/team1.png" alt="" class="team__img team__img_sm">
                                            </div>
                                            <h2 class="team__name team__name_sm">
                                                Андрей <br> Дубчак
                                            </h2>
                                            <img src="/public/img/team/triangle.svg" alt="" class="team__triangle">
                                            <div class="team__socials team__socials_sm">
                                                <a href="https://vk.com/cd_tux0" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                                    </svg>
                                                </a>
                                                <a href="https://t.me/cd_tux0" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                                    </svg>
                                                </a>
                                                <a href="mailto:dubchak@ping.moscow" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#email"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide team__slide">
                                            <div class="team__img-wrap team__img-wrap_sm">
                                                <img src="/public/img/team/team2.png" alt="" class="team__img_shadow team__img_shadow-sm">
                                                <img src="/public/img/team/team2.png" alt="" class="team__img team__img_sm">
                                            </div>
                                            <h2 class="team__name team__name_sm">
                                                Виктория <br> Мартоян
                                            </h2>
                                            <img src="/public/img/team/triangle.svg" alt="" class="team__triangle">
                                            <div class="team__socials team__socials_sm">
                                                <a href="https://vk.com/v1ktorika" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                                    </svg>
                                                </a>
                                                <a href="https://t.me/V1ktorika" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                                    </svg>
                                                </a>
                                                <a href="mailto:viktoria@ping.moscow" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#email"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide team__slide">
                                            <div class="team__img-wrap team__img-wrap_sm">
                                                <img src="/public/img/team/team3.png" alt="" class="team__img_shadow team__img_shadow-sm">
                                                <img src="/public/img/team/team3.png" alt="" class="team__img team__img_sm">
                                            </div>
                                            <h2 class="team__name team__name_sm">
                                                Антон <br> Мурашов
                                            </h2>
                                            <img src="/public/img/team/triangle.svg" alt="" class="team__triangle">
                                            <div class="team__socials team__socials_sm">
                                                <a href="https://vk.com/deeoneezy" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                                    </svg>
                                                </a>
                                                <a href="https://t.me/deeoneezy" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                                    </svg>
                                                </a>
                                                <a href="mailto:murashov@ping.moscow" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#email"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide team__slide">
                                            <div class="team__img-wrap team__img-wrap_sm">
                                                <img src="/public/img/team/team4.png" alt="" class="team__img_shadow team__img_shadow-sm">
                                                <img src="/public/img/team/team4.png" alt="" class="team__img team__img_sm">
                                            </div>
                                            <h2 class="team__name team__name_sm">
                                                Руслан <br> Соколов
                                            </h2>
                                            <img src="/public/img/team/triangle.svg" alt="" class="team__triangle">
                                            <div class="team__socials team__socials_sm">
                                                <a href="https://vk.com/onitaka" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                                    </svg>
                                                </a>
                                                <a href="https://t.me/Ruslan_maybe" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                                    </svg>
                                                </a>
                                                <a href="mailto:sokolov@ping.moscow" class="team__socials-item team__socials-item_sm" target="_blank">
                                                    <svg viewBox="0 0 42 42" class="contacts__icon">
                                                        <use xlink:href="/public/img/contacts/sprite.svg#email"></use>
                                                    </svg>
                                                </a>
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
                                                    Стратегия продвижения бренда и сметы
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Креативное наполнение ивента
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Написание сценария
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    SMM
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide team__slide-text">
                                        <ul class="team__list team__list_sm">
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Индивидуальный мерч
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Графическое оформление для трансляций
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Дизайнерское решение по декору
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Дизайн соцсетей
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide team__slide-text">
                                        <ul class="team__list team__list_sm">
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Работа с клиентами
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Поиск индивидуального подхода
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Создание креативов
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Подбор инфлюенсера
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="swiper-slide team__slide-text">
                                        <ul class="team__list team__list_sm">
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Организация мероприятий
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Коммуникация с инфлюенсерами
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Продюссирование трансляций
                                                </p>
                                            </li>
                                            <li class="team__list-item team__list-item_sm">
                                                <p class="team__list-text team__list-text_sm">
                                                    Event-management
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
                <div class="section swiper-slide" id="contacts_section">
                    <div class="section__wrapper">
                        <div class="contacts">
                            <div class="contacts__header">
                                <h1 class="services__title contacts__header-title">Контакты</h1>
                                <div class="contacts__icon-list">
                                    <div class="contacts__icon-row">
                                        <a href="https://vk.com/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                            </svg>
                                        </a>
                                        <a href="https://www.facebook.com/pingmsk" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#fb"/>
                                            </svg>
                                        </a>
                                        <a href="https://twitter.com/agencyping" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#tw"></use>
                                            </svg>
                                        </a>
                                        <a href="https://www.instagram.com/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#inst"></use>
                                            </svg>
                                        </a>
                                        <a href="https://t.me/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="contacts__icon-row">
                                        <a href="https://discord.gg/2tdUey9Xzz" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#ds"></use>
                                            </svg>
                                        </a>
                                        <a href="https://www.twitch.tv/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#twitch"></use>
                                            </svg>
                                        </a>
                                        <a href="https://youtube.com/@ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#yt"></use>
                                            </svg>
                                        </a>
                                        <a href="https://trovo.live/s/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#tr"></use>
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
                                        <label class="form__label" for="name">Имя</label>
                                        <div class="form__input-wrap">
                                            <input class="form__input form__field" type="text" id="name" name="name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form__item">
                                        <label class="form__label" for="email">E-Mail</label>
                                        <div class="form__input-wrap">
                                            <input class="form__input form__field" type="text" id="email" name="email" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form__item">
                                        <label class="form__label form__textarea-label" for="message">Сообщение</label>
                                        <div class="form__texarea-wrap">
                                            <textarea class="form__textarea form__field" id="message" name="message" cols="30" rows="10" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <button class="form__btn" type="submit">Отправить</button>
                                </div>
                                <div class="form__list">
                                    <h2 class="form__subtitle">Выберите услугу</h2>
                                    <div class="form__list-item">
                                        <input name="tours" type="checkbox" id="tours" hidden>
                                        <label class="form__checkbox-label" for="tours">
                                            <span class="form__checkbox"></span>
                                            Турниры
                                        </label>
                                    </div>
                                    <div class="form__list-item">
                                        <input name="specialProjects" type="checkbox" id="specialProjects" hidden>
                                        <label class="form__checkbox-label" for="specialProjects">
                                            <span class="form__checkbox"></span>
                                            Спец проекты
                                        </label>
                                    </div>
                                    <div class="form__list-item">
                                        <input name="offlineEvents" type="checkbox" id="offlineEvents" hidden>
                                        <label class="form__checkbox-label" for="offlineEvents">
                                            <span class="form__checkbox"></span>
                                            Офлайн ивенты
                                        </label>
                                    </div>
                                    <div class="form__list-item">
                                        <input name="digitalAds" type="checkbox" id="digitalAds" hidden>
                                        <label class="form__checkbox-label" for="digitalAds">
                                            <span class="form__checkbox"></span>
                                            Digital-реклама
                                        </label>
                                    </div>
                                    <div class="form__list-item">
                                        <input name="design" type="checkbox" id="design" hidden>
                                        <label class="form__checkbox-label" for="design">
                                            <span class="form__checkbox"></span>
                                            Дизайн
                                        </label>
                                    </div>
                                </div>
                                <div class="form__btn-wrap">
                                    <button class="form__btn form__btn_sm" type="submit">Отправить</button>
                                </div>
                            </form>
                            <div class="contacts__icons-wrap">
                                <div class="contacts__icon-list contacts__icon-list_sm">
                                    <div class="contacts__icon-row">
                                        <a href="https://vk.com/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#vk"></use>
                                            </svg>
                                        </a>
                                        <a href="https://www.facebook.com/pingmsk" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#fb"/>
                                            </svg>
                                        </a>
                                        <a href="https://twitter.com/agencyping" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#tw"></use>
                                            </svg>
                                        </a>
                                        <a href="https://www.instagram.com/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#inst"></use>
                                            </svg>
                                        </a>
                                        <a href="https://t.me/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#tg"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="contacts__icon-row">
                                        <a href="https://discord.gg/2tdUey9Xzz" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#ds"></use>
                                            </svg>
                                        </a>
                                        <a href="https://www.twitch.tv/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#twitch"></use>
                                            </svg>
                                        </a>
                                        <a href="https://youtube.com/@ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#yt"></use>
                                            </svg>
                                        </a>
                                        <a href="https://trovo.live/s/ping_agency" class="contacts__icon-wrap" target="_blank">
                                            <svg viewBox="0 0 42 42" class="contacts__icon">
                                                <use xlink:href="/public/img/contacts/sprite.svg#tr"></use>
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
