@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login_form_container">
                <div class="login_form">
                    <div class="container_logo">
                        <div class="logo">
                            <img src="{{ asset('img/logo.jpg') }}" alt="Logo" />
                        </div>
                    </div>
                    <h2>Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input_group">
                            <i class="fa fa-user"></i>
                            <input id="email" type="email" placeholder="Email" class="input_text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input_group">
                            <i class="fa fa-unlock-alt"></i>
                            <input id="password" type="password" placeholder="Password" class="input_text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="button_group" id="login_button">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>

                        <div class="fotter">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    Forgot Password?
                                </a>
                            @endif
                            <a href="{{ route('register') }}">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection
