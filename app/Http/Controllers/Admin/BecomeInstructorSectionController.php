<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BecomeInstructorSection;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BecomeInstructorSectionController extends Controller
{

    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $becomeInstructor = BecomeInstructorSection::first();
        return view('admin.sections.become-instructor.index', compact('becomeInstructor'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'button_text' => ['nullable', 'string', 'max:255'],
            'button_url' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:3000'],
        ]);

        if($request->hasFile('image')) {
            $image = $this->uploadFile($request->file('image'));
            $this->deleteFile($request->old_image);
            $validateData['image'] = $image;
        }

        BecomeInstructorSection::updateOrCreate(['id' => 1], $validateData);

        notyf()->success('Update Successfully!');
        return redirect()->back();
    }
}
