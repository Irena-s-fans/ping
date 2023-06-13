export default class Popup {
    static show(popupSelector) {
        const popup = $(popupSelector);
        $('body').css('overflow-y', 'hidden');
        popup.fadeIn(250);
        popup.addClass('popup__active');
        return this;
    }

    static hide(popupSelector = '.popup__active') {
        const popup = $(popupSelector);
        $('body').css('overflow-y', 'auto');
        popup.fadeOut(125);
        popup.removeClass('popup__active');
        return this;
    }
}
