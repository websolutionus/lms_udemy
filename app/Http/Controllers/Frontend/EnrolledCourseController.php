<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EnrolledCourseController extends Controller
{
    function index() : View
    {
        $enrollments = Enrollment::with('course')->where('user_id', user()->id)->get();
        return view('frontend.student-dashboard.enrolled-course.index', compact('enrollments'));     
    }

    function payerIndex(string $slug) : View
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        if(!Enrollment::where('user_id', user()->id)->where('course_id', $course->id)->where('have_access', 1)->exists()) return abort(404);
        return view('frontend.student-dashboard.enrolled-course.player-index', compact('course'));
    }
}
