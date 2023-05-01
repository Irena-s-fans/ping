@extends('layouts.app')

@section('content')
    <h4 class="admin__title">
        Вход
    </h4>
    <form class="form admin__form" data-url="/login" redirect-on-submit>
        <div class="form__block">
            <label for="email" class="form__label">E-mail</label>
            <input id="email" type="email" class="form__field" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
        </div>
        <div class="form__block">
            <label for="password" class="form__label">Пароль</label>
            <input id="password" type="password" class="form__field" name="password" required autocomplete="current-password">
        </div>
        <div class="form__block">
            <input name="remember" type="checkbox" id="remember" hidden {{ old('remember') ? 'checked' : '' }}>
            <label class="form__checkbox-label{{ old('remember') ? ' form__checkbox-label_active' : '' }}" for="remember">
                <span class="form__checkbox"></span>
                Запомнить меня
            </label>
        </div>
        <div class="form__block form__block_horizontal">
            <a class="form__btn admin__btn login__btn">
                <span class="admin__btn-text">
                    Войти
                </span>
            </a>
            @if (Route::has('password.request'))
                <a class="form__link" href="{{ route('password.request') }}">
                    Забыли пароль?
                </a>
            @endif
        </div>
    </form>
@endsection
