<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoSection;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VideoSectionController extends Controller
{

    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $video = VideoSection::first();
        return view('admin.sections.video.index', compact('video'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'background' => ['nullable', 'image', 'max:3000'],
            'video_url' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'button_text' => ['nullable', 'string', 'max:255'],
            'button_url' => ['nullable', 'string', 'max:255'],
        ]);

        if($request->hasFile('background')) {
            $image = $this->uploadFile($request->file('background'));
            $this->deleteFile($request->old_background);
            $validatedData['background'] = $image;
        }

        VideoSection::updateOrCreate(['id' => 1], $validatedData);

        notyf()->success('Update Successfully!');
        return redirect()->back();
    }
}
