<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Hero;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   function index() : View {
      $hero = Hero::first();
      $feature = Feature::first();
    return view('frontend.pages.home.index', compact('hero', 'feature'));
   } 
}
