<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use PhpParser\Node\Expr\BinaryOp\Equal;

class BlogController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $blogs = Blog::all();
        return view("site.index",[
            "blogs" => $blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // find blog with this id
        $blog = Blog::where("slug","=",$id,)->first();
        $similarBlogs = Blog::limit(3)->get();
        // dd($similarBlogs);

        return view("site.show",[
            "blog" => $blog,
            "similarBlogs" => $similarBlogs,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
