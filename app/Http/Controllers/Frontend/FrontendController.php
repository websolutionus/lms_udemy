<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsSection;
use App\Models\BecomeInstructorSection;
use App\Models\Brand;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Feature;
use App\Models\FeaturedInstructor;
use App\Models\Hero;
use App\Models\LatestCourseSection;
use App\Models\Newsletter;
use App\Models\Testimonial;
use App\Models\VideoSection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FrontendController extends Controller
{
   function index() : View {
      $hero = Hero::first();
      $feature = Feature::first();
      $featuredCategories = CourseCategory::withCount(['subCategories as active_course_count' => function($query) {
         $query->whereHas('courses', function($query) {
            $query->where(['is_approved' => 'approved', 'status' => 'active']);
         });
      }])->where(['parent_id' => null, 'show_at_trending' => 1])->limit(12)->get();

      $about = AboutUsSection::first();

      $latestCourses = LatestCourseSection::first();
      $becomeInstructorBanner = BecomeInstructorSection::first();
      $video = VideoSection::first();
      $brands = Brand::where('status', 1)->get();
      $featuredInstructor = FeaturedInstructor::first();
      $featuredInstructorCourses = Course::whereIn('id', json_decode($featuredInstructor?->featured_courses))->get();
      $testimonials = Testimonial::all();
     
    return view('frontend.pages.home.index', compact(
      'hero',
      'feature',
      'featuredCategories',
      'about',
      'latestCourses',
      'becomeInstructorBanner',
      'video',
      'brands',
      'featuredInstructor',
      'featuredInstructorCourses',
      'testimonials'
   ));

   } 


   function subscribe(Request $request) : Response {
      $request->validate([
         'email' => 'required|email|unique:newsletters,email'
      ],[
         'email.required' => 'Email is required',
         'email.email' => 'Email is invalid',
         'email.unique' => 'Email is already subscribed'
      ]);

      $newsletter = new Newsletter();
      $newsletter->email = $request->email;
      $newsletter->save();

      return response(['status' => 'success', 'message' => 'Successfully subscribed!']);
   }
}
