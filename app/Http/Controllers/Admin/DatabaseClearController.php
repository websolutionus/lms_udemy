<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DatabaseClearController extends Controller
{
    //

    function index() : View
    {
        return view('admin.database-clear.index');     
    }

    function destroy(Request $request) : Response
    {
        dd('working');
    }
}
