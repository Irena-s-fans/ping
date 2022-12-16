$(document).ready(function() {
    $('.show_popup').click(function() {
        let popup_id = $('#' + $(this).attr("rel"));
        $(popup_id).show();
    })
    $('.close_popup').click(function() {
        $('.popup').hide();
    })

})
