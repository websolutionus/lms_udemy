<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\OrderItem;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InstructorDashboardController extends Controller
{
    function index() : View {
        $pendingCourses = Course::where('instructor_id', user()->id)->where('is_approved', 'pending')
            ->orderBy('id', 'DESC')
            ->limit(5)->count();
        $approvedCourses = Course::where('instructor_id', user()->id)->where('is_approved', 'approved')
            ->orderBy('id', 'DESC')
            ->limit(5)->count();
        $rejectedCourses = Course::where('instructor_id', user()->id)->where('is_approved', 'rejected')
        ->orderBy('id', 'DESC')
        ->limit(5)->count();

        $orderItems = OrderItem::whereHas('course', function($query) {
            $query->where('instructor_id', user()->id);
        })->take(10)->get();

       return view('frontend.instructor-dashboard.index', compact('pendingCourses', 'approvedCourses', 'rejectedCourses', 'orderItems')); 
    }
}
