<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontendContactController extends Controller
{
    //

    function index() : View
    {
        $contactCards = Contact::where('status', 1)->get();
        return view('frontend.pages.contact', compact('contactCards'));
    }
}
