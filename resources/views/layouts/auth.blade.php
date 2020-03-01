<!DOCTYPE html>
<html lang="zxx">


<head>
    
    <title>{{ config('app.name', 'ConnecTricks') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/')}}auth/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/')}}auth/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/')}}auth/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset ('/')}}img/favicon.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('/')}}auth/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('/')}}auth/css/skins/default.css">
    @yield('styles')

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Login 3 start -->
<div class="login-3 tab-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-pad-0 form-section">
                <div class="login-inner-form">
                    <div class="details">
                        
                @include('inc.messeges')
                        @yield('content')
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-pad-0 bg-img none-992">
                <div class="informeson">
                    <div class="btn-section">
                        <a href="{{ route('login') }}" class="active link-btn">Login</a>
                        <a href="{{ route('register') }}" class="link-btn">Register</a>
                    </div>
                    <h3>ConnecTricks make spectacular idea of making online income</h3>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 3 end -->


<!-- External JS libraries -->
<script src="{{ asset('/')}}auth/js/jquery-2.2.0.min.js"></script>
<script src="{{ asset('/')}}auth/js/popper.min.js"></script>
<script src="{{ asset('/')}}auth/js/bootstrap.min.js"></script>
<!-- Custom JS Script -->
@yield('scripts')
</body>


</html>