$(document).ready(function() {
    const el = $('.admin__table-language');
    const wrapper = $(el.attr('data-target'));
    const itemsToFilterClass = el.attr('data-target-item');
    const itemsToFilter = wrapper.find(`.${itemsToFilterClass}`);

    let filterBy = el.find('.admin__table-language-el_active').attr('data-value-language');

    if (filterBy === '*') {
        itemsToFilter.each(function() {
            $(this).removeClass(`${itemsToFilterClass}_disabled`)
        });
    } else {
        itemsToFilter.each(function() {
            if ($(this).find('.admin__table-language-content').html().trim() !== filterBy) {
                $(this).addClass(`${itemsToFilterClass}_disabled`)
            } else {
                $(this).removeClass(`${itemsToFilterClass}_disabled`)
            }
        });
    }

    $(document).on('click', '.admin__table-language-el', function() {
        $('.admin__table-language-el_active').removeClass('admin__table-language-el_active');
        $(this).addClass('admin__table-language-el_active');

        filterBy = $(this).attr('data-value-language');

        if (filterBy === '*') {
            itemsToFilter.each(function() {
                $(this).removeClass(`${itemsToFilterClass}_disabled`)
            });
        } else {
            itemsToFilter.each(function() {
                if ($(this).find('.admin__table-language-content').html().trim() !== filterBy) {
                    $(this).addClass(`${itemsToFilterClass}_disabled`)
                } else {
                    $(this).removeClass(`${itemsToFilterClass}_disabled`)
                }
            });
        }
    });
});
