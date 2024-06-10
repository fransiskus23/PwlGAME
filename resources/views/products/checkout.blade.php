@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Checkout') }}</div>

                    <div class="card-body">
                        <!-- Form untuk proses checkout -->
                        <form method="POST" action="{{ route('checkout.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="id_game">Masukan ID Game</label>
                                <input type="text" id="id_game" name="id_game" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="payment_method">Metode Pembayaran</label>
                                <select id="payment_method" name="payment_method" class="form-control" required>
                                    <option value="bank_transfer">Transfer Bank</option>
                                    <option value="credit_card">Kartu Kredit</option>
                                    <option value="cash_on_delivery">Bayar di Tempat</option>
                                </select>
                            </div>

                            <!-- Tambahan informasi lainnya yang diperlukan untuk proses checkout -->

                            <!-- Tombol untuk melakukan checkout -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Bayar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
