<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.category.index',
        [
            'title' => 'Dashboard Category',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.create',
        [
            'title' => 'Create Category'
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
                'name' => 'required|max:255|unique:categories',
                'slug' => 'required|unique:categories'
            ]
        );

        Category::create($validateData);
        return redirect('/dashboard/category')->with('succes', 'Category berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit',
        [
            'title' => 'Edit Category',
            'category' => $category
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [];
        if($request->name != $category->name) {
            $rules['name'] = 'required|unique:categories|max:255';
        };

        if($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        };

        $validateData = $request->validate($rules);

        Category::where('id', $category->id)->update($validateData);
        return redirect('/dashboard/category')->with('succes', 'Berhasil melakukan update category');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy('id', $category->id);
        return redirect('/dashboard/category')->with('succes', 'Berhasil menghapus category');
    }

    public function createSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }

    public function deleteSession(Request $request)
    {
        $request->session()->flush();
        return redirect('/dashboard/category');
    }
}
