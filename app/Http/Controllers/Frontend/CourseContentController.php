<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseChapter;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseContentController extends Controller
{
    //

    function createChapterModal(string $id) : String {
       return view('frontend.instructor-dashboard.course.partials.course-chapter-modal', compact('id'))->render(); 
    }

    function storeChapter(Request $request, string $courseId) : RedirectResponse{
        
        $request->validate([
            'title' => ['required', 'max:255'],
        ]);

        $chapter = new CourseChapter();
        $chapter->title = $request->title;
        $chapter->course_id = $courseId;
        $chapter->instructor_id = Auth::user()->id;
        $chapter->order = CourseChapter::where('course_id', $courseId)->count() + 1;
        $chapter->save();

        return redirect()->back();
 
    }

    function createLesson(Request $request) : String{
       $courseId = $request->course_id;
       $chapterId = $request->chapter_id;
       return view('frontend.instructor-dashboard.course.partials.chapter-lesson-modal', compact('courseId', 'chapterId'))->render(); 
    }
}
