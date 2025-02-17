<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
        public function index()
    {
        $orders = Order::orderBy('order_date', 'desc')->get();
        return view('orderhistory', ['orders' => $orders]);
    }
}
