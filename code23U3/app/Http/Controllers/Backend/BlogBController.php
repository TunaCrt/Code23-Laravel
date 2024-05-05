<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //dd("salam dünya");
        $blogs = Blog::orderBy("id")->get();
        return view("admin.blogs.index", compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view("admin.blogs.create");


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->summary = $request->summary;
        $blog->content = $request->content;
        if ($request->hasFile("photo")) {
            $path = public_path("Blogs/Photos");
            $name = Str::random(10);
            $file = $request->file("photo");
            $name = $name . $file->getClientOriginalName();
            $file->move($path, $name);
            $blog->photo = $name;
        }
        $blog->save();
        return redirect()->route("admin.blogs.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $blog = Blog::find($id);
        return view("admin.blogs.edit", compact("blog"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $blog = Blog::find($request->id);
        if (isset($blog)) {
            $blog->title = $request->title;
            $blog->summary = $request->summary;
            $blog->content = $request->content;
            if ($request->hasFile("photo")) {
                $path = public_path("Blogs/Photos");
                $name = Str::random(10);
                $file = $request->file("photo");
                $name = $name . $file->getClientOriginalName();
                $file->move($path, $name);
                $blog->photo = $name;
            }
            $blog->save();
        }
        return redirect()->route("admin.blogs.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = Blog::find($id);
        if (isset($blog)) {
            $blog->delete();

        }
        return redirect()->route("admin.blogs.index");
    }
}
