@extends('layouts.app')

@section('content')
    <div class="container_checkout">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card_checkout">
                    <div class="card-header_checkout">{{ __('Checkout') }}</div>

                    <div class="card-body">
                        <!-- Form untuk proses checkout -->
                        <form method="POST" action="{{ route('checkout.store') }}">
                            @csrf

                            <div class="form-group">
                                <label class="text-white" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="text-white" for="id_game">Masukan ID Game</label>
                                <input type="text" id="id_game" name="id_game" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label class="text-white" for="payment_method">Metode Pembayaran</label>
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

    <!-- Script untuk validasi form -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                const email = form.querySelector('#email').value.trim();
                const idGame = form.querySelector('#id_game').value.trim();

                if (!isValidEmail(email)) {
                    alert('Mohon masukkan email yang valid');
                    event.preventDefault();
                }

                if (idGame.length !== 10 || isNaN(idGame)) {
                    alert('ID Game harus terdiri dari 10 angka');
                    event.preventDefault();
                }
            });

            function isValidEmail(email) {
                const re = /\S+@\S+\.\S+/;
                return re.test(email);
            }
        });
    </script>

@endsection
