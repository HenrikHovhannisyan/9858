@extends('layouts.auth_app')
@section('title') - Login @endsection

@section('content')
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-lg-8 ps-0 pe-0 d-md-block d-none">
            <img src="{{ asset('img/sign_bg.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-4 ps-0 pe-0">
            <div class="sign_form p-3">
                <a href="{{ route('home') }}" class="back">
                    <i class="fa-solid fa-chevron-left"></i>
                    Back
                </a>
                <h2>Welcome Back</h2>
                <p>
                    Sign in to manage your deliveries, request sourcing, or access your personal shopper.
                </p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <div class="col">
                            <input id="email" placeholder="Email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="position-relative">
                                <input id="password" placeholder="Password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                <button type="button" class="btn position-absolute end-0 top-0 h-100 d-flex align-items-center justify-content-center toggle-password" style="background: none; border: none;">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!--                     <div class="row mb-3">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div> -->

                    <div class="row mb-0">
                        <div class="col">
                            <button type="submit" class="btn btn_auth">
                                Sign In
                            </button>
                        </div>
                    </div>
                </form>
                @if (Route::has('password.request'))
                <a class="btn btn-light w-100 mt-2" href="{{ route('password.request') }}">
                    Forgot Password
                </a>
                @endif
                <a href="{{ route('register') }}" class="btn btn-light w-100 mt-2">
                    Create an Account
                </a>
                <div class="privacy_policy_text">
                    <p>
                        Your account is protected by industry-standard encryption and concierge-level privacy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection