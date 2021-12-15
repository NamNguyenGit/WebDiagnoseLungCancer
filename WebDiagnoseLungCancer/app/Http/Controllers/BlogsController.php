<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {

        $blog = Blog::all();
        return view('manager.blogs.index', compact('blog'));
    }

    public function create()
    {
        return view('manager.blogs.create');
    }
    public function store(Request $request)
    {
        if ($request->hasFile('file_upload')) {
            $file_name = $request->file_upload->getClientOriginalName();
            $request->file_upload->move(public_path('/img'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        $add = Blog::create([
            'title' => $request->title,
            'smalltitle' => $request->smalltitle,
            'content' => $request->content,
            'author' => $request->author,
            'publication_date' => $request->publication_date,
            'img' => $request->image,

        ]);
        if ($add) {
            return redirect()->route('blogs.index')->with('success', 'Add successful');
        } else {
            return redirect()->route('blogs.index')->with('fail', 'Add fail');
        }
    }

    public function edit($id)
    {
        $blogs = Blog::where('id', $id)->first();

        return view('manager.blogs.update', compact('blogs'));
    }

    public function update(Request $request)
    {
        if ($request->hasFile('file_upload')) {
            $file_name = $request->file_upload->getClientOriginalName();
            $request->file_upload->move(public_path('/img'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        $edit = Blog::where('id', $request->id)->update([
            'title' => $request->title,
            'smalltitle' => $request->smalltitle,
            'content' => $request->content,
            'author' => $request->author,
            'publication_date' => $request->publication_date,
            'img' => $request->image,
        ]);

        if ($edit) {
            return redirect()->route('blogs.index')->with('success', 'Edit successful');
        } else {
            return redirect()->route('blogs.index')->with('fail', 'Edit fail');
        }
    }
    public function delete($id)
    {
        Blog::where('id', $id)->delete();
        return redirect()->route('blogs.index');
    }

}
