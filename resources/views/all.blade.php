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
                <td>Редактировать</td>
                <td>х</td>
            </tr>
    @endforeach
        </table>
@endif
