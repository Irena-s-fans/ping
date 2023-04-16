@extends('layouts.app')

@section('content')
    <a href="/home" class="admin__btn admin__btn_back">
        <span class="admin__btn-text">
            На главную
        </span>
    </a>
    <a href="/admin/all" class="admin__btn admin__btn_back">
        <span class="admin__btn-text">
            Все проекты
        </span>
    </a>
    <h2 class="admin__title">
        Добавить проект
    </h2>
    <form class="form admin__form" data-url="/form/admin/offers">
        <div class="form__block">
            <p class="form__label">
                Превью (фото)
            </p>
            <label for="preview" class="form__field form__field_label">
                Выберите файл
            </label>
            <div class="form__file-list"></div>
            <input id="preview" name="preview" type="file" class="form__field form__field_file">
        </div>
        <div class="form__block">
            <p class="form__label">
                Видео\Фото внутри проекта
            </p>
            <label for="media" class="form__field form__field_label">
                Выберите файл
            </label>
            <div class="form__file-list"></div>
            <input id="media" name="media" type="file" class="form__field form__field_file">
        </div>
        <div class="form__block">
            <label for="title" class="form__label">
                Заголовок
            </label>
            <input id="title" name="title" type="text" class="form__field" placeholder="Введите заголовок">
        </div>
        <div class="form__block">
            <label for="description" class="form__label">
                Основной текст
            </label>
            <textarea class="form__field" id="text" name="text" cols="30" rows="10" placeholder="Введите текст"></textarea>
        </div>
        <div class="form__block">
            <a class="admin__btn form__btn">
                <span class="admin__btn-text">
                    Добавить
                </span>
            </a>
        </div>
    </form>
@endsection

