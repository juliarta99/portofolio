<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Project;

class LandingController extends Controller
{
    public function index()
    {
        return view('index',
        [ 
            'title' => 'Portofolio Juliarta',
            'blogs' => Blog::latest()->with(['category'])->paginate(4),
            'projects' => Project::latest()->with('pemrogramans')->paginate(4)
        ]);
    }

    public function about()
    {
        return view('about',
        [
            'title' => 'About',
        ]);
    }
}
