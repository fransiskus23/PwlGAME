<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "description" => $product->description
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('products.index')->with('success', 'Product added to cart!');
    }

    public function index()
    {
        $cart = session()->get('cart');
        return view('cart.index', compact('cart'));
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    }

    public function checkout(Request $request)
    {
        // Validasi input
        $request->validate([
            'address' => 'required|string|max:255',
            'payment_method' => 'required|string|in:bank_transfer,credit_card,cash_on_delivery',
        ]);

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Keranjang belanja Anda kosong!');
        }

        // Proses pembayaran (misalnya, integrasi dengan gateway pembayaran)
        // Untuk keperluan contoh, kita akan mengosongkan keranjang dan menampilkan pesan sukses
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Pembayaran berhasil!');
    }
}


