<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    function index() : View{
        $todaysOrder = Order::whereDate('created_at', Carbon::today())->sum('total_amount');
        $thisWeekOrders = Order::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('total_amount'); 
        $thisMonthOrders = Order::whereMonth('created_at', Carbon::now()->month)
        ->whereYear('created_at', Carbon::now()->year)->sum('total_amount');
        $thisYearOrders = Order::whereYear('created_at', Carbon::now()->year)->sum('total_amount');
        $totalOrders = Order::count();
        $pendingCourses = Course::where('is_approved', 'pending')->count();
        $rejectedCourses = Course::where('is_approved', 'rejected')->count();
        $totalCourses = Course::where('is_approved', 'approved')->count();



        return view('admin.dashboard', compact(
            'todaysOrder', 'thisWeekOrders', 'thisMonthOrders', 'thisYearOrders', 'totalOrders',
            'pendingCourses', 'rejectedCourses', 'totalCourses'
        ));
    }
}
