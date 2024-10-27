<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutUsSectionUpdateRequest;
use App\Models\AboutUsSection;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutUsSectionController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $about = AboutUsSection::first();
        return view('admin.sections.about-section.index', compact('about'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutUsSectionUpdateRequest $request)
    {

       $data = [
         'rounded_text' => $request->rounded_text,
         'lerner_count' => $request->lerner_count,
         'lerner_count_text' => $request->lerner_count_text,
         'title' => $request->about_title,
         'description' => $request->about_description,
         'button_text' => $request->button_text,
         'button_url' => $request->button_url,
         'video_url' => $request->video_url,
       ];

       if($request->hasFile('image')) {
           $image = $this->uploadFile($request->file('image'));
           $this->deleteFile($request->old_image);
           $data['image'] = $image;
       }

       if($request->hasFile('lerner_image')) {
           $image = $this->uploadFile($request->file('lerner_image'));
           $this->deleteFile($request->old_lerner_image);
           $data['lerner_image'] = $image;
       }

       if($request->hasFile('video_image')) {
           $image = $this->uploadFile($request->file('video_image'));
           $this->deleteFile($request->old_video_image);
           $data['video_image'] = $image;
       }

       AboutUsSection::updateOrCreate(['id' => 1], $data);

       notyf()->success('Updated Successfully');

       return redirect()->back();
        
    }
}
