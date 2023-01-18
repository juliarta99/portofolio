<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use function PHPUnit\Framework\returnCallback;

class DashboardBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.blog.index',
        [
            'title' => 'Dashboard',
            'blogs' => Blog::with('category')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.create',
        [
            'title' => 'Create New Blog',
            'categories' => Category::all(),
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
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'image' => 'image|file|max:1024',
            'category_id' => 'required',
            'body' => 'required',
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('blog-images');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body, 150));

        Blog::create($validateData);
        return redirect('/dashboard/blog')->with('succes', 'Blog baru berhasil ditambahkan brother!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('dashboard.blog.show',
        [
            'title' => 'Detail Blog',
            'blog' => $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blog.edit',
        [
            'title' => 'Update Blog',
            'blog' => $blog,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'category_id' => 'required',
            'body' => 'required',
        ];
        
        
        if($request->slug != $blog->slug) {
            $rules['slug'] = 'required|unique:blogs';
        }
        
        $validateData = $request->validate($rules);

        if($request->image) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('blog-images');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body, 150));
        
        Blog::where('id', $blog->id)->update($validateData);
        return redirect('/dashboard/blog')->with('succes', 'Blog berhasil diedit brother!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if($blog->image) {
            Storage::delete($blog->image);
        }
        Blog::destroy('id', $blog->id);
        return redirect('/dashboard/blog')->with('succes', 'Blog berhasil dihapus brother!!');
    }

    public function createSlug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function deleteSession(Request $request)
    {
        $request->session()->flush();
        return redirect('/dashboard/blog');
    }
}
