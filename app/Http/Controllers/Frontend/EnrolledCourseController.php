<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

    function payerIndex() : View
    {
        return view('frontend.student-dashboard.enrolled-course.player-index');     
    }
}
