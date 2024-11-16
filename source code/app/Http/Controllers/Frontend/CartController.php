<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //

    function index() : View
    {
        $cart = Cart::with(['course'])->where(['user_id' => user()->id])->paginate();
        return view('frontend.pages.cart', compact('cart'));
    }

    function addToCart(int $id) : Response
    {

      if(!Auth::guard('web')->check()){
          return response(['message' => 'Please Login First!'], 401);
      }
      if(user()->enrollments()->where(['course_id' => $id])->exists()){
        return response(['message' => 'Already Enrolled!'], 401);
     }

      if(Cart::where(['course_id' => $id, 'user_id' => Auth::guard('web')->user()->id])->exists()){
          return response(['message' => 'Already Added!'], 401);
      }

      if(user()?->role == 'instructor') {
        return response(['message' => 'Please use a user account for add to cart!'], 401);

      }



      $course = Course::findOrFail($id);
      $cart = new Cart();
      $cart->course_id = $course->id;
      $cart->user_id = Auth::guard('web')->user()->id;
      $cart->save();

      $cartCount = cartCount();

      return response(['message' => 'Added Successfully!', 'cart_count' => $cartCount], 200);

    }

    function removeFromCart(int $id) : RedirectResponse
    {
        $cart = Cart::where(['id' => $id, 'user_id' => user()->id])->firstOrFail();
        $cart->delete();
        notyf()->success('Removed Successfully!');
        return redirect()->back();
    }
}
