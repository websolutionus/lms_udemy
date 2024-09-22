<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CourseBasicInfoCreateRequest;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseLanguage;
use App\Models\CourseLevel;
use App\Traits\FileUpload;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
   use FileUpload;

   function index(): View
   {
      return view('frontend.instructor-dashboard.course.index');
   }

   function create(): View
   {
      return view('frontend.instructor-dashboard.course.create');
   }


   function storeBasicInfo(CourseBasicInfoCreateRequest $request)
   {
      $thumbnailPath = $this->uploadFile($request->file('thumbnail'));
      $course = new Course();
      $course->title = $request->title;
      $course->slug = \Str::slug($request->title);
      $course->seo_description = $request->seo_description;
      $course->thumbnail = $thumbnailPath;
      $course->demo_video_storage = $request->demo_video_storage;
      $course->demo_video_source = $request->demo_video_source;
      $course->price = $request->price;
      $course->discount = $request->discount;
      $course->description = $request->description;
      $course->instructor_id = Auth::guard('web')->user()->id;
      $course->save();

      // save course id on session
      Session::put('course_create_id', $course->id);

      return response([
         'status' => 'success',
         'message' => 'Updated successfully.',
         'redirect' => route('instructor.courses.edit', ['id' => $course->id, 'step' => $request->next_step])
      ]);
   }

   function edit(Request $request) {

      switch ($request->step) {
         case '1':
            # code...
            break;
         
         case '2':
            $categories = CourseCategory::where('status', 1)->get();
            $levels = CourseLevel::all();
            $languages = CourseLanguage::all();
            return view('frontend.instructor-dashboard.course.more-info', compact('categories', 'levels', 'languages'));
            break;

         default:
            # code...
            break;
      }
   }

   function update(Request $request) {
      // dd($request->all());
      switch ($request->current_step) {
         case '1':
            # code...
            break;
         
         case '2':
            $course = Course::findOrFail($request->id);
            $course->capacity = $request->capacity;
            $course->duration = $request->duration;
            $course->qna = $request->qna ? 1 : 0;
            $course->certificate = $request->certificate ? 1 : 0;
            $course->category_id = $request->category;
            $course->course_level_id = $request->level;
            $course->course_language_id = $request->language;
            $course->save();

            return response([
               'status' => 'success',
               'message' => 'Updated successfully.',
               'redirect' => route('instructor.courses.edit', ['id' => $course->id, 'step' => $request->next_step])
            ]);

            break;

         default:
            # code...
            break;
      }
   }
}
