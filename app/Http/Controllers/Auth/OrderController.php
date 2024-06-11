<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('products.orders.show', ['order' => $order]);
    }
}

