<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $categories = BlogCategory::all();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:blogs,title'],
            'image' => ['required', 'image', 'max:3000'],
            'description' => ['required', 'string'],
            'category' => ['required', 'exists:blog_categories,id'],
            'status' => ['nullable', 'boolean'],
        ]);

        $image = $this->uploadFile($request->file('image'));

        $blog = new Blog();
        $blog->image = $image;
        $blog->title = $request->title;
        $blog->slug = \Str::slug($request->title);
        $blog->description = $request->description;
        $blog->blog_category_id = $request->category;
        $blog->user_id = adminUser()->id;
        $blog->status = $request->status ?? 0;
        $blog->save();

        notyf()->success('Created Successfully!');

        return to_route('admin.blogs.index');
        
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
