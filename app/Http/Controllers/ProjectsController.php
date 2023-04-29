<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Models\Project;
use App\Models\Seo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('all', [
            'projects' => $projects
        ]);
    }

    /**
     * Добавление проекта
     *
     * @param Request $request
     * @return false|string
     */
    public function add(Request $request)
    {
        $item = new Project();
        if ($request->hasFile('preview')) {
            $destinationPath = 'img/preview';
            $file = $request->file('preview');
            $file_name = $file->getClientOriginalName();
            if ($file->move($destinationPath , $file_name)) {
                $item->preview = $file_name;
            }
        }

        if ($request->hasFile('media')) {
            $destinationPath = 'img/media';
            $file = $request->file('media');
            $file_name = $file->getClientOriginalName();
            if ($file->move($destinationPath , $file_name)) {
                $item->pic = $file_name;
            }
        }

        $item->title = $request->title;
        $item->description = $request->text;
        $item->video = $request->link;
        $item->is_vk = Project::getResultForVk($request->linkExternal);
        $item->is_eng = Project::getResultForEng($request->lang);

        if ($item->save()) {
            return \json_encode([
                'addStatus' => 1,
            ]);
        } else {
            return \json_encode([
                'addStatus' => 0,
            ]);
        }
    }

    public function delete(Request $request)
    {
        Project::where('id', $request->projectID)->delete();
        return json_encode([
            'status' => 1,
        ]);
    }

    /**
     * Страница редактирование проекта
     *
     * @param Request $request
     * @return View
     */
    public function edit(Request $request)
    {
        $project = Project::getProjectById($request->projectID);

        return view('project_edit', [
            'project' => $project
        ]);
    }

    /**
     * Редактирование проекта
     *
     * @param Request $request
     * @return false|string
     */
    public function projectEdit(Request $request)
    {
        $item = Project::getProjectById($request->projectID);

        if ($item->preview != $request->preview) {
            $item->preview = $request->preview;
        }

        if ($item->is_eng != Project::getResultForEng($request->lang)) {
            $item->is_eng = Project::getResultForEng($request->lang);
        }

        if ($item->is_vk != Project::getResultForVk($request->linkExternal)) {
            $item->is_vk = Project::getResultForVk($request->linkExternal);
        }

        if ($item->title != $request->title) {
            $item->title = $request->title;
        }

        if ($item->pic != $request->media) {
            $item->pic = $request->media;
        }

        if ($item->video != $request->link) {
            $item->video = $request->link;
        }

        if ($item->description != $request->text) {
            $item->description = $request->text;
        }

        if ($item->save()) {
            return \json_encode([
                'editStatus' => 1,
            ]);
        } else {
            return \json_encode([
                'editStatus' => 0,
            ]);
        }
    }
}
