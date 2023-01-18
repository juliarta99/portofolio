<?php

namespace App\Http\Controllers;

use App\Models\Pemrograman;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardPemrogramanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pemrograman.index',
        [
            'title' => 'Dashboard Bahasa Pemrograman',
            'pemrogramans' => Pemrograman::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pemrograman.create',
        [
            'title' => 'Create Bahasa Pemrograman'
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
        $validateData = $request->validate(
            [
                'name' => 'required|max:255|unique:pemrogramen',
                'slug' => 'required|unique:pemrogramen'
            ]
        );

        Pemrograman::create($validateData);
        return redirect('/dashboard/pemrograman')->with('succes', 'Bahasa pemrograman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemrograman  $pemrograman
     * @return \Illuminate\Http\Response
     */
    public function show(Pemrograman $pemrograman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemrograman  $pemrograman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemrograman $pemrograman)
    {
        return view('dashboard.pemrograman.edit',
        [
            'title' => 'Edit Bahasa Pemrograman',
            'pemrograman' => $pemrograman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemrograman  $pemrograman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemrograman $pemrograman)
    {
        $rules =[];

        if($request->name != $pemrograman->name) {
            $rules['name'] = 'required|max:255|unique:pemrogramen';
        };

        if($request->slug != $pemrograman->slug) {
            $rules['slug'] = 'required|unique:pemrogramen';
        };

        $validateData = $request->validate($rules);
        Pemrograman::where('id', $pemrograman->id)->update($validateData);
        return redirect('/dashboard/pemrograman')->with('succes', 'Bahasa Pemrograman berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemrograman  $pemrograman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemrograman $pemrograman)
    {
        Pemrograman::destroy('id', $pemrograman->id);
        return redirect('/dashboard/pemrograman')->with('succes', 'Berhasil menghapus Bahasa Pemrograman');
    }

    public function createSlug(Request $request)
    {
        $slug = SlugService::createSlug(Pemrograman::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    public function deleteSession(Request $request)
    {
        $request->session()->flush();
        return redirect('/dashboard/pemrograman');
    }
}
