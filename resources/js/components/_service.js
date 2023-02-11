const mapTitles = {
    'tournaments': 'Турниры',
    'services': 'Услуги',
    'projects': 'Проекты',
}

$(document).ready(function() {
    $('.show-services').on('click', function() {
        console.log('click')
        changeServicesContent($(this).attr('rel'));
    });
})

function changeServicesContent(contentId) {
    const blockToShow = $(`#${contentId}`);
    const blockToHide = $('.services__wrap_active');

    $('#services__title').fadeOut(300, () => {
        $('#services__title').html(mapTitles[contentId] || 'Услуги');
        $('#services__title').fadeIn(300);
    })

    blockToHide.fadeOut(300, () => {
        blockToHide.removeClass('services__wrap_active');
        blockToShow.fadeIn(300);
        blockToShow.addClass('services__wrap_active');
    });
}
