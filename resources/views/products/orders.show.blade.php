@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Pesanan</div>

                    <div class="card-body">
                        <p>Email: {{ $order->email }}</p>
                        <p>ID Game: {{ $order->id_game }}</p>
                        <p>Metode Pembayaran: {{ $order->payment_method }}</p>
                        <p>Status: {{ $order->status }}</p>
                        <!-- Tambahkan informasi lain yang diperlukan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
