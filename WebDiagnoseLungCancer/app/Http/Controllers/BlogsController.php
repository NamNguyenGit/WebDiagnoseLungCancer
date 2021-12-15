<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogsController extends Controller
{
    public function index()
    {

        $blog = Blog::all();
        return view('manager.blogs.index', compact('blog'));
    }
}
