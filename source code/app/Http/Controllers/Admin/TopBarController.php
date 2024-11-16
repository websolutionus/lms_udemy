<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TopBar;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TopBarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $topbar = TopBar::first();
        return view('admin.top-bar.index', compact('topbar'));
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
        $validatedData = $request->validate([
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'max:255'],
            'offer_name' => ['nullable', 'string', 'max:255'],
            'offer_short_description' => ['nullable','string', 'max:255'],
            'offer_button_text' => ['nullable', 'string', 'max:255'],
            'offer_button_url' => ['nullable', 'string', 'max:255'],
        ]);

        // dd($validatedData);


        TopBar::updateOrCreate(
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
