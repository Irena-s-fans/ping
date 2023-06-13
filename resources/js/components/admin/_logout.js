$(document).ready(function() {
   $('.logout').on('click', function(e) {
       e.preventDefault();
       $.ajax({
           type: 'POST',
           url: '/logout',
           datatype: 'json',
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
           },
           success: () => {
               window.location.href = '/home';
           },
           error: (e) => {
               alert(`Произошла ошибка: ${e}`)
           }
       });
   });
});
