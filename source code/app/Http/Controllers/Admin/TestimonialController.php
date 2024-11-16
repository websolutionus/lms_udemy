<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\FileUpload;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;

class TestimonialController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $testimonials = Testimonial::paginate(20);
        return view('admin.sections.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.sections.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rating' => ['required', 'numeric'],
            'review' => ['required', 'string', 'max:1000'],
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'max:3000'],
        ]);

        $image = $this->uploadFile($request->file('image'));

        $testimonial = new Testimonial();
        $testimonial->rating = $request->rating;
        $testimonial->review = $request->review;
        $testimonial->user_image = $image;
        $testimonial->user_name = $request->name;
        $testimonial->user_title = $request->title;
        $testimonial->save();

        notyf()->success("Created Successfully!");

        return redirect()->route('admin.testimonial-section.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial_section) : View
    {
        return view('admin.sections.testimonial.edit', compact('testimonial_section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'rating' => ['required', 'numeric'],
            'review' => ['required', 'string', 'max:1000'],
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:3000'],
        ]);


        $testimonial = Testimonial::findOrFail($id);

        if($request->hasFile('image')) {
            $image = $this->uploadFile($request->file('image'));
            $this->deleteFile($request->old_image);
            $testimonial->user_image = $image;
        }

        $testimonial->rating = $request->rating;
        $testimonial->review = $request->review;
        $testimonial->user_name = $request->name;
        $testimonial->user_title = $request->title;
        $testimonial->save();

        notyf()->success("Created Successfully!");

        return redirect()->route('admin.testimonial-section.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial_section)
    {
        try {
            $this->deleteFile($testimonial_section->image);
            $testimonial_section->delete();
            notyf()->success('Deleted Successfully!');
            return response(['message' => 'Deleted Successfully!'], 200);
        }catch(Exception $e) {
            logger("Course Language Error >> ".$e);
            return response(['message' => 'Something went wrong!'], 500);
        }
    }
}
