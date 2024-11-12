<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUpdateController extends Controller
{
    function index() : View
    {
        $admin = Auth::guard('admin')->user(); 
        return view('admin.profile.index', compact('admin'));
    }

    function profileUpdate(Request $request) : RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'bio' => ['nullable', 'string', 'max:25']
        ]);

        Auth::guard('admin')->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'bio' => $request->bio
        ]);

        notyf()->success('Updated Successfully.');

        return redirect()->back();
    }
}
