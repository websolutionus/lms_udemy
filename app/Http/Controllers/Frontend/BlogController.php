<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function index() : View
    {
        $blogs = Blog::where('status', 1)->paginate(20);
        return view('frontend.pages.blog', compact('blogs'));     
    }
}
