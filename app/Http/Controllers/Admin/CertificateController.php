<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CertificateBuilder;
use App\Models\CertificateBuilderItem;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    //
    function index() : View {
        $certificate = CertificateBuilder::first();
        $certificateItems = CertificateBuilderItem::all();
       return view('frontend.student-dashboard.enrolled-course.certificate', compact('certificate', 'certificateItems')); 
    }
}
