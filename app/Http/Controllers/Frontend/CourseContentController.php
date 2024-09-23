<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CourseContentController extends Controller
{
    //

    function createChapterModal() : String {
       return view('frontend.instructor-dashboard.course.partials.course-chapter-modal')->render(); 
    }
}
