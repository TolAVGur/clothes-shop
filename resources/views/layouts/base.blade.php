<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Clothes-Shop | @yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('storage/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('storage/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('storage/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('storage/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('storage/images/ico/apple-touch-icon-57-precomposed.png') }}">
    @livewireStyles
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +38 000 111-22-33 </a></li>
                                <li><a href="/contacts"><i class="fa fa-envelope"></i> avgur923@avgur.pp.ua </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="/"><img src="{{ asset('storage/images/home/logo.png') }}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <!--<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>-->
                                <li><a href="/checkout" class="{{ request()->is('checkout*') ? 'active' : null }}"><i class="fa fa-crosshairs"></i> ????????????????????</a></li>
                                <li><a href="/cart" class="{{ request()->is('cart*') ? 'active' : null }}">
                                        <i class="fa fa-shopping-cart"></i> ??????????
                                        @if (Cart::instance('cart')->count() > 0)
                                        <span style="color: darkorange;">
                                            ( {{ Cart::instance('cart')->count() }} )
                                        </span>
                                        @endif
                                    </a>
                                </li>

                                @if (Route::has('login'))
                                @auth
                                @if (Auth::user()->role_name === 'ADM')

                                <li>
                                    <div class="btn-group pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                                <i class="fa fa-user"></i>
                                                {{ Auth::user()->name }}
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('admin.dashboard') }}">?????????? ????????????</a></li>
                                                <hr>
                                                <li><a href="{{ route('admin.users') }}">?????????????????????? </a></li>
                                                <li><a href="{{ route('admin.roles') }}">????????</a></li>
                                                <hr>
                                                <li><a href="{{ route('admin.categories') }}">???????????????????? ??????????????????????</a></li>
                                                <li><a href="{{ route('admin.brands') }}">???????????????????? ????????????????</a></li>
                                                <li><a href="{{ route('admin.products') }}">???????????????????? ????????????????</a></li>
                                                <hr>
                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                        document.getElementById('logout-form').submit();">
                                                        ??????????
                                                    </a></li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @else
                                <li>
                                    <div class="btn-group pull-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                                <i class="fa fa-user"></i>
                                                {{ Auth::user()->name }}
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('user.dashboard') }}"></i>?????????????? ??????????????????????</a></li>
                                                <hr>
                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                        document.getElementById('logout-form').submit();">
                                                        ??????????
                                                    </a></li>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                @endif
                                @else
                                <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> ????????????</a></li>
                                <li><a href="{{ route('register') }}"><i class="fa fa-star"></i> ??????????????????????????????</a></li>
                                @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-right">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="/" class="{{ request()->is('/*') ? 'active' : null }}">??????????????</a></li>
                                <li>
                                    <a href="/shop" class="{{request()->is('shop*')||request()->is('product-category*')||request()->is('product-brand*')?'active':null}}">??????????????</a>
                                </li>
                                <li><a href="/contacts" class="{{ request()->is('contacts*') ? 'active' : null }}">????????????????</a></li>
                                <li><a href="/help" class="{{ request()->is('help*') ? 'active' : null }}">???????????????? ??????????????????????????</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="??????????" />
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    {{ $slot }}

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="companyinfo">
                            <h2><span>clothes</span>-shop</h2>
                            <p>????????-?????? ?????????????? ????????????????????</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ asset('storage/images/home/iframe1.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>?????????????? ??????????????????</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ asset('storage/images/home/iframe2.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>?????????????? ??????????????????</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ asset('storage/images/home/iframe3.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>?????????????? ??????????????????</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ asset('storage/images/home/iframe4.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>?????????????? ??????????????????</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>????????????</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/help">????????????????</a></li>
                                <li><a href="/contacts">????'?????????????? ?? ????????</a></li>
                                <!--<li><a href="#">Order Status</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>??????????????????</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">??????????????????</a></li>
                                <li><a href="#">????????????</a></li>
                                <li><a href="#">??????????</a></li>
                                <li><a href="#">???????????????????? ????????</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>????????????</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">ACNE</a></li>
                                <li><a href="#">GR??NE ERDE</a></li>
                                <li><a href="#">ALBIRO</a></li>
                                <li><a href="#">RONHILL</a></li>
                                <li><a href="#">ODDMOLLY</a></li>
                                <li><a href="#">BOUDESTIJN</a></li>
                                <li><a href="#">R??SCH CREATIVE CULTURE</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="address">
                            <img src="{{ asset('storage/images/home/map.png') }}" alt="" />
                            <p>02222 ??????????????, ????????, ??????.??????????????, ??.1, ??????-1</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright ?? 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/price-range.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @livewireScripts
</body>

</html>