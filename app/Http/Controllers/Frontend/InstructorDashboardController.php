<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InstructorDashboardController extends Controller
{
    function index() : View {
       return view('instructor.dashboard'); 
    }
}
