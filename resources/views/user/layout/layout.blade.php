<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!-- Primary Meta Tags -->
	<title>INFODI</title>
	<meta name="title" content="INFODI">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="INFODI">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://thedaxads.com/">
	<meta property="og:title" content="INFODI">
	<meta property="og:description" content="">
	<meta property="og:image" content="{{ asset('user/assets/images/image.jpeg') }}"/>

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://thedaxads.com/">
	<meta property="twitter:title" content="INFODI">
	<meta property="twitter:description" content="">
	<meta property="twitter:image" content="{{ asset('user/assets/images/image.jpeg') }}"/>
  <!-- Primary Meta Tags End -->

    <!-- CSS here -->
    @section('css')
    @show

    </head>

<body>

    <div class="main-wrapper">

        <header class="header header-page">
            <div class="header-fixed">
                <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
                    <div class="container header-border">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="index.html" class="navbar-brand logo">
                                <img src="{{ asset('user/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="index.html" class="menu-logo">
                                    <img src="{{ asset('user/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <ul class="main-nav">
                                <li class="menu-effect"><a href="{{ url('/') }}">Home </a></li>
                                <li class="menu-effect"><a href="about.html">About </a></li>
                                <li class="menu-effect"><a href="{{ url('/product') }}">Products</a></li>
                                <li class="menu-effect"><a href="{{ url('/contact') }}">Contact</a></li>
                                <li class="login-link">
                                    <a href="login.html">Login / Signup</a>
                                </li>
                            </ul>
                        </div>
                            <?php
                                $data = DB::table('users')->where('id', '=', session('LoggedUser'))->get();
                                // print($data);
                                ?>
                            <ul class="nav header-navbar-rht">
                                 @if (session()->has('LoggedUser'))
                             @foreach ($data as $item)
                            <li class="nav-item cart-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="{{ asset('user/assets/img/icon/cart.svg') }}" alt="img">
                                </a>
                                <div class="wishes-list dropdown-menu dropdown-menu-right">
                                    <ul>
                                        <li><a class="dropdown-item" href="{{ url('cart') }}">View Cart</a></li>
                                        <li><a class="dropdown-item" href="{{ url('checkout') }}">Checkout</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item user-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        <img src="{{ asset('user/assets/img/user/user11.jpg') }}" alt="">
                                        <span class="status online"></span>
                                    </span>
                                </a>
                                <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('user/assets/img/user/user11.jpg') }}" alt="User Image"
                                                class="avatar-img rounded-circle">
                                        </div>
                                        <div class="user-text">
                                            <h6>Hi , {{ $item->name }}</h6>
                                            <p class="text-muted mb-0">Student</p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="{{ url('/user-profile')}}"><i
                                            class="feather-user me-1"></i> Profile</a>
                                    <a class="dropdown-item" href="{{ url('user/logout') }}"><i class="feather-log-out me-1"></i>
                                        Logout</a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @else
                            <ul class="nav header-navbar-rht">
                                <li class="nav-item">
                                <a class="nav-link header-sign" href="{{ url('/login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link header-login" href="{{ url('/register') }}">Signup</a>
                                </li>
                            </ul>
                            @endif
                        
                        
                    </div>
                </nav>
            </div>
        </header>
<!-- header area end  -->

    @section('container')
    @show

<footer class="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <img src="{{ asset('user/assets/img/logo.svg') }}" alt="logo">
                                </div>
                                <div class="footer-about-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Explore</h2>
                                <ul>
                                    <li><a href="{{ url('/')}}">Home</a></li>
                                    <li><a href="{{ url('/about')}}">About</a></li>
                                    <li><a href="{{ url('/product')}}">Products</a></li>
                                    <li><a href="{{ url('/contact')}}">Contact</a></li>
                                    <!-- <li><a href="deposit-instructor-dashboard.html"> Dashboard</a></li> -->
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6">

                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Quick links</h2>
                                <ul>
                                
                                    <li><a href="{{ url('/term-condition')}}">Terms & Condition</a></li>
                                    <li><a href="{{ url('/privacy-policy')}}">Privacy Policy</a></li>
                                    <li><a href="{{ url('/faq')}}">FAQ</a></li>
                                    <!-- <li><a href="register.html">Register</a></li>
                                 <li><a href="students-list.html">Student</a></li>
                                 <li><a href="deposit-student-dashboard.html"> Dashboard</a></li> -->
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">

                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Address</h2>
                                <div class="news-letter">
                                    <!-- <form>
                                        <input type="text" class="form-control" placeholder="Enter your email address"
                                            name="email">
                                    </form> -->
                                </div>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <img src="{{ asset('user/assets/img/icon/icon-20.svg') }}" alt="" class="img-fluid">
                                        <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                                    </div>
                                    <p>
                                        <img src="{{ asset('user/assets/img/icon/icon-19.svg') }}" alt="" class="img-fluid">
                                        <a href="https://dreamslms.dreamguystech.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="afcbddcacec2dcc3c2dcefcad7cec2dfc3ca81ccc0c2">[email&#160;protected]</a>
                                    </p>
                                    <p class="mb-0">
                                        <img src="{{ asset('user/assets/img/icon/icon-21.svg') }}" alt="" class="img-fluid">
                                        +19 123-456-7890
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bottom">
                <div class="container">

                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="privacy-policy">
                                    <!-- <ul>
                                        <li><a href="term-condition.html">Terms</a></li>
                                        <li><a href="privacy-policy.html">Privacy</a></li>
                                    </ul> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p class="mb-0">&copy; 2023 <a style="color: red;" href="https://thedaxads.com">DaxAds</a>. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>

    </div>

     <!-- footer area end -->

    @section('javascript')
    @show
    
    </body>


</html>
