$(document).ready(function() {
    const mediaFiles = $('img, video[preload]');
    const overallAmount = mediaFiles.length;
    let loadedAmount = 0;

    changeLoaderPercent(loadedAmount / overallAmount);

    mediaFiles.on('load', function() {
        loadedAmount++;
        changeLoaderPercent(loadedAmount / overallAmount);

        setTimeout(function() {
            finishLoad();
        }, 4000)
    });
});

$(window).on('load', function() {
    finishLoad();
});

function changeLoaderPercent(ratio) {
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
    $('.loader').fadeOut(500);
    $('.main').fadeIn(750);
}
