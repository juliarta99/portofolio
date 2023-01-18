<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs',
        [
            'title' => 'Blogs',
            'blogs' => Blog::latest()->with('category')->filter(request(['search', 'category']))->paginate(7),
        ]);
    }

    public function show(Blog $blog)
    {
        $blog->increment('count');
        return view('blog',
        [
            'title' => 'Blog',
            'blog' => $blog,
        ]);
    }
}
