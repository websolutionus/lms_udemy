<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CoursePageController extends Controller
{
    function index(): View
    {
        $courses = Course::where('is_approved', 'approved')
            ->where('status', 'active')
            ->paginate(12);
        return view('frontend.pages.course-page', compact('courses'));
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
