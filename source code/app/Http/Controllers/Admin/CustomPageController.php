<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomPage;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $pages = CustomPage::paginate(20);
        return view('admin.custom-page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.custom-page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:custom_pages'],
            'description' => ['required', 'string'],
            'seo_title' => ['nullable', 'string', 'max:255'],
            'seo_description' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'boolean'],
        ]);
       
        $page = new CustomPage();
        $page->title = $request->title;
        $page->slug = \Str::slug($request->title);
        $page->description = $request->description;
        $page->seo_title = $request->seo_title;
        $page->seo_description = $request->seo_description;
        $page->show_at_nav = $request->show_at_nav ?? 0;
        $page->status = $request->status ?? 0;
        $page->save();

        notyf()->success('Created Successfully!');

        return to_route('admin.custom-page.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $page = CustomPage::findOrFail($id);
        return view('admin.custom-page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:custom_pages,title,' . $id],
            'description' => ['required', 'string'],
            'seo_title' => ['nullable', 'string', 'max:255'],
            'seo_description' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'boolean'],
        ]);
       
        $page = CustomPage::findOrFail($id);
        $page->title = $request->title;
        $page->slug = \Str::slug($request->title);
        $page->description = $request->description;
        $page->seo_title = $request->seo_title;
        $page->seo_description = $request->seo_description;
        $page->show_at_nav = $request->show_at_nav ?? 0;
        $page->status = $request->status ?? 0;
        $page->save();

        notyf()->success('Update Successfully!');

        return to_route('admin.custom-page.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $page = CustomPage::findOrFail($id);
            $page->delete();
            notyf()->success('Deleted Successfully!');
            return response(['message' => 'Deleted Successfully!'], 200);
        }catch(Exception $e) {
            logger("Custom Page Error >> ".$e);
            return response(['message' => 'Something went wrong!'], 500);
        }
    }
}
