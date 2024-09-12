<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class StudentDashboardController extends Controller
{
    function index() : View {
        return view('frontend.student-dashboard.index');
    }


    function becomeInstructor() {
       return view('frontend.student-dashboard.become-instructor.index'); 
    }
}
