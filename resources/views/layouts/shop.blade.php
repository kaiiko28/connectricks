<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name', 'ConnecTricks') }} Work Catalog</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('/catalog')}}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/catalog')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/catalog')}}/style.css">

    <!-- CUSTOM STYLES -->
    @yield('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('/catalog')}}/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/catalog')}}/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/catalog')}}/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/catalog')}}/css/custom.css">

</head>
<body>
    <div id="wrapper">


        <header class="header">
            <div class="container-menu">
                <nav class="navbar navbar-default yamm">
                    <div class="container">
                        <div class="navbar-table">
                            <div class="navbar-cell">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="{{ route('landing') }}"><i class="fa fa-hashtag"></i> {{ config('app.name', 'ConnecTricks') }} Work Collections</a>
                                    <div class="open-menu">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="fa fa-bars"></span>
                                        </button>
                                    </div>
                                </div><!-- end navbar-header -->
                            </div><!-- end navbar-cell -->
                            <div class="navbar-cell stretch">
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                    <div class="navbar-cell">
                                        <ul class="nav navbar-nav navbar-center">
                                            <li><a class="active" href="{{ route('landing') }}" title="">Return to home page</a></li>
                                            
                                        </ul>
                                    </div><!-- end navbar-cell -->
                                </div><!-- /.navbar-collapse -->        
                            </div><!-- end navbar cell -->
                        </div><!-- end navbar-table -->
                    </div><!-- end container fluid -->
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section class="section single-wrap">
            <div class="container">

                <div class="page-title">
                    <div class="row">
                        <div class="col-sx-12 text-center">
                            <h3>Previous Work Collections</h3>
                            <div class="bread">
                                <ol class="breadcrumb">
                                  <li><a href="{{ route('landing') }}">Home</a></li>
                                  <li class="active">Previous Work Collections</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                


                <div class="content">
                    <div class="row">

                        

                       @yield('content')
                        


                        

                    </div><!-- end row -->
                </div><!-- end content -->

            </div><!-- end container -->
        </section>

    </div>
    <!-- Plugins JS File -->
    <script src="{{ asset('/catalog') }}/js/jquery.min.js"></script>
    <script src="{{ asset('/catalog') }}/js/bootstrap.js"></script>


    @yield('scripts')
</body>

</html>
