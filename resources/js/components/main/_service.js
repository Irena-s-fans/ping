const lang = $('html').attr('lang');

const mapTitles = {
    'tournaments': lang === 'ru' ? 'Турниры' : 'Tournaments',
    'services': lang === 'ru' ? 'Услуги' : 'Services',
    'projects': lang === 'ru' ? 'Проекты' : 'Projects',
    'specialProjects': 'Special',
    'offline': lang === 'ru' ? 'Оффлайн' : 'Offline',
    'digital': 'Digital',
    'design': lang === 'ru' ? 'Дизайн' : 'Design',
}

$(document).ready(function() {
    $('.initialize').trigger('play');
    $('.initialize').trigger('pause');

    $(".services__list-item").on('mouseenter touchstart', function() {
        $('.services__list-item_active').removeClass('services__list-item_active');
        $(this).addClass('services__list-item_active');
    });

    $('.services__list-item').on('mouseleave touchleave touchcancel touchend', function() {
        $(this).removeClass('services__list-item_active');
    });

    $('.project__img-wrap').on('mouseenter touchstart', function() {
        $('.project__img-wrap_active').removeClass('project__img-wrap_active');
        $(this).addClass('project__img-wrap_active');
    });

    $('.project__img-wrap').on('mouseleave touchleave touchcancel touchend', function() {
        $(this).removeClass('project__img-wrap_active');
    });


    $('.show-services').on('click', function() {
        changeServicesContent($(this).attr('rel'));
    });

    addPlayOnHover($('.services__list-item'));
    addPlayOnHover($('.project__img-wrap'));

    $('.project__img-wrap_clickable').on('click', function(e) {
        if ($(this).attr('target') === '_self') {
            e.preventDefault();
            $('.popup-video__content').attr('src', $(this).attr('data-video-embed'));
            $('#video__popup').fadeIn(300);
        }
    })

    $('#video__popup').on('click', function(e) {
        if (e.target === this) {
            $('#video__popup').fadeOut(300);
            stopYoutubeVideo();
        }
    });

    $('.popup-video__cross').on('click', function() {
        $('#video__popup').fadeOut(300);
        stopYoutubeVideo();
    })

    function stopYoutubeVideo() {
        $('#video__popup .popup-video__content').attr('src', '');
    }
})

function changeServicesContent(contentId) {
    const titles = {
        project: lang === 'ru' ? 'Проект' : 'Project',
        services: lang === 'ru' ? 'Услуги' : 'Services',
    }

    const blockToShow = $(`#${contentId}`);
    const blockToHide = $('.services__wrap_active');
    const title = $('#services__title');

    title.fadeOut(300, () => {
        title.html(
            mapTitles[contentId] !== undefined ? mapTitles[contentId]
                : (contentId.search(/^project\d+$/gi) !== -1 ? titles.project : titles.services)
        );
        title.fadeIn(300);
    })

    blockToHide.fadeOut(300, () => {
        blockToHide.removeClass('services__wrap_active');
        blockToShow.fadeIn(300);
        blockToShow.addClass('services__wrap_active');
    });
}

function addPlayOnHover(el) {
    el.on('mouseenter touchstart', function() {
        const video = $(this).find('video');
        const playingVideo = $('.projects__video_playing')

        playingVideo.trigger('pause');
        playingVideo.removeClass('projects__video_playing');

        video.trigger('play');
        video.addClass('projects__video_playing');
    });

    el.on('mouseleave touchleave touchcancel touchend', function() {
        const video = $(this).find('video');

        video.trigger('pause');
        video.removeClass('projects__video_playing');
    });
}
