@section('header')

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Al Jazeera</title>
    <meta name="description" content="Al Jazeera">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/images/aj-footer-logo.bac952ad.svg')}}">

    <!-- STYLES -->
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('website/css/all.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('website/css/slick.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('website/css/simple-line-icons.css')}}" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}" type="text/css" media="all">

    <!--[if lt IE 9]>
    <script src="{{asset('website/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('website/js/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
    <div class="book">
        <div class="inner">
            <div class="left"></div>
            <div class="middle"></div>
            <div class="right"></div>
        </div>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>


<!-- site wrapper -->
<div class="site-wrapper">

    <div class="main-overlay"></div>

    <!-- header -->
    <header class="header-classic">

        <div class="container-xl">
            <!-- header top -->
            <div class="header-top">
                <div class="row align-items-center">

                    <div class="col-md-4 col-xs-12">
                        <!-- site logo -->
                        <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('website/images/aj-footer-logo.bac952ad.svg')}}" alt="logo" /></a>
                    </div>

                    <div class="col-md-8 d-none d-md-block">
                        <!-- social icons -->
                        <ul class="social-icons list-unstyled list-inline mb-0 float-end">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg">
            <!-- header bottom -->
            <div class="header-bottom  w-100">

                <div class="container-xl">
                    <div class="d-flex align-items-center">
                        <div class="collapse navbar-collapse flex-grow-1">
                            <!-- menu -->
                            <nav>
                                <ul class="navbar-nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{route('index')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('about')}}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                    </li>
                                    @if(Auth::check())
                                        <li class="ml-3">
                                            <form method="post" action="{{route('logout')}}">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                        </div>


                        <!-- header buttons -->
                        <div class="header-buttons">
                            <button class="burger-menu icon-button ms-2 float-end float-lg-none">
                                <span class="burger-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </nav>

    </header>

@endsection
