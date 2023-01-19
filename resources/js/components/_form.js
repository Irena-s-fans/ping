$(document).ready(function() {
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
           url: '/form/send/',
           data: formData,
           success: () => {
                alert('норм форму отправили');
           },
           error: () => {
                alert('чёто ошибка при отправке формы');
           },
       });
   });
});
