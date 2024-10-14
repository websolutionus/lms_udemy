<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Withdraw;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    function index() : View
    {
        return view('frontend.instructor-dashboard.withdraw.index');    
    }

    function requestPayout() : View 
    {
        $currentBallance = user()->wallet;
        $pendingBallance = Withdraw::where('instructor_id', user()->id)->where('status', 'pending')->sum('amount');
        $totalPayout = Withdraw::where('instructor_id', user()->id)->where('status', 'approved')->sum('amount');
        return view('frontend.instructor-dashboard.withdraw.request-payout', compact('currentBallance', 'pendingBallance', 'totalPayout'));     
    }
}
