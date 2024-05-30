@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Shopping Cart</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if($cart)
        <div class="row">
            @foreach($cart as $id => $details)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $details['name'] }}</h5>
                            <p class="card-text">{{ $details['description'] }}</p>
                            <p class="card-text">${{ $details['price'] }}</p>
                            <p class="card-text">Quantity: {{ $details['quantity'] }}</p>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>Your cart is empty</p>
    @endif
</div>
@endsection
