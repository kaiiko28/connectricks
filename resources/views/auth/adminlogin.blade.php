@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="text-center">
                    <img src="{{ asset('logo.png') }}" class="text-center" style="width:200px;" alt="beautigenic logo">
            </div>
            <div class="card bg-success">
                <div class="card-header">{{ __('Admin Login') }}</div>

                @if(\Session::has('alert'))
                    <div class="alert alert-danger">
                        <div>{{Session::get('alert')}}</div>
                    </div>
                @endif
                @if(\Session::has('alert-success'))
                    <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                    </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<a href="#">
    <img src="{{ asset('/') }}img/CT.png" alt="logo" style="width:100%;height:auto;">
</a>
<h3>Sign into your account</h3>

<form method="POST" action="{{ route('admin.login.submit') }}">
    @csrf
    <div class="form-group">
        
            <input id="username" placeholder="email" type="text" class="input-text @error('username') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
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
