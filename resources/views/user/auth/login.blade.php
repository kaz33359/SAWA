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
	<meta property="og:title" content="SAWA">
	<meta property="og:description" content="">
	<meta property="og:image" content="assets/images/image.jpeg"/>

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://thedaxads.com/">
	<meta property="twitter:title" content="SAWA">
	<meta property="twitter:description" content="">
	<meta property="twitter:image" content="assets/images/image.jpeg"/>
  <!-- Primary Meta Tags End -->

  <!-- Global Links -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('User/assets/img/Dax_dark.png') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/css/style.css') }}">
  <!-- Global Links -->

</head>

<body>

    <div class="main-wrapper log-wrap">
        <div class="row">

            <div class="col-md-6 login-bg">
                <div class="owl-carousel login-slide owl-theme">
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="{{ asset('User/assets/img/login-img.png') }}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>DreamsLMS Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="{{ asset('User/assets/img/login-img.png') }}" class="img-fluid" alt="Logo">
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
                        <div class="w-100">
                            <div class="img-logo">
                                <img src="{{ asset('User/assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                                <div class="back-home">
                                    <a href="{{ url('/') }}">Back to Home</a>
                                </div>
                            </div>
                            <h1>Sign into Your Account</h1>
                            <form action="https://dreamslms.dreamguystech.com/html/instructor-dashboard.html">
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="form-control pass-input"
                                            placeholder="Enter your password">
                                        <span class="feather-eye toggle-password"></span>
                                    </div>
                                </div>
                                <div class="forgot">
                                    <span><a class="forgot-link" href="forgot-password.html">Forgot Password
                                            ?</a></span>
                                </div>
                                <div class="remember-me">
                                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                        <input type="checkbox" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-start" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="google-bg text-center">
                        <span><a href="#">Or sign in with</a></span>
                        <div class="sign-google">
                            <ul>
                                <li><a href="#"><img src="{{ asset('User/assets/img/net-icon-01.png') }}" class="img-fluid" alt="Logo"> Sign
                                        In using Google</a></li>
                                <li><a href="#"><img src="{{ asset('User/assets/img/net-icon-02.png') }}" class="img-fluid" alt="Logo">Sign
                                        In using Facebook</a></li>
                            </ul>
                        </div>
                        <p class="mb-0">New User ? <a href="register.html">Create an Account</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/script.js') }}"></script>

</body>


</html>