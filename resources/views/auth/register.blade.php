@extends('layouts.auth')


@section('styles')
    <script data-ad-client="ca-pub-3914889088866533" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <style>

        /* .input-text {
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
        }
        .input-group-text, .input-text {
            color: #000!important;
            font-weight: bolder!important;
            font-size: 16px;
            letter-spacing: 1px;
        } */

        .flat-get-in-touch input {
            width: auto;
        }
        .input-text {
            width: 100%!important;
        }
    </style>
@endsection

@section('content')

<section class="flat-get-in-touch">
        <div class="container">
            <div class="row">

                @include('inc.messeges')
                
                
                    <div class="col-sm-12">
                        <h2 class="text-center" style="text-align: center">Members Registration</h2>
                    {{-- <h1 class="our-product-main"><a href="#"> Login to  </a></h1> --}}
                    <div class="our-product-image">
                        <a href="{{route('landing')}}"><img src="{{ asset('/') }}img/CT.png" alt="logo" style="width:100%;height:auto;"></a>
                    </div>
                    </div>
                 <!-- /title-section -->
                    <!-- <form>
                        <input type="text"  class="mg-bottom-25 left" required="" placeholder="Name*" >
                        <input type="text"  class="mg-bottom-25 right" required="" placeholder="Email" >
                        <textarea name="messages"  required="" placeholder="Messages*"></textarea>
                        <p class="submit-form">
                            <button name="submit" type="submit"  class="submit btn btn-styl hvr-shutter-out-horizontal" >SUBMIT</button>
                        </p>
                    </form>  -->
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h4 class="text-center">User Details</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" aria-label="First name" id="first" name="first" class="input-text @error('name') is-invalid @enderror" value="{{ old('first') }}" placeholder="First Name">
                                    @error('first')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" aria-label="Last name" id="last" name="last"  class="input-text @error('name') is-invalid @enderror" value="{{ old('last') }}" placeholder="Last Name">
                                    @error('last')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                            
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-sm-6">
                                    <input placeholder="Birthday" type="text" id="birthday" name="birthday" class="input-text" >

                                </div>

                                <div class="col-sm-6">
                                    <input placeholder="contact number" type="tel" id="contact" name="contact" class="input-text" pattern="[0-9]{11}" value="{{ old('contact') }}" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">

                                    <input id="email" type="email" class="input-text mt-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="your_email@email.com">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="col-sm-12">


                                    <input id="referral" type="text" class="input-text mt-1 @error('referral_code') is-invalid @enderror" name="referral" required autocomplete="referral_code" placeholder="Referral Code" value="{{ request()->get('refcode') }}" readonly>

                                        @error('referral_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>


                            <hr>


                            <h4 class="text-center">Account Details</h4>


                                <div class="row">
                                        <div class="col-sm-6">
                                                {{-- <input id="activation" type="text" class="input-text @error('activation') is-invalid @enderror" name="activation" required autocomplete="activation" placeholder="Activation Code"> --}}
                                                <input id="activation" type="text" class="input-text @error('activation') is-invalid @enderror" name="activation" required autocomplete="activation" placeholder="Activation Code">
                                                    @error('activation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                        <div class="col-sm-6">
                                                <input id="connection_id" type="text" class="input-text @error('connection_id') is-invalid @enderror" name="connection_id" autocomplete="connection_id" placeholder="Connection ID" value="{{ request()->get('concode') }}" readonly>
                                                    @error('connection_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>


                                            <div class="col-sm-12 mt-1">
                                                <input id="username" type="text" class="input-text @error('username') is-invalid @enderror" name="username" required autocomplete="username" placeholder="Username">

                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>


                                        <div class="col-sm-12 mt-1">

                                            <input id="password" type="password" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>


                                        <div class="col-sm-12 mt-1">

                                            <input id="password-confirm" type="password" class="input-text" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div>
                                </div>





                            <div class="form-group row mt-2">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary input-text" id="register" style="width:100%;color:#fff">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
               
            </div>
        </div>
    </section>
@endsection



@section('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#register").on('click',function(){
                $.get('{{ route('register') }}', function(data){
                    console.log(data);
                });
            });
        });

        $('input[name="birthday"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
        });

        $('input[name="birthday"]').val('');
        $('input[name="birthday"]').attr("placeholder","Birthday");


    </script>


@endsection
