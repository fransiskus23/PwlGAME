@extends('layouts.app')

@section('content')
<h1 class="judul_cart">Confirmasi Transaksi</h1>
<div class="container_cart">
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>${{ $product->price }}</p>
        <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <a href="{{ route('products.checkout', $product->id) }}" class="btn btn-primary">Add to Cart</a>
        </form>
    </div>
</div>

@endsection
