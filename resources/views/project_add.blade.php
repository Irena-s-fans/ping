@extends('layouts.app')

@section('content')
    <a href="/home" class="admin__btn admin__btn_back">
        <span class="admin__btn-text">
            На главную
        </span>
    </a>
    <a href="/admin/projects/all" class="admin__btn admin__btn_back">
        <span class="admin__btn-text">
            Все проекты
        </span>
    </a>
    <h2 class="admin__title">
        Добавить проект
    </h2>
    <form class="form admin__form" data-url="/admin/projects/add" redirect-on-submit>
        <input type="hidden" name="projectID" value="">
        <div class="form__block">
            <input name="lang" type="checkbox" id="lang" hidden>
            <label class="form__checkbox-label" for="lang">
                <span class="form__checkbox"></span>
                На английском
            </label>
        </div>
        <div class="form__block">
            <p class="form__label">
                Превью (фото/видео)
            </p>
            <label for="preview" class="form__field form__field_label">
                Выберите файл
            </label>
            <div class="form__file-list"></div>
            <input id="preview" name="preview" type="file" class="form__field form__field_file">
        </div>
        <div class="form__block">
            <label for="title" class="form__label">
                Название проекта
            </label>
            <input id="title" name="title" type="text" class="form__field" placeholder="Введите заголовок">
        </div>
        <div class="form__block">
            <p class="form__label">
                Превью внутри проекта (фото/видео)
            </p>
            <label for="media" class="form__field form__field_label">
                Выберите файл
            </label>
            <div class="form__file-list"></div>
            <input id="media" name="media" type="file" class="form__field form__field_file">
        </div>
        <div class="form__block">
            <label for="description" class="form__label">
                Ссылка на полное видео
            </label>
            <input id="link" name="link" type="text" class="form__field" placeholder="Введите ссылку">
        </div>
        <div class="form__block">
            <input name="linkExternal" type="checkbox" id="linkExternal" hidden>
            <label class="form__checkbox-label" for="linkExternal">
                <span class="form__checkbox"></span>
                Встроенное видео из ютуба?
            </label>
        </div>
        <div class="form__block">
            <label for="description" class="form__label">
                Основной текст
            </label>
            <textarea class="wysiwyg" id="text" name="text" cols="30" rows="10" placeholder="Введите текст"></textarea>
        </div>
        <div class="form__block">
            <a class="admin__btn form__btn add__btn">
                <span class="admin__btn-text">
                    Добавить
                </span>
            </a>
        </div>
    </form>
@endsection

