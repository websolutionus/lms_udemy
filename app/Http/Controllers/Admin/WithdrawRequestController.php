<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Withdraw;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WithdrawRequestController extends Controller
{

    function index() : View
    {
        $withdraws = Withdraw::with('instructor')->paginate(25);
        return view('admin.withdraw-request.index', compact('withdraws'));
    }
    
}
