<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\ContactSetting;
use App\Models\Enrollment;
use App\Models\Review;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendContactController extends Controller
{
    function index() : View
    {
        $contactCards = Contact::where('status', 1)->get();
        $contactSetting = ContactSetting::first();
        return view('frontend.pages.contact', compact('contactCards', 'contactSetting'));
    }


    function sendMail(Request $request) {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
        ]);        

        if (config('mail_queue.is_queue')) {
            
            Mail::to(config('settings.receiver_email'))->queue( new ContactMail(
                $request->name,
                $request->email,
                $request->subject,
                $request->message
            ));
        } else {
            Mail::to(config('settings.receiver_email'))->send( new ContactMail(
                $request->name,
                $request->email,
                $request->subject,
                $request->message
            ));
        }

        notyf()->success('Sent Successfully!');

        return redirect()->back();
    }

    function storeReview(Request $request) : RedirectResponse{
       $request->validate([
        'rating' => ['required', 'numeric'],
        'review' => ['required', 'string', 'max:1000'],
        'course' => ['required', 'integer']
       ]);

       $checkPurchase = Enrollment::where('user_id', user()->id)->where('course_id', $request->course)->exists();
       $alreadyReviewed = Review::where('user_id', user()->id)->where('course_id', $request->course)->where('status', 1)->exists();

       if(!$checkPurchase) {
        notyf()->error('Please Purchase Course First!');
        return redirect()->back();
       }

       if($alreadyReviewed) {
        notyf()->error('You Already Reviewed This Course!');
        return redirect()->back();
       }

       $review = new Review();
       $review->user_id = user()->id;
       $review->course_id = $request->course;
       $review->rating = $request->rating;
       $review->review = $request->review;
       $review->save();

       notyf()->success('Review Submitted Successfully!');
       return redirect()->back();
    }
}
