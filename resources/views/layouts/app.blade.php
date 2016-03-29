<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Medical & health landing page templates for online appointment that help you to medical service & patient visit" />
        <meta name="author" content="Levi Fukumori">
        <title>Wealth.life | Medical Landing Page Template</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.css" />
        <!-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" /> -->
        <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:100,300,400,700" /> -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" />
        <!-- your favicon icon link -->
        <link rel="shortcut icon" type="image/x-icon" href="/image/favicon.ico" />
        <!-- Custom CSS -->
        {{-- <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}"> --}}

    </head>
    <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/#page-top') }}">
                            <h1 class="logo-brand">WEALTH.<span class="logo">LIFE</span></h1>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <ul class="nav navbar-nav">
                            <li class="hidden"> <a href="{{ url('/#page-top') }}"></a> </li>
                            <li class="page-scroll"> <a href="{{ url('/#about') }}">APPOINMENT</a> </li>
                            <li class="page-scroll"> <a href="{{ url('/#services') }}">FEATURE</a> </li>
                            <li class="page-scroll"> <a href="{{ url('/#doctor') }}">DOCTOR</a> </li>
                            <li class="page-scroll"> <a href="{{ url('/#contact') }}">CONTACT US</a> </li>
                            <li class="page-scroll social">
                                <a href="#"><i class="fa fa-facebook-square fa-size"></i></a>
                                <a href="#"><i class="fa fa-twitter-square fa-size"></i></a>
                                <a href="#"><i class="fa fa-google-plus-square fa-size"></i></a>
                                <a href="#"><i class="fa fa-flickr fa-size"></i></a>
                            </li>
                        @if (Auth::guest())
                            <li class=""><a href="{{ url('/login') }}">LOGIN</a></li>
                            <li class=""><a href="{{ url('/register') }}">REGISTER</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-tachometer"></i> Dashboard</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        @endif
                        </ul>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container -->
                </div>
            </nav>
        </div>

@yield('content')

        <!-- footer section start -->
        <div class="footer">
            <div class="container">
                <div class="row ft">
                    <div class="col-md-9">
                        <p> © Copyright 2014. All Rights Reserved by Wealth.life </p>
                    </div>
                    <div class="col-md-3">
                        <p>
                            <a href="#"><i class="fa fa-facebook-square fa-size social-icon"></i></a>
                            <a href="#"><i class="fa fa-twitter-square fa-size social-icon"></i></a>
                            <a href="#"><i class="fa fa-google-plus-square fa-size social-icon"></i></a>
                            <a href="#"><i class="fa fa-flickr fa-size social-icon"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square fa-size social-icon"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section close -->

        <!-- Core JavaScript Files -->
        <script src="/js/jquery-1.10.2.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.easing.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="/js/scrolling-nav.js"></script>
        <script src="/js/owl.carousel.js"></script>
        {{-- <script src="{{ elixir('/js/app.js') }}"></script> --}}
        <script>
            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items : 4,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3]
            });
        </script>
    </body>
</html>
