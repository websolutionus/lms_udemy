<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseLanguage;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Str;

class CourseLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $languages = CourseLanguage::paginate(15);
        return view('admin.course.course-language.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.course.course-language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $request->validate(['name' => ['required', 'max:255', 'unique:course_languages']]);

        $language = new CourseLanguage();
        $language->name = $request->name;
        $language->slug = Str::slug($request->name);
        $language->save();

        notyf()->success('Created Successfully!');

        return to_route('admin.course-languages.index');
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
    public function edit(CourseLanguage $course_language)
    {
        return view('admin.course.course-language.edit', compact('course_language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseLanguage $course_language)
    {
        $request->validate(['name' => ['required', 'max:255', 'unique:course_languages,name,'.$course_language->id]]);

        $course_language->name = $request->name;
        $course_language->save();

        notyf()->success('Created Successfully!');

        return to_route('admin.course-languages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseLanguage $course_language)
    {
        try {
            $course_language->delete();
            notyf()->success('Deleted Successfully!');
            return response(['message' => 'Deleted Successfully!'], 200);
        }catch(Exception $e) {
            logger("Course Language Error >> ".$e);
            return response(['message' => 'Something went wrong!'], 500);
        }
    }
}
