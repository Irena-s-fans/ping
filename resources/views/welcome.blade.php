<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/index.css">
    <script src="/resources/js/libs/jquery-3.6.1.min.js"></script>
    <script src="/public/js/index.js"></script>
</head>
<body>
    <div class="container_fluid">
        <div class="header">
            <img class="header__logo" src="/public/img/logo.png" alt="">
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <p class="nav-item__text">О нас</p>
                    </li>
                    <li class="header__nav-item"><a class="header__nav-link" href="">Услуги</a> </li>
                    <li class="header__nav-item"><a class="header__nav-link" href="">Команда</a> </li>
                    <li class="header__nav-item"><a class="header__nav-link" href="">Партнёры</a> </li>
                    <li class="header__nav-item"><a class="header__nav-link" href="">Контакты</a> </li>
                </ul>
            </nav>
        </div>
        <div class="content">
            <div class="about">
                <div class="about__wrap">
                    <h1 class="about__title">О НАС</h1>
                    <p class="about__text about__text_blue">Мы креативное агентство, совмещающее в себе функции event и
                        рекламной деятельности в киберспорте, гейминге и
                        гик культуре.</p>
                </div>

                <p class="about__text"><span class="about__text_purple">PinG</span> поможет развиваться в мире
                    маркетинга и
                    коммерческого партнерства, чтобы найти подходящие возможности,
                    которые соответствуют ценностям вашего бренда, команды и коммьюнити. Мы точно знаем, как создать
                    проект,
                    который привлекает любую аудиторию. </p>
            </div>

            <div class="quest">
                <h2 class="quest__title">Главный квест</h2>
                <p class="quest__text">Наша задача состоит в том, чтобы предлагать <span
                        class="about__text-purple">инновационные и креативные кампании</span>, которые находят отклик в
                    игровом сообществе.</p>
                <p class="quest__icon show_popup" rel="popup1">!</p>
            </div>

            <div class="popup" id="popup1">
                <div class="popup__body">
                    <div class="popup__content">
                        <div class="popup__wrap">
                            <div class="popup__border close_popup">
                                <p class="popup__close" href="">Закрыть</p>
                            </div>
                        </div>
                        <p class="popup__text">Все, что мы делаем, основано на принципе построения <span
                                class="about__text_purple">значимых связей</span> . <br>
                            В такой захватывающей отрасли, как <span class="popup__text_bold">киберспорт</span>, мы
                            понимаем
                            важность обеспечения <span class="popup__text_bold">надежных партнерских отношений</span>
                            между
                            брендами с известными игроками и лидерами мнений.
                        </p>
                        <p class="popup__text"><span class="popup__text_blue">Наше агентство</span> хочет внести
                            активный вклад
                            в создание <span class="about__text_purple">глобальной экосистемы киберспорта</span> .
                            Мы видим свою миссию в преодолении разрыва и установки коммуникации между <span
                                class="popup__text_bold">брендами</span> и <span class="popup__text_bold">миром
                                геймеров</span>
                            благодаря возможностям партнерства, маркетинга, создания и распространения контента.
                        </p>
                        <p class="popup__icon">!</p>
                    </div>
                </div>

            </div>

            <div class="partners">
                <h2 class="partners__title">Партнёры</h2>
                <div class="partners__list">
                    <img class="partners__list-item" src="/public/img/partners/igromania 2.png" alt="">
                    <img class="partners__list-item" src="/public/img/partners/western_digital 2.png" alt="">
                    <img class="partners__list-item" src="/public/img/partners/universal_pictures 2.png" alt="">
                    <img class="partners__list-item" src="/public/img/partners/ubisoft 2.png" alt="">
                    <img class="partners__list-item" src="/public/img/partners/kanobu 2.png" alt="">
                    <img class="partners__list-item" src="/public/img/partners/dtf 2.png" alt="">
                    <img class="partners__list-item" src="/public/img/partners/syberia 2.png" alt="">
                    <img class="partners__list-item" src="/public/img/partners/sports_ru 2.png" alt="">
                    <img class="partners__list-item" src="/public/img/partners/viewsonic 2.png" alt="">
                    <img class="partners__list-item" src="/public/img/partners/vk_gaming 2.png" alt="">
                </div>
                <div class="partners__line"></div>
            </div>
            

            <div class="services">
                <h1 class="services__title">Услуги</h1>
                <div class="services__line"></div>
            </div>

            <div class="services__list">
                <div class="services__list-item show_service" rel="tournaments">
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
                <div class="services__list-item show_projects">
                    <p class="services__list-text">все проекты</p>
                </div>
            </div>



            <div class="tournaments" id="tournaments">
                <div class="tournaments__content">
                    <img class="tournaments__img" src="/public/img/services/dir_desc_1.png" alt="">
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
                        <img class="project__icon" src="/public/img/services/YT.png" alt="">
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

            <div class="team">
                <div class="team__header">
                    <h1 class="services__title">Команда</h1>
                    <div class="services__line"></div>
                </div>

                <div class="team__content">
                    <img class="team__img" src="public/img/team/Andrey.png" alt="">
                    <div class="team__about">
                        <div class="team__wrap">
                            <h2 class="team__name"> Андрей Дубчак</h2>
                            <p class="team__title">Cоздаст для вас:</p>
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
                            <img class="team__socials-item" src="public/img/team/VK.png" alt="">
                            <img class="team__socials-item" src="public/img/team/TG.png" alt="">
                            <img class="team__socials-item" src="public/img/team/YT.png" alt="">
                        </div>
                    </div>
                    <img class="team__img-item" src="" alt="">
                    <img class="team__img-item" src="" alt="">
                    <img class="team__img-item" src="" alt="">
                </div>
            </div>

            <div class="team__line"></div>

            <div class="reviews">
                <div class="reviews__header">
                    <h1 class="services__title">Отзывы</h1>
                    <div class="services__line"></div>
                </div>
                <div class="reviews__content">

                </div>
            </div>

            <div class="contacts">
                <div class="contacts__header">
                    <h1 class="services__title">Контакты</h1>
                    <img class="contacts__icon" src="public/img/contacts/VK.png" alt="">
                    <img class="contacts__icon" src="public/img/contacts/TG.png" alt="">
                    <img class="contacts__icon" src="public/img/contacts/YT.png" alt="">
                    <div class="services__line"></div>
                </div>

                <form class="form" action="">
                    <div class="form__wrap">
                        <div class="form__item">
                            <label class="form__label" for="">Имя</label>
                            <div class="form__input-wrap">
                                <input class="form__input" type="text">
                            </div>
                        </div> 
                        <div class="form__item">
                            <label class="form__label" for="">E-Mail</label>
                            <div class="form__input-wrap">
                                <input class="form__input" type="text">
                            </div>
                        </div>
                        <div class="form__item">
                            <label class="form__label" for="">Сообщение</label>
                            <div class="form__texarea-wrap">
                                <textarea class="form__textarea" name="" id="" cols="30" rows="10"></textarea>
                            </div>
                            
                        </div>
                            <button class="form__btn" type="submit">Отправить</button> 
                    </div>
                    <div class="form__list">
                        <h2 class="form__subtitle">Выберите услугу</h2>
                        <div class="form__list-item">
                            <input class="form__checkbox" name="" type="checkbox">
                            <label class="form__checkbox-text" for="">Турниры</label>
                        </div>
                        <div class="form__list-item">
                            <input class="form__checkbox" name="" type="checkbox">
                            <label class="form__checkbox-text" for="">Спец проекты</label>
                        </div>
                        <div class="form__list-item">
                            <input class="form__checkbox" name="" type="checkbox">
                            <label class="form__checkbox-text" for="">Офлайн ивенты</label>
                        </div>
                        <div class="form__list-item">
                            <input class="form__checkbox" name="" type="checkbox">
                            <label class="form__checkbox-text" for="">Digital-реклама</label>
                        </div>
                        <div class="form__list-item">
                            <input class="form__checkbox" name="" type="checkbox">
                            <label class="form__checkbox-text" for="">Дизайн</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>