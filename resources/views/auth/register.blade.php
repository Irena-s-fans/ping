@extends('layouts.app')

@section('content')
    <h4 class="admin__title">
        Регистрация
    </h4>
    <div class="card-body">
        <form class="form admin__form" data-url="/register" redirect-on-submit>
            <div class="form__block">
                <label for="name" class="form__label">Имя</label>
                <input id="name" type="text" class="form__field" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>
            <div class="form__block">
                <label for="email" class="form__label">E-mail</label>
                <input id="email" type="email" class="form__field" name="email" value="{{ old('email') }}" autocomplete="email">
            </div>
            <div class="form__block">
                <label for="password" class="form__label">Пароль</label>
                <input id="password" type="password" class="form__field" name="password" autocomplete="new-password">
            </div>
            <div class="form__block">
                <label for="password-confirm" class="form__label">Подтвердите пароль</label>
                <input id="password-confirm" type="password" class="form__field" name="password_confirmation" autocomplete="new-password">
            </div>
            <div class="form__block">
                <a class="form__btn admin__btn">
                    <span class="admin__btn-text">
                         Зарегаться
                    </span>
                </a>
            </div>
        </form>
    </div>
@endsection
