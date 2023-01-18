<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects',
        [
            'title' => 'Projects',
            'projects' => Project::latest()->filter(request(['pemrogramans']))->with('pemrogramans')->paginate(6),
        ]);
    }

    public function show(Project $project)
    {
        return view('project',
        [
            'title' => 'Project',
            'project' => $project,
        ]);
    }
}
