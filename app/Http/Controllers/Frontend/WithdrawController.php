<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        return view('frontend.instructor-dashboard.withdraw.request-payout');     
    }
}
