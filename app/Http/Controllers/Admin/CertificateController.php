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
        $html = view('frontend.student-dashboard.enrolled-course.certificate', compact('certificate', 'certificateItems'))->render();
        
        $html = str_replace("[student_name]", user()->name, $html);
        $html = str_replace("[course_name]", user()->name, $html);
        $html = str_replace("[date]", date('d-m-Y'), $html);
        $html = str_replace("[platform_name]", 'Edu Core', $html);
        $html = str_replace("[instructor_name]", user()->name, $html);



        $pdf = Pdf::loadHTML($html)->setPaper('a4', 'landscape');
        return $pdf->stream('certificate.pdf');

        // $pdf = Pdf::loadView('frontend.student-dashboard.enrolled-course.certificate', compact('certificate', 'certificateItems'))
        // ->setPaper('a4', 'landscape');
        // dd($pdf);
        // return $pdf;    
        // return $pdf->download('certificate.pdf'); 
    //    return view('frontend.student-dashboard.enrolled-course.certificate', compact('certificate', 'certificateItems')); 
    }

}
