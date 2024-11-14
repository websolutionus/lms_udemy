<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseLanguage;
use App\Models\CourseLevel;
use App\Models\Enrollment;
use App\Models\Review;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CoursePageController extends Controller
{
    function index(Request $request): View
    {
        // dd($request->all());
        $courses = Course::where('is_approved', 'approved')
            ->where('status', 'active')
            ->when($request->has('search') && $request->filled('search'), function($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');
            })
            ->when($request->has('category') && $request->filled('category'), function($query) use ($request) {
                if(is_array($request->category)){
                    $query->whereIn('category_id', $request->category);
                }else {
                    $query->where('category_id', $request->category);
                }
            })
            ->when($request->filled('main_category'), function($query) use ($request) {
                $query->whereHas('category', function($query) use ($request) {
                    $query->whereHas('parentCategory', function($query) use ($request){
                        $query->where('slug', $request->main_category);
                    });
                });
            })
            ->when($request->has('level') && $request->filled('level'), function($query) use ($request) {
                $query->whereIn('course_level_id', $request->level);
            })
            ->when($request->has('language') && $request->filled('language'), function($query) use ($request) {
                $query->whereIn('course_language_id', $request->language);
            })
            ->when($request->has('from') && $request->has('to') && $request->filled('from') && $request->filled('to'), function($query) use ($request) {
                $query->whereBetween('price', [$request->from, $request->to]);
            })
            ->orderBy('id', $request->filled('order') ? $request->order : 'desc')
            ->paginate(12);

        $categories = CourseCategory::where('status', 1)->whereNull('parent_id')->get();
        $levels = CourseLevel::all();
        $languages = CourseLanguage::all();
        return view('frontend.pages.course-page', compact('courses', 'categories', 'levels', 'languages'));
    }

    function show(string $slug): View
    {
        $course = Course::with('reviews')->where('slug', $slug)
            ->where('is_approved', 'approved')
            ->where('status', 'active')
            ->firstOrFail();
        $reviews = Review::where('course_id', $course->id)->where('status', 1)->paginate(10);
        

        return view('frontend.pages.course-details-page', compact('course', 'reviews'));
    }

    function storeReview(Request $request) : RedirectResponse
    {
       $request->validate([
        'rating' => ['required', 'numeric'],
        'review' => ['required', 'string', 'max:1000'],
        'course' => ['required', 'integer']
       ]);

       $checkPurchase = Enrollment::where('user_id', user()->id)->where('course_id', $request->course)->exists();
       $alreadyReviewed = Review::where('user_id', user()->id)->where('course_id', $request->course)->where('status', 1)->exists();

       if(!$checkPurchase) {
        notyf()->error('Please Purchase Course First!');
        return redirect()->back();
       }

       if($alreadyReviewed) {
        notyf()->error('You Already Reviewed This Course!');
        return redirect()->back();
       }

       $review = new Review();
       $review->user_id = user()->id;
       $review->course_id = $request->course;
       $review->rating = $request->rating;
       $review->review = $request->review;
       $review->save();

       notyf()->success('Review Submitted Successfully!');
       return redirect()->back();
    }
}
