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
           datatype: 'json',
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
           },
           data: JSON.stringify(formData),
           success: () => {
                alert('Форма была отправлена.');
           },
           error: () => {
                alert('Ошибка при отправке формы.');
           },
       });
    });

    $('.form__checkbox-label').on('click', function() {
       $(this).toggleClass('form__checkbox-label_active');
    });
});
