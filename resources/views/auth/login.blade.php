@extends('layouts.app')

@section('content')
<div class="container" style="margin:25px;">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-6" style="margin-top:5%">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ translate('الريد الالكتروني') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ Translate('كلمة المرور') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="row mb-0">
                    <div class="col-md-4"></div>
                    <div class="col-md-3">
                        <a href="{{ url('/') }}" class="btn btn-outline-primary w-100">
                            {{ translate('الرئيسية') }}
                        </a>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary w-100">
                            {{ translate('تسجيل الدخول') }}
                        </button>



                        @if (Route::has('password.request') && false)
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
