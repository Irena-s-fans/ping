import Popup from '../admin/Popup';

$(document).ready(function() {
    $('.form__field').on('focus', function() {
       $('.form__field-wrap_active').removeClass('form__field-wrap_active');
       $(this).parent().addClass('form__field-wrap_active');
    });

    $('.form__btn').on('click', function(e) {
       e.preventDefault();
       const formData = {};
       $('.form input[type="text"]').each(function() {
          formData[$(this).attr('name')] = $(this).val();
       });
       $('.form textarea').each(function() {
           formData[$(this).attr('name')] = $(this).val();
       });
       $('.form input[type="checkbox"]').each(function() {
           formData[$(this).attr('name')] = $(this).is(':checked') ? 'Y' : 'N';
       });
       $.ajax({
           type: 'POST',
           url: '/form/send',
           contentType: 'application/json; charset=utf-8',
           dataType: 'json',
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
           },
           data: JSON.stringify(formData),
           beforeSend() {
               Popup.hide().show('#loader__popup');
           },
           success: (res) => {
               if (res.status === 1) {
                   $('#popup-success').fadeIn(300);
               } else {
                   $('#popup-error').fadeIn(300);
               }
           },
           error: () => {
               $('#popup-error').fadeIn(300);
           },
           complete() {
               Popup.hide('#loader__popup');
           }
       });
    });

    $('.form__checkbox-label').on('click', function() {
       $(this).toggleClass('form__checkbox-label_active');
    });
});
