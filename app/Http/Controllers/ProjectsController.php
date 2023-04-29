<?php

namespace App\Http\Controllers;

use App\Mail\Feedback;
use App\Models\Project;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('all', [
            'projects' => $projects
        ]);
    }

    public function new()
    {
        return view('project_add');
    }

    public function delete(Request $request)
    {
        Project::where('id', $request->projectID)->delete();
        return json_encode([
            'status' => 1,
        ]);
    }
}
