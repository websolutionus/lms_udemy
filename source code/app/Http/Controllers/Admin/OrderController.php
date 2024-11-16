<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index() : View
    {
        $orders = Order::with(['customer'])->paginate(25);
        return view('admin.order.index', compact('orders'));    
    }

    function show(Order $order) : View{
       return view('admin.order.show', compact('order')); 
    }
}
