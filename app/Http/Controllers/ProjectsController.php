<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Models\Project;
use App\Models\Seo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
            if ($file->move($destinationPath, $file_name)) {
                $item->preview = $file_name;
            }
        } else {
            return \json_encode([
                'status' => 0,
                'msg' => 'Файл для превью проекта не был выбран. Загрузите и попробуйте ещё раз',
            ]);
        }

        if ($request->hasFile('media')) {
            $destinationPath = 'img/media';
            $file = $request->file('media');
            $file_name = $file->getClientOriginalName();
            if ($file->move($destinationPath, $file_name)) {
                $item->pic = $file_name;
            }
        } else {
            return \json_encode([
                'status' => 0,
                'msg' => 'Файл видео внутри проекта не был выбран. Загрузите и попробуйте ещё раз',
            ]);
        }

        $item->title = $request->title;
        $item->description = $request->text;
        $item->video = $request->link;
        $item->is_vk = Project::getResultForVk($request->linkExternal);
        $item->is_eng = Project::getResultForEng($request->lang);

        if ($item->save()) {
            return \json_encode([
                'status' => 1,
                'msg' => 'Проект был успешно добавлен!',
            ]);
        } else {
            return \json_encode([
                'status' => 0,
                'msg' => 'Произошла ошибка при сохранении проекта. Проверьте введённые данные и попробуйте ещё раз',
            ]);
        }
    }

    public function delete(Request $request)
    {
        $item = Project::getProjectById($request->projectID);
        File::delete(Project::getPicUrl($item->pic));
        File::delete(Project::getPreviewUrl($item->preview));
        $item->delete();

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

        if ($request->hasFile('preview') && $item->preview != $request->preview) {
            //$item->preview = $request->preview;
            $destinationPath = 'img/preview';
            $file = $request->file('preview');
            $file_name = $file->getClientOriginalName();
            if ($file->move($destinationPath, $file_name)) {
                File::delete(Project::getPreviewUrl($item->preview));
                $item->preview = $file_name;
            }
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

        if ($request->hasFile('media') && $item->pic != $request->media) {
            //$item->pic = $request->media;
            $destinationPath = 'img/media';
            $file = $request->file('media');
            $file_name = $file->getClientOriginalName();
            if ($file->move($destinationPath, $file_name)) {
                File::delete(Project::getPicUrl($item->pic));
                $item->pic = $file_name;
            }
        }

        if ($item->video != $request->link) {
            $item->video = $request->link;
        }

        if ($item->description != $request->text) {
            $item->description = $request->text;
        }

        if ($item->save()) {
            return \json_encode([
                'status' => 1,
                'msg' => 'Проект был успешно изменён!',
            ]);
        } else {
            return \json_encode([
                'status' => 0,
                'msg' => 'Произошла ошибка. Попробуйте ещё раз',
            ]);
        }
    }
}
