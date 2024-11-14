<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use App\Traits\FileUpload;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    use FileUpload;

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $socialLinks = SocialLink::all();
        return view('admin.social-link.index', compact('socialLinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.social-link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'icon' => ['required', 'image', 'max:3000'],
            'url' => ['required', 'url'],
            'status' => ['nullable', 'boolean'],
        ]);

        $icon = $this->uploadFile($request->file('icon'));        

        $social = new SocialLink();
        $social->icon = $icon;
        $social->url = $request->url;
        $social->status = $request->status ?? 0;
        $social->save();

        notyf()->success("Created Successfully!");

        return to_route('admin.social-links.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialLink $social_link) : View
    {
        return view('admin.social-link.edit', compact('social_link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'icon' => ['nullable', 'image', 'max:3000'],
            'url' => ['required', 'url'],
            'status' => ['nullable', 'boolean'],
        ]);


        $social = SocialLink::findOrFail($id);
        if($request->hasFile('icon')) {
            $icon = $this->uploadFile($request->file('icon')); 
            $this->deleteFile($request->old_icon); 
            $social->icon = $icon;
        }
        $social->url = $request->url;
        $social->status = $request->status ?? 0;
        $social->save();

        notyf()->success("Created Successfully!");

        return to_route('admin.social-links.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialLink $social_link)
    {
        try {
            $this->deleteFile($social_link->icon);
            $social_link->delete();
            notyf()->success('Deleted Successfully!');
            return response(['message' => 'Deleted Successfully!'], 200);
        }catch(Exception $e) {
            logger("Social Link Error >> ".$e);
            return response(['message' => 'Something went wrong!'], 500);
        }
    }
}
