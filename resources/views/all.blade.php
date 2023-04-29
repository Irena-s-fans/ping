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
    <a href="/admin/projects/new" class="admin__btn admin__btn_back">
        <span class="admin__btn-text">
            Добавить проект
        </span>
    </a>
    @if ($projects)
        <table>
            <th>title</th>
            <th>description</th>
            <th>preview</th>
            <th>pic</th>
            <th>video</th>
            <th>is_vk</th>
            <th>is_eng</th>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->title}}</td>
                    <td>{{ $project->description}}</td>
                    <td>{{ \App\Models\Project::getPreviewUrl($project->preview)}}</td>
                    <td>
                        @if ($project->pic)
                            {{ \App\Models\Project::getPicUrl($project->pic)}}
                        @endif
                    </td>
                    <td>{{$project->video}}</td>
                    <td>{{$project->is_vk}}</td>
                    <td>{{$project->is_eng}}</td>
                    <td><a href="/admin/projects/edit/<?= $project->id ?>">Редактировать</a></td>
                    <td><a class="project-delete" href="/admin/projects/delete" data-project-id="<?= $project->id ?>">X</a></td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
