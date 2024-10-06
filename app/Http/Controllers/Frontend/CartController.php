<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{
    //

    function index() : View
    {
        return view('frontend.pages.cart');
    }

    function addToCart(int $id) : Response
    {
        dd($id);
    }
}
