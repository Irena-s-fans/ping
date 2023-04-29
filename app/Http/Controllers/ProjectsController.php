<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Models\Project;
use App\Models\Seo;
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

    public function delete(Request $request)
    {
        Project::where('id', $request->projectID)->delete();
        return json_encode([
            'status' => 1,
        ]);
    }

    /**
     * Редактирование проекта
     *
     * @param Request $request
     * @return View
     */
    public function edit(Request $request)
    {

        return view('project_edit', [
            'projectId' => 'projectId'
        ]);
    }
}
