<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactSetting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontendContactController extends Controller
{
    //

    function index() : View
    {
        $contactCards = Contact::where('status', 1)->get();
        $contactSetting = ContactSetting::first();
        return view('frontend.pages.contact', compact('contactCards', 'contactSetting'));
    }
}
