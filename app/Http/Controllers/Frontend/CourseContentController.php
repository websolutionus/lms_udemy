<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CourseChapter;
use App\Models\CourseChapterLession;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseContentController extends Controller
{
    //

    function createChapterModal(string $id): String
    {
        return view('frontend.instructor-dashboard.course.partials.course-chapter-modal', compact('id'))->render();
    }

    function storeChapter(Request $request, string $courseId): RedirectResponse
    {

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

    function createLesson(Request $request): String
    {
        $courseId = $request->course_id;
        $chapterId = $request->chapter_id;
        return view('frontend.instructor-dashboard.course.partials.chapter-lesson-modal', compact('courseId', 'chapterId'))->render();
    }

    function storeLesson(Request $request): RedirectResponse
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'source' => ['required', 'string'],
            'file_type' => ['required', 'in:video,audio,file,pdf,doc'],
            'duration' => ['required'],
            'is_preview' => ['nullable', 'boolean'],
            'downloadable' => ['nullable', 'boolean'],
            'description' => ['required']
        ];
        if ($request->filled('file')) {
            $rules['file'] = ['required'];
        } else {
            $rules['url'] = ['required'];
        }
        $request->validate($rules);

        $lesson = new CourseChapterLession();
        $lesson->title = $request->title;
        $lesson->slug = \Str::slug($request->title);
        $lesson->storage = $request->source;
        $lesson->file_path = $request->filled('file') ? $request->file : $request->url;
        $lesson->file_type = $request->file_type;
        $lesson->duration = $request->duration;
        $lesson->is_preview = $request->filled('is_preview') ? 1 : 0;
        $lesson->downloadable = $request->filled('downloadable') ? 1 : 0;
        $lesson->description = $request->description;
        $lesson->instructor_id = Auth::user()->id;
        $lesson->course_id = $request->course_id;
        $lesson->chapter_id = $request->chapter_id;
        $lesson->order = CourseChapterLession::where('chapter_id', $request->chapter_id)->count() + 1;
        $lesson->save();

        notyf()->success('Created Success fully');

        return redirect()->back();
    }

    function editLesson(Request $request): String
    {
        $courseId = $request->course_id;
        $chapterId = $request->chapter_id;
        $lessonId = $request->lesson_id;
        $lesson = CourseChapterLession::where(
            [
                'id' => $lessonId,
                'chapter_id' => $chapterId,
                'course_id' => $courseId,
                'instructor_id' => Auth::user()->id
            ]
        )->first();
        return view(
            'frontend.instructor-dashboard.course.partials.chapter-lesson-modal',
            compact('courseId', 'chapterId', 'lesson')
        )->render();
    }
}
