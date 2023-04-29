@extends('layouts.app')

@section('content')
    @if ($projects)
        <table>
            <th>title</th>
            <th>description</th>
            <th>preview</th>
            <th>pic</th>
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
                    <td><a href="/admin/projects/edit/<?= $project->id ?>">Редактировать</a></td>
                    <td><a class="project-delete" href="/admin/projects/delete" data-project-id="<?= $project->id ?>">X</a></td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection
