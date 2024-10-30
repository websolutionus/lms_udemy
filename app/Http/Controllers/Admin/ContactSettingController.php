<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSetting;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class ContactSettingController extends Controller
{
    use FileUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactSetting = ContactSetting::first();
        return view('admin.contact.contact-setting.index', compact('contactSetting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validatedData =  $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'map_url' => ['nullable', 'url']
        ]);

        if ($request->hasFile('image')) {
            $image = $this->uploadFile($request->file('image'));
            $validatedData['image'] = $image;
        }

        ContactSetting::updateOrCreate(
            ['id' => 1],
            $validatedData
        );

        notyf()->success('Update Successfully!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
