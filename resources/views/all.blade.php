@extends('layouts.app')

@section('content')
    <a href="/home" class="admin__btn admin__btn_back">
        <span class="admin__btn-text">
            На главную
        </span>
    </a>
    <h2 class="admin__title">
        Все проекты
    </h2>
    <a href="/admin/projects/new" class="admin__btn add-project__btn">
        <span class="admin__btn-text">
            Добавить проект
        </span>
    </a>
    @if ($projects)
        <table class="table">
            <thead>
                <tr class="table__row">
                    <td class="table__cell">
                        <p class="table__text table__text_bold table__text_xl table__text_blue">
                            №
                        </p>
                    </td>
                    <td class="table__cell">
                        <p class="table__text table__text_bold table__text_xl table__text_blue">
                            Заголовок
                        </p>
                    </td>
                    <td class="table__cell">
                        <p class="table__text table__text_bold table__text_xl table__text_blue">
                            Язык
                        </p>
                    </td>
                    <td class="table__cell">

                    </td>
                    <td>

                    </td>
                </tr>
            </thead>
            @foreach ($projects as $key => $project)
                <tr>
                    <td class="table__cell">
                        <p class="table__text">
                            {{ $key + 1 }}
                        </p>
                    </td>
                    <td class="table__cell">
                        <p class="table__text">
                            {{ $project->title }}
                        </p>
                    </td>
                    <td class="table__cell">
                        <p class="table__text">
                            {{ $project->is_eng ? 'English' : 'Русский' }}
                        </p>
                    </td>
                    <td class="table__cell">
                        <a class="table__link" href="/admin/projects/edit/<?= $project->id ?>">
                            <img class="table__img" src="/public/img/pencil.svg" alt="">
                        </a>
                    </td>
                    <td class="table__cell">
                        <a class="table__link table__link_red project-delete" href="/admin/projects/delete" data-project-id="<?= $project->id ?>">
                            <img class="table__img" src="/public/img/trash.svg" alt="">
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
