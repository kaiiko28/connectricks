@extends('layouts.auth')

@section('styles')
<script data-ad-client="ca-pub-3914889088866533" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
        /* .form-control {
            display: block;
            width: 100%;
            height: calc(2.19rem + 2px);
            padding: .375rem .75rem;
            font-size: .9rem;
            line-height: 1.6;
            color: #000!important;
            background-color: transparent;
            border: none!important;
            background-clip: padding-box;
            border-bottom: 1px solid #ced4da!important;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        } */
        .flat-get-in-touch input {
            width: auto;
        }
        .form-control {
            width: 100%!important;
        }
        .flat-get-in-touch {
            padding: 90px 0 0 0;
        }
    </style>
@endsection

@section('content')

<a href="#">
    <img src="{{ asset('/') }}img/CT.png" alt="logo" style="width:100%;height:auto;">
</a>
<h3>Sign into your account</h3>

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        
            <input id="username" placeholder="username" type="text" class="input-text @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

    <div class="form-group">
        
            <input id="password" placeholder="password" type="password" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

    <div class="checkbox clearfix">
        <div class="form-check checkbox-theme">
            <input class="form-check-input" type="checkbox" id="remember"  name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="rememberMe">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn-md btn-theme btn-block"> {{ __('Login') }}</button>
    </div>

    
</form>

@endsection
