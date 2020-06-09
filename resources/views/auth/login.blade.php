@extends('layouts.auth')

@section('content')
    <div class="auth-layout-wrap" style="background-image: url({{ asset('dist-assets/images/photo-wide-4.jpg') }})">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                                <img src="{{ asset('dist-assets/images/logo.png') }}" alt="">
                            </div>
                            <h1 class="mb-3 text-18">{{ __('Sign In') }}</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input class="form-control form-control-rounded @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input class="form-control form-control-rounded @error('password') is-invalid @enderror" id="password" type="password" name="password" required>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2">{{ __('Sign In') }}</button>
                            </form>
                            <div class="mt-3 text-center">
                                <a class="text-muted" href="{{ route('password.request') }}">
                                    <u>{{ __('Forgot Password?') }}</u>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
