$(document).ready(function() {
    $('form').validate({
        rules: {
            title: {
                required: true,
            },
            description: {
                required: true,
            },
            preview: {
                required: true,
            },
            text: {
                required: true,
            },
        },
        messages: {
            title: {
                required: 'Заполните данное поле',
            },
            description: {
                required: 'Заполните данное поле',
            },
            preview: {
                required: 'Заполните данное поле',
            },
            text: {
                required: 'Заполните данное поле',
            },
        },
    })

    $('form .form__btn').on('click', function(e) {
        e.preventDefault();
        const form = $(this).closest('form');

        if (form.valid()) {
            const formData = new FormData(form.get(0));

            $.ajax({
                type: 'POST',
                url: form.attr('data-url'),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: () => {
                    if (form.attr('redirect-on-submit') !== undefined) {
                        window.location.href = '/home';
                        return;
                    }
                    alert('Форма была отправлена.');
                },
                error: () => {
                    alert('Ошибка при отправке формы.');
                },
            });
        }
    });

    $('.form__field_file').on('change', function() {
        $(this).closest('.form__block').find('.form__field_label').html(this.files.length ? this.files[0].name : 'Выберите файл');
    });

    $('.form__checkbox-label').on('click', function() {
        $(this).toggleClass('form__checkbox-label_active');
    });
});
