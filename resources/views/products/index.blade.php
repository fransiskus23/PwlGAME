@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pemesanan Diamond</h1>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Harga: Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                        @if(isset($product->stock))
                            <p class="card-text">Stok: {{ $product->stock }}</p>
                        @endif
                        @if(isset($product->rating))
                            <p class="card-text">Rating: {{ $product->rating }} / 5</p>
                        @endif
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
