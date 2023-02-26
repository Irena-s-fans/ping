@extends('layouts.app')

@section('content')
    <a href="/home" class="admin__btn admin__btn_back">
        <span class="admin__btn-text">
            На главную
        </span>
    </a>
    <h2 class="admin__title">
        Установка СЕО
    </h2>
    <form class="form admin__form" data-url="/form/admin/seo">
        <div class="form__block">
            <label for="title" class="form__label">
                Title
            </label>
            <input id="title" name="title" type="text" class="form__field" placeholder="Введите title">
        </div>
        <div class="form__block">
            <label for="description" class="form__label">
                Description
            </label>
            <textarea class="form__field" id="description" name="description" cols="30" rows="10" placeholder="Введите description"></textarea>
        </div>
        <div class="form__block">
            <a class="admin__btn form__btn">
                <span class="admin__btn-text">
                    Установить
                </span>
            </a>
        </div>
    </form>
@endsection
