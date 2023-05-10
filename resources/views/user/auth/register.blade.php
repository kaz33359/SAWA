<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!-- Primary Meta Tags -->
	<title>SAWA</title>
	<meta name="title" content="SAWA">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="SAWA">

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

  <!-- Global Links -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/Dax_dark.png') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
  <!-- Global Links -->

</head>

<body>

    <div class="main-wrapper log-wrap">
        <div class="row">

            <div class="col-md-6 login-bg">
                <div class="owl-carousel login-slide owl-theme">
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="{{ asset('user/assets/img/login-img.png') }}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="{{ asset('user/assets/img/login-img.png') }}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="{{ asset('user/assets/img/login-img.png') }}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 login-wrap-bg">

                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="img-logo">
                            <img src="{{ asset('user/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                            <div class="back-home">
                                <a href="{{ url('/') }}">Back to Home</a>
                            </div>
                        </div>
                        <h1>Sign up</h1>
                        <form action="{{ route('auth.save') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="form-control-label">Full Name</label>
                                <input type="text" class="form-control"  name="name" placeholder="Enter your Full Name">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" class="form-control"  name="email" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Mobile number</label>
                                <input type="text" class="form-control"  name="mobile" placeholder="Enter your mobile number">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="pass-group" id="passwordInput">
                                    <input type="password" class="form-control pass-input" name="password"
                                        placeholder="Enter your password">
                                    <span class="toggle-password feather-eye"></span>
                                    <span class="pass-checked"><i class="feather-check"></i></span>
                                </div>
                                <div class="password-strength" id="passwordStrength">
                                    <span id="poor"></span>
                                    <span id="weak"></span>
                                    <span id="strong"></span>
                                    <span id="heavy"></span>
                                </div>
                                <div id="passwordInfo"></div>
                            </div>
                            {{-- <div class="form-check remember-me">
                                <label class="form-check-label mb-0">
                                    <input class="form-check-input" type="checkbox" name="remember"> I agree to the <a
                                        href="term-condition.html">Terms of Service</a> and <a
                                        href="privacy-policy.html">Privacy Policy.</a>
                                </label>
                            </div> --}}
                            <div class="d-grid">
                                <button class="btn btn-primary btn-start" type="submit">Create Account</button>
                            </div>
                        </form>
                    </div>
                    <div class="google-bg text-center">
                        <span><a href="#">Or sign in with</a></span>
                        <div class="sign-google">
                            <ul>
                                <li><a href="#"><img src="{{ asset('user/assets/img/net-icon-01.png') }}" class="img-fluid" alt="Logo"> Sign
                                        In using Google</a></li>
                                <li><a href="#"><img src="{{ asset('user/assets/img/net-icon-02.png') }}" class="img-fluid" alt="Logo">Sign
                                        In using Facebook</a></li>
                            </ul>
                        </div>
                        <p class="mb-0">Already have an account? <a href="{{ url('/login') }}">Sign in</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/validation.js') }}"></script>
    <script src="{{ asset('user/assets/js/script.js') }}"></script>
    
</body>


</html>