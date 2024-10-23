<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CertificateBuilder;
use App\Models\CertificateBuilderItem;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificateController extends Controller
{
    //
    function index() {
        $certificate = CertificateBuilder::first();
        $certificateItems = CertificateBuilderItem::all();
        $pdf = Pdf::loadView('frontend.student-dashboard.enrolled-course.certificate', compact('certificate', 'certificateItems'))
        ->setPaper('a4', 'landscape')->stream();
        return $pdf;    
        // return $pdf->download('certificate.pdf'); 
    //    return view('frontend.student-dashboard.enrolled-course.certificate', compact('certificate', 'certificateItems')); 
    }

}
