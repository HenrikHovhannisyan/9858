@extends('layouts.auth_app')
@section('title') - Register @endsection

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
                <h2>Join the Concierge Experience</h2>
                <p>
                    Create your account to access premium delivery services, personalized shopping, and exclusive sourcing.
                </p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-6">
                            <input placeholder="First name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <input placeholder="Last name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <input placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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

                    <div class="row mb-3">
                        <div class="col">
                            <div class="position-relative">
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <button type="button" class="btn position-absolute end-0 top-0 h-100 d-flex align-items-center justify-content-center toggle-password" style="background: none; border: none;">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col">
                            <button type="submit" class="btn btn_auth">
                                Create My Account
                            </button>
                        </div>
                    </div>
                </form>
                <a href="{{ route('login') }}" class="btn btn-light w-100 mt-2">
                    Already have an account
                </a>
                <div class="privacy_policy_text">
                    <p>
                        We respect your privacy. Your information is secured and never shared.
                    </p>
                    <p>
                        View our Privacy Policy
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection