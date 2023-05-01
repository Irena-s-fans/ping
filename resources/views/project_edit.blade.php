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
        Изменить проект
    </h2>
    <form class="form admin__form" data-url="/admin/projects/edit/project_edit">
        <input type="hidden" name="projectID" value="<?= $project->id ?>">
        <div class="form__block">
            <input name="lang" type="checkbox" id="lang" <?= $project->is_eng ? 'checked' : '' ?> hidden>
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
                <?= $project->preview ?: 'Выберите файл' ?>
            </label>
            <?php $isPreviewVideo = explode('/', mime_content_type(base_path() . '/img/preview/' . $project->preview))[0] === 'video'; ?>
            <video
                class="form__media form-video{{ $isPreviewVideo ? ' active' : '' }}"
                src="{{ $isPreviewVideo ? '/img/preview/' . $project->preview : '' }}"
                muted
                loop
                autoplay
            >
            </video>
            <img
                class="form__media form-img{{ !$isPreviewVideo ? ' active' : '' }}"
                src="{{ !$isPreviewVideo ? '/img/preview/' . $project->preview : '' }}"
                alt="Превьюшка"
            >
            <input id="preview" name="preview" type="file" value="<?= $project->preview ?: '' ?>" class="form__field form__field_file" accept="image/*, video/*">
        </div>
        <div class="form__block">
            <label for="title" class="form__label">
                Название проекта
            </label>
            <input id="title" name="title" type="text" class="form__field" value="<?= $project->title ?: '' ?>" placeholder="Введите заголовок">
        </div>
        <div class="form__block">
            <p class="form__label">
                Превью внутри проекта (фото/видео)
            </p>
            <label for="media" class="form__field form__field_label">
                {{ $project->pic ?: 'Выберите файл' }}
            </label>
            <?php $isMediaVideo = explode('/', mime_content_type(base_path() . '/img/media/' . $project->pic))[0] === 'video'; ?>
            <video
                class="form__media form-video{{ $isMediaVideo ? ' active' : '' }}"
                src="{{ $isMediaVideo ? '/img/media/' . $project->pic : '' }}"
                muted
                loop
                autoplay
            >
            </video>
            <img
                class="form__media form-img{{ !$isMediaVideo ? ' active' : '' }}"
                src="{{ !$isMediaVideo ? '/img/media/' . $project->pic : '' }}"
                alt="Превьюшка"
            >
            <input id="media" name="media" value="<?= \App\Models\Project::getPreviewUrl($project->preview) ?: '' ?>" type="file" class="form__field form__field_file" accept="image/*, video/*">
        </div>
        <div class="form__block">
            <label for="description" class="form__label">
                Ссылка на полное видео
            </label>
            <input id="link" name="link" type="text" value="<?= $project->video ?: '' ?>" class="form__field" placeholder="Введите ссылку">
        </div>
        <div class="form__block">
            <input name="linkExternal" type="checkbox" id="linkExternal" <?= !$project->is_vk ? 'checked' : '' ?> hidden>
            <label class="form__checkbox-label" for="linkExternal">
                <span class="form__checkbox"></span>
                Встроено видео из youtube
            </label>
        </div>
        <div class="form__block">
            <label for="description" class="form__label">
                Основной текст
            </label>
            <textarea class="wysiwyg" id="text" name="text" cols="30" rows="10" placeholder="Введите текст">
                <?= $project->description ?: '' ?>
            </textarea>
        </div>
        <div class="form__block">
            <a class="admin__btn form__btn edit__btn">
                <span class="admin__btn-text">
                    Изменить
                </span>
            </a>
        </div>
    </form>
@endsection

