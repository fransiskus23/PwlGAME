@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>${{ $product->price }}</p>
    <form action="{{ route('cart.add', $product->id) }}" method="POST">
        @csrf
        <a href="{{ route('product.checkout', $product->id) }}" class="btn btn-primary">Add to Cart</a>
    </form>
</div>
@endsection
