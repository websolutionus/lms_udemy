<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
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

    function show(string $slug) : View
    {
        $blog = Blog::with(['author', 'category'])->where('slug', $slug)->where('status', 1)->firstOrFail();
        $recentBlogs = Blog::where('status', 1)->where('slug', '!=', $slug)->latest()->take(3)->get();
        $blogCategories = BlogCategory::withCount('blogs')->where('status', 1)->get();
        
        return view('frontend.pages.blog-detail', compact('blog', 'recentBlogs', 'blogCategories'));     
    }
}
