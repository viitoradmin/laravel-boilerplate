@extends('backend.layouts.admin_app')

@section('title', __('Auth::auth.login_form.title') )

@section('content')
<div class="d-flex flex-center flex-column flex-column-fluid">
    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
        <form method="POST" class="form text-center w-100" novalidate="novalidate"  action="{{ route('login') }}">
            @csrf
            <div class="mb-6">
                <h1 class="text-dark fs-35 mb-3">{{ __('Auth::auth.login_form.title') }}</h1>
                <p class="text-black fs-16 fw-500">
                {{ __('Auth::auth.login_form.description_1') }}<br class="br">
                {{ __('Auth::auth.login_form.description_2') }}
                </p>
            </div>        
            <div class="fv-row mb-3">
                <input id="email" type="email" class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Auth::auth.login_form.email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="fv-row mb-3">
                <input id="password" type="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Auth::auth.login_form.password') }}">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="text-center pt-3">
                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                    <span class="indicator-label">{{ __('Auth::auth.login_form.login_btn') }}</span>
                </button>
                <div class="text-center mb-5">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="fw-normal fs-16 text-black text-hover-primary">
                            {{ __('Auth::auth.login_form.forgot_your_password') }}
                        </a>
                    @endif                
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
