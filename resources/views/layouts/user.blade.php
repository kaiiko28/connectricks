<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>{{ config('app.name', 'Connectricks') }}</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('/dashboard')}}/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('/dashboard')}}/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('/dashboard')}}/css/style.min.css">
<link rel="stylesheet" href="{{ asset('/dashboard')}}/css/components.min.css">

@yield('styles')
</head>

<body class="layout-4">
<!-- Page Loader -->
{{-- <div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div> --}}

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            </ul>
            {{-- <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                <div class="search-backdrop"></div>
                <div class="search-result">
                <div class="search-header">
                    Histories
                </div>
                <div class="search-item">
                    <a href="#">How to hack NASA using CSS</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="#">Kodinger.com</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="#">#CodiePie</a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-header">
                    Result
                </div>
                <div class="search-item">
                    <a href="#">
                    <img class="mr-3 rounded" width="30" src="{{ asset('/dashboard')}}/img/products/product-3-50.png" alt="product">
                    oPhone S9 Limited Edition
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                    <img class="mr-3 rounded" width="30" src="{{ asset('/dashboard')}}/img/products/product-2-50.png" alt="product">
                    Drone X2 New Gen-7
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                    <img class="mr-3 rounded" width="30" src="{{ asset('/dashboard')}}/img/products/product-1-50.png" alt="product">
                    Headphone Blitz
                    </a>
                </div>
                <div class="search-header">
                    Projects
                </div>
                <div class="search-item">
                    <a href="#">
                    <div class="search-icon bg-danger text-white mr-3">
                        <i class="fas fa-code"></i>
                    </div>
                    CodiePie Admin Template
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                    <div class="search-icon bg-primary text-white mr-3">
                        <i class="fas fa-laptop"></i>
                    </div>
                    Create a new Homepage Design
                    </a>
                </div>
                </div>
            </div> --}}
            </form>
            <ul class="navbar-nav navbar-right">
            {{-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                    <div class="float-right">
                    <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                    
                    
                    <div class="dropdown-item-desc">
                        <b>Kusnaedi</b>
                        <p>Hello, Bro!</p>
                        <div class="time">10 Hours Ago</div>
                    </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="{{ asset('/dashboard')}}/img/avatar/avatar-2.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Dedik Sugiharto</b>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        <div class="time">12 Hours Ago</div>
                    </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="{{ asset('/dashboard')}}/img/avatar/avatar-3.png" class="rounded-circle">
                        <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Agung Ardiansyah</b>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="time">12 Hours Ago</div>
                    </div>
                    </a>
                    <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="{{ asset('/dashboard')}}/img/avatar/avatar-4.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Ardian Rahardiansyah</b>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                        <div class="time">16 Hours Ago</div>
                    </div>
                    </a>
                    <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="{{ asset('/dashboard')}}/img/avatar/avatar-5.png" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Alfa Zulkarnain</b>
                        <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <div class="time">Yesterday</div>
                    </div>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
                </div>
            </li>
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                    <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-icon bg-primary text-white">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="dropdown-item-desc">
                        Template update is available now!
                        <div class="time text-primary">2 Min Ago</div>
                    </div>
                    </a>
                    <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="dropdown-item-desc">
                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                        <div class="time">10 Hours Ago</div>
                    </div>
                    </a>
                    <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-success text-white">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                        <div class="time">12 Hours Ago</div>
                    </div>
                    </a>
                    <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-danger text-white">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="dropdown-item-desc">
                        Low disk space. Let's clean it!
                        <div class="time">17 Hours Ago</div>
                    </div>
                    </a>
                    <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="dropdown-item-desc">
                        Welcome to CodiePie template!
                        <div class="time">Yesterday</div>
                    </div>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
                </div>
            </li> --}}
            @guest
            <li class="">
                <a href="{{ route('login') }}" class="nav-link nav-link-lg nav-link-user">
                    <div class="d-sm-none d-lg-inline-block">Log In</div>
                </a>
                
            </li>
            @else
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="{{ asset('/dashboard')}}/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block"> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-title">Logged in 5 min ago</div>
                    <a href="features-profile.html" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Profile
                    </a>
                    <a href="features-activities.html" class="dropdown-item has-icon">
                        <i class="fas fa-bolt"></i> Activities
                    </a>
                    <a href="features-settings.html" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </div>
                </li>
                        
            @endguest
            
            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="#">{{ config('app.name', 'Connectricks') }}</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="#">CT</a>
                </div>


                <ul class="sidebar-menu">
                    <li><a class="nav-link" href="{{ route('user.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
                    <li><a class="nav-link" href="{{ route('user.solve') }}"><i class="fas fa-pencil-ruler"></i> <span>Solving</span></a></li>
                    {{-- <li><a class="nav-link" href="{{ route('user.invite_list') }}"><i class="fas fa-users"></i> <span>My Invites</span></a></li> --}}
                    <li><a class="nav-link" href="{{ route('user.payout_logs') }}"><i class="fas fa-users"></i> <span>Payout Logs</span></a></li>
                    @if (Auth::user()->role == "Code Seller" || Auth::user()->role == "Payout Officer")
                        <li><a class="nav-link" href="{{ route('user.code') }}"><i class="fas fa-database"></i> <span>Code Seller Portal</span></a></li>
                        
                    @endif  
                    
                    @if (Auth::user()->role == "Payout Officer")
                        <li><a class="nav-link" href="{{ route('officer_view_payout') }}"><i class="fas fa-tasks"></i> <span>Payout Task</span></a></li>
                            
                    @endif
                </ul>
            </aside>
        </div>

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    @yield('breadcrumbs')
                </div>

                <div class="section-body">
                    
                    @include('inc.messeges')

                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2019
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('/dashboard')}}/bundles/lib.vendor.bundle.js"></script>
<script src="{{ asset('/dashboard')}}/js/CodiePie.js"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('/dashboard')}}/js/scripts.js"></script>
<script src="{{ asset('/dashboard')}}/js/custom.js"></script>

@yield('scripts')
</body>

</html>