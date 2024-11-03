<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\User;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class StudentDashboardController extends Controller
{
    use FileUpload;

    function index() : View {
        return view('frontend.student-dashboard.index');
    }


    function becomeInstructor() : View {
       if(auth()->user()->role == 'instructor') abort(403);

       return view('frontend.student-dashboard.become-instructor.index'); 
    }

    function becomeInstructorUpdate(Request $request, User $user) : RedirectResponse {
        $request->validate(['document' => ['required', 'mimes:pdf,doc,docx,jpg,png', 'max:12000']]);

        $filePath = $this->uploadFile($request->file('document'));
        $user->update([
            'approve_status' => 'pending',
            'document' => $filePath
        ]);

        return redirect()->route('student.dashboard');
    }

    function review() : View
    {
        $reviews = Review::where('user_id', user()->id)->paginate(10);
        return view('frontend.student-dashboard.review.index', compact('reviews'));
    }

    function reviewDestroy(string $id) {
        
    }
}
