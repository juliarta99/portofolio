<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use App\Models\Pemrograman;
use Illuminate\Support\Facades\Storage;

class DashboardProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.project.index',
        [
            'title' => 'Dashboard Project',
            'projects' => Project::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create',
        [
            'title' => 'Create New Project',
            'pemrogramans' => Pemrograman::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'link' => 'max:255',
            'github' => 'required|max:255',
            'slug' => 'required|unique:projects',
            'deskripsi' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('project_images');
        }

        Project::create($validateData);
        return redirect('/dashboard/project')->with('succes', 'Berhasil menambahkan project baru!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('dashboard.project.show',
        [
            'title' => 'Show project',
            'project' => $project,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.project.edit',
        [
            'title' => 'Edit Project',
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $rules = [
            'name' => 'required|max:255',
            'link' => 'max:255',
            'github' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'deskripsi' => 'required'
        ];

        if($request->slug != $project->slug) {
            $rules['slug'] = 'required|unique:projects';
        }

        $validateData = $request->validate($rules);

        if($request->image) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('project_images');
        }

        Project::where('id', $project->id)->update($validateData);
        return redirect('/dashboard/project')->with('succes', 'Berhasil mengupdate project!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if($project->image) {
            Storage::delete($project->image);
        }
        Project::destroy('id', $project->id);
        return redirect('/dashboard/project')->with('succes', 'Project berhasil dihapus');
    }

    public function getInsertPemrograman(Project $project)
    {
        return view('dashboard.project.pemrograman',
        [
            'title' => 'Insert Pemrograman',
            'project' => $project,
            'pemrogramans' => Pemrograman::all(),
        ]);
    }

    public function insertPemrograman(Request $request)
    {
        $project = Project::find($request->project);
        $project->pemrogramans()->attach($request->pemrograman);
        return redirect('/dashboard/project')->with('succes', 'Bahasa pemrograman berhasil ditambahkan');
    }

    public function createSlug(Request $request)
    {
        $slug = SlugService::createSlug(Project::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    public function deleteSession(Request $request)
    {
        $request->session()->flush();
        return redirect('/dashboard/project');
    }
}
