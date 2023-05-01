$(document).ready(function() {
    $('.form__checkbox-label').each(function() {
        if ($(this).closest('.form__block').find('input[type="checkbox"]').is(':checked')) {
            $(this).addClass('form__checkbox-label_active');
        } else {
            $(this).removeClass('form__checkbox-label_active');
        }
    });

    $('form').validate({
        rules: {
            title: {
                required: true,
            },
            description: {
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
            text: {
                required: 'Заполните данное поле',
            },
        },
    })

    $('.edit__btn').on('click', function(e) {
        e.preventDefault();
        const form = $(this).closest('form');

        if (form.valid()) {
            const formData = new FormData(form.get(0));
            formData.set('text', tinymce.get('text').getContent({format: 'Document'}));
            formData.set('lang', form.find('input[name="lang"]').is(':checked') ? 'on' : 'off');
            formData.set('linkExternal', form.find('input[name="linkExternal"]').is(':checked') ? 'on' : 'off');

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
                success: (data) => {
                    alert(JSON.parse(data).msg);
                },
                error: () => {
                    alert('Ошибка при отправке формы.');
                },
            });
        }
    });

    $('.add__btn').on('click', function(e) {
        e.preventDefault();
        const form = $(this).closest('form');

        if (form.valid()) {
            const formData = new FormData(form.get(0));
            formData.set('text', tinymce.get('text').getContent({format: 'Document'}));
            formData.set('lang', form.find('input[name="lang"]').is(':checked') ? 'on' : 'off');
            formData.set('linkExternal', form.find('input[name="linkExternal"]').is(':checked') ? 'on' : 'off');

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
                success: (data) => {
                    alert(JSON.parse(data).msg);
                },
                error: () => {
                    alert('Ошибка при отправке формы.');
                },
            });
        }
    });

    $('.login__btn').on('click', function(e) {
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
        const formBlock = $(this).closest('.form__block');
        formBlock.find('.form__field_label').html(this.files.length ? this.files[0].name : 'Выберите файл');

        formBlock.find('.form__media.active').removeClass('active');
        if (this.files[0].type.startsWith('video')) {
            const videoTag = formBlock.find('.form-video');

            videoTag.attr('src', window.URL.createObjectURL(this.files[0]));
            videoTag.on('loadeddata', function() {
                window.URL.revokeObjectURL(videoTag.attr('src'));
                videoTag.addClass('active');
            });
        } else if (this.files[0].type.startsWith('image')) {
            const imgTag = formBlock.find('.form-img');

            imgTag.attr('src', window.URL.createObjectURL(this.files[0]));
            imgTag.on('load', function() {
                window.URL.revokeObjectURL(imgTag.attr('src'));
                imgTag.addClass('active');
            });
        } else {
            alert(`Формат файла не поддерживается. Текущий формат файла: ${this.files[0].type}`)
        }
    });

    $('.form__checkbox-label').on('click', function() {
        $(this).toggleClass('form__checkbox-label_active');
    });
});
