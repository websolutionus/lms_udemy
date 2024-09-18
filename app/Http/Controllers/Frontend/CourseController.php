<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function index() : View{
       return view('frontend.instructor-dashboard.course.index'); 
    }

    function create() : View{
       return view('frontend.instructor-dashboard.course.create'); 
    }
}
