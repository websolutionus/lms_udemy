<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Traits\FileUpload;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BrandSectionController extends Controller
{
    use FileUpload;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $brands = Brand::all();
        return view('admin.sections.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.sections.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:3000'],
            'url' => ['required', 'url'],
            'status' => ['required', 'boolean'],
        ]);

        $imagePath = $this->uploadFile($request->file('image'));

        $brand = new Brand();
        $brand->image = $imagePath;
        $brand->url = $request->url;
        $brand->status = $request->status;
        $brand->save();

        notyf()->success("Created Successfully!");

        return redirect()->route('admin.brand-section.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand_section)
    {
        $brand = $brand_section;
        return view('admin.sections.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'url' => ['required', 'url'],
            'status' => ['required', 'boolean'],
        ]);

        $brand = Brand::findOrFail($id);

        if($request->hasFile('image')) {
            $imagePath = $this->uploadFile($request->file('image'));
            $brand->image = $imagePath;
        }

        $brand->url = $request->url;
        $brand->status = $request->status;
        $brand->save();

        notyf()->success("Update Successfully!");

        return redirect()->route('admin.brand-section.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand_section)
    {
        try {
            $this->deleteFile($brand_section->image);
            $brand_section->delete();
            notyf()->success('Deleted Successfully!');
            return response(['message' => 'Deleted Successfully!'], 200);
        }catch(Exception $e) {
            logger("Course Language Error >> ".$e);
            return response(['message' => 'Something went wrong!'], 500);
        }
    }
}
