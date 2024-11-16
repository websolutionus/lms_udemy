<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;

class DatabaseClearController extends Controller
{
    //

    function index() : View
    {
        return view('admin.database-clear.index');     
    }

    function destroy(Request $request)
    {
        try {
            Artisan::call('migrate:fresh --seed');
            Artisan::call('optimize:clear');

            return response()->json(['status' => 'success']);
        }catch (\Throwable $th) {
            logger($th);
            throw $th;
        }
    }
}
