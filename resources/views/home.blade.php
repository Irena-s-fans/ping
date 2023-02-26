@extends('layouts.app')

@section('content')
    <div class="greeting">
        <h1 class="greeting__title">
            Привет,
            <span class="greeting__title-nickname">
                {{ Auth::user()->name }}
            </span>
        </h1>
    </div>
    <h4 class="admin__title">
        Панель управления
    </h4>
    <div class="dashboard">
        <div class="dashboard__list">
            <a class="dashboard__el admin__btn" href="/admin/seo">
                <span class="admin__btn-text">
                    СЕО
                </span>
            </a>
            <a class="dashboard__el admin__btn" href="/admin/offers">
                <span class="admin__btn-text">
                    Проекты
                </span>
            </a>
        </div>
    </div>
</div>
@endsection
