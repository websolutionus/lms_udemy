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


}
