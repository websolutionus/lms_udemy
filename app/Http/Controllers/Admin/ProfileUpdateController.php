<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUpdateController extends Controller
{

    use FileUpload;

    function index(): View
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile.index', compact('admin'));
    }

    function profileUpdate(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'bio' => ['nullable', 'string', 'max:25'],
            'image' => ['nullable', 'image', 'max:3000']
        ]);

        $admin = Auth::guard('admin')->user();

        if($request->hasFile('image')) {
            $image = $this->uploadFile($request->file('image'));
            $this->deleteFile($admin->image);
           $admin->image = $image; 
        }

       $admin->name = $request->name;
       $admin->email = $request->email;
       $admin->bio = $request->bio;
       $admin->save();

        notyf()->success('Updated Successfully.');

        return redirect()->back();
    }

    function updatePassword(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'current_password' => ['required', 'current_password'],
                'password' => ['required', 'confirmed', 'min:8']
            ]
        );

        Auth::guard('admin')->user()->update([
            'password' => bcrypt($request->password),
        ]);

        notyf()->success('Updated Successfully.');

        return redirect()->back();
    }
}
