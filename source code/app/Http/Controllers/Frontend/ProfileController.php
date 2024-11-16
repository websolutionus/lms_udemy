<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\PasswordUpdateRequest;
use App\Http\Requests\Frontend\ProfileUpdateRequest;
use App\Http\Requests\Frontend\SocialUpdateRequest;
use App\Models\InstructorPayoutInformation;
use App\Models\PayoutGateway;
use App\Models\User;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    use FileUpload;

    function index() : View {
       return view('frontend.student-dashboard.profile.index'); 
    }

    function instructorIndex() : View {
        $gateways = PayoutGateway::where('status', 1)->get();
       return view('frontend.instructor-dashboard.profile.index', compact('gateways')); 
    }

    function profileUpdate(ProfileUpdateRequest $request) : RedirectResponse {
        $user = Auth::user();

        if($request->hasFile('avatar')) {
            $avatarPath = $this->uploadFile($request->file('avatar'));
            $this->deleteFile($user->image);
            $user->image = $avatarPath;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->bio = $request->about;
        $user->headline = $request->heading;
        $user->gender = $request->gender;
        $user->save();

        notyf()->success('Updated Successfully');

        return redirect()->back();
    }

    function updatePassword(PasswordUpdateRequest $request) : RedirectResponse {
        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();

        notyf()->success('Updated Successfully');

        return redirect()->back();

    }

    function updateSocial(SocialUpdateRequest $request) : RedirectResponse {
        $user = Auth::user();
        $user->facebook = $request->facebook;
        $user->x = $request->x;
        $user->linkedin = $request->linkedin;
        $user->website = $request->website;
        $user->save();
        
        notyf()->success('Updated Successfully');
        return redirect()->back();
    }

    function updateGatewayInfo(Request $request)
    {
        InstructorPayoutInformation::updateOrCreate(
            ['instructor_id' => user()->id],
            [
                'gateway' => $request->gateway,
                'information' => $request->information
            ]
         );

         notyf()->success('Updated Successfully');

         return redirect()->back();
    }
}
