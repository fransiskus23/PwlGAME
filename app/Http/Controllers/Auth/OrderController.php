<?php

namespace App\Http\Auth\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function show($id)
    {
        // Dapatkan pesanan berdasarkan ID
        $order = Order::findOrFail($id);

        // Tampilkan detail pesanan (misalnya menggunakan view)
        return view('orders.show', compact('order'));
    }
}

