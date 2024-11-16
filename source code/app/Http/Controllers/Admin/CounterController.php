<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $counter = Counter::first();
        return view('admin.sections.counter.index', compact('counter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'counter_one' => ['nullable', 'numeric'],
            'title_one' => ['nullable', 'string', 'max:255'],
            'counter_two' => ['nullable', 'numeric'],
            'title_two' => ['nullable', 'string'],
            'counter_three' => ['nullable', 'numeric'],
            'title_three' => ['nullable', 'string', 'max:255'],
            'counter_four' => ['nullable', 'numeric'],
            'title_four' => ['nullable', 'string', 'max:255'],
        ]);


        Counter::updateOrCreate(
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
