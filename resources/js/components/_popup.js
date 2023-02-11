$(document).ready(function() {
    $('.show_popup').click(function() {
        $($('#' + $(this).attr("rel"))).fadeIn(300);
    })
    $('.close_popup').click(function() {
        $('.popup').fadeOut(300);
    });
    $('.popup__body').on('click', function(e) {
        if (this === e.target) {
            $('.popup').fadeOut(300);
        }
    })
})
