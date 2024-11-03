<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseLanguage;
use App\Models\CourseLevel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CoursePageController extends Controller
{
    function index(Request $request): View
    {
        // dd($request->all());
        $courses = Course::where('is_approved', 'approved')
            ->where('status', 'active')
            ->when($request->has('search') && $request->filled('search'), function($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->when($request->has('category') && $request->filled('category'), function($query) use ($request) {
                $query->whereIn('category_id', $request->category);
            })
            ->when($request->has('level') && $request->filled('level'), function($query) use ($request) {
                $query->whereIn('course_level_id', $request->level);
            })
            ->when($request->has('language') && $request->filled('language'), function($query) use ($request) {
                $query->whereIn('course_language_id', $request->language);
            })
            ->when($request->has('from') && $request->has('to') && $request->filled('from') && $request->filled('to'), function($query) use ($request) {
                $query->whereBetween('price', [$request->from, $request->to]);
            })
            ->orderBy('id', $request->filled('order') ? $request->order : 'desc')
            ->paginate(12);

        $categories = CourseCategory::where('status', 1)->whereNull('parent_id')->get();
        $levels = CourseLevel::all();
        $languages = CourseLanguage::all();
        return view('frontend.pages.course-page', compact('courses', 'categories', 'levels', 'languages'));
    }

    function show(string $slug): View
    {
        $course = Course::where('slug', $slug)
            ->where('is_approved', 'approved')
            ->where('status', 'active')
            ->firstOrFail();

        return view('frontend.pages.course-details-page', compact('course'));
    }
}
