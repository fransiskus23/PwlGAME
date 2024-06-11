<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form checkout
        $validatedData = $request->validate([
            'email' => 'required|email',
            'id_game' => 'required|integer',
            'payment_method' => 'required|string',
        ]);

        // Dapatkan pengguna saat ini
        $user = auth()->user();

        // Buat pesanan baru
        $order = new Order();
        $order->user_id = $user->id;
        $order->email = $validatedData['email'];
        $order->id_game = $validatedData['id_game'];
        $order->payment_method = $validatedData['payment_method'];
        $order->jumlah_diamond = $validatedData['jumlah_diamond'];
        $order->status = 'success';
        $order->save();

        // Dapatkan item keranjang
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Buat item pesanan
        foreach ($cartItems as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->product_id;
            $orderItem->quantity = $item->quantity;
            $orderItem->save();
        }

        // Bersihkan keranjang
        Cart::where('user_id', $user->id)->delete();

        // Redirect ke halaman konfirmasi pesanan
        return redirect()->route('orders.show', $order->id);
    }
}
