<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    function index() : View {
       return view('frontend.student-dashboard.profile.index'); 
    }

    function profileUpdate(ProfileUpdateRequest $request) : RedirectResponse {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->bio = $request->about;
        $user->headline = $request->heading;
        $user->gender = $request->gender;
        $user->save();

        return redirect()->back();
    }
}
