<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseCategoryStoreRequest;
use App\Models\CourseCategory;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $categories = CourseCategory::paginate(15);
        return view('admin.course.course-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.course.course-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseCategoryStoreRequest $request) : RedirectResponse
    {
        $imagePath = $this->uploadFile($request->file('image'));
        
        $category = new CourseCategory();
        $category->image = $imagePath;
        $category->icon = $request->icon;
        $category->name = $request->name;
        $category->slug = \Str::slug($request->name);
        $category->show_at_trending = $request->show_at_treading ?? 0;
        $category->status = $request->status ?? 0;
        $category->save();

        notyf()->success("Created Successfully!");

        return to_route('admin.course-categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseCategory $course_category) : View
    {
        return view('admin.course.course-category.edit', compact('course_category'));
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
