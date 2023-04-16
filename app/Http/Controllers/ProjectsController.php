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
}
