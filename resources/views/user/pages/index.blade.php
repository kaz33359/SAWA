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
	
  <!-- Global Links -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/Dax_black.png') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
  <!-- Global Links End -->
</head>

<body class="home-two">

    <div class="main-wrapper">

        <header class="header header-two">
            <div class="header-fixed">
                <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
                    <div class="container">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="index.html" class="navbar-brand logo">
                                <img src="{{ asset('user/assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="index.html" class="menu-logo">
                                    <img src="{{ asset('user/assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <ul class="main-nav">
                                <li class="menu-effect active"><a href="{{ url('/') }}">Home </a></li>
                                    <!-- <ul class="submenu">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="active"><a href="index-two.html">Home Two</a></li>
                                        <li><a href="index-three.html">Home Three</a></li>
                                        <li><a href="index-four.html">Home Four</a></li>
                                    </ul>
                                </li> -->
                                <li class="menu-effect"><a href="about.html">About</i></a></li>
                                    <!-- <ul class="submenu">
                                        <li><a href="instructor-dashboard.html">Dashboard</a></li>
                                        <li class="has-submenu">
                                            <a href="instructor-list.html">Instructor</a>
                                            <ul class="submenu">
                                                <li><a href="instructor-list.html">List</a></li>
                                                <li><a href="instructor-grid.html">Grid</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="instructor-course.html">My Course</a></li>
                                        <li><a href="instructor-reviews.html">Reviews</a></li>
                                        <li><a href="instructor-earnings.html">Earnings</a></li>
                                        <li><a href="instructor-orders.html">Orders</a></li>
                                        <li><a href="instructor-payouts.html">Payouts</a></li>
                                        <li><a href="instructor-tickets.html">Support Ticket</a></li>
                                        <li><a href="instructor-edit-profile.html">Instructor Profile</a></li>
                                        <li><a href="instructor-security.html">Security</a></li>
                                        <li><a href="instructor-social-profiles.html">Social Profiles</a></li>
                                        <li><a href="instructor-notification.html">Notifications</a></li>
                                        <li><a href="instructor-profile-privacy.html">Profile Privacy</a></li>
                                        <li><a href="instructor-delete-profile.html">Delete Profile</a></li>
                                        <li><a href="instructor-linked-account.html">Linked Accounts</a></li>
                                    </ul>
                                </li> -->
                                <li class="menu-effect"><a href="{{ url('/product') }}">Products </a></li>
                                    <!-- <ul class="submenu first-submenu">
                                        <li class="has-submenu ">
                                            <a href="students-list.html">Student</a>
                                            <ul class="submenu">
                                                <li><a href="students-list.html">List</a></li>
                                                <li><a href="students-grid.html">Grid</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="setting-edit-profile.html">Student Profile</a></li>
                                        <li><a href="setting-student-security.html">Security</a></li>
                                        <li><a href="setting-student-social-profile.html">Social profile</a></li>
                                        <li><a href="setting-student-notification.html">Notification</a></li>
                                        <li><a href="setting-student-privacy.html">Profile Privacy</a></li>
                                        <li><a href="setting-student-accounts.html">Link Accounts</a></li>
                                        <li><a href="setting-student-referral.html">Referal</a></li>
                                        <li><a href="setting-student-subscription.html">Subscribtion</a></li>
                                        <li><a href="setting-student-billing.html">Billing</a></li>
                                        <li><a href="setting-student-payment.html">Payment</a></li>
                                        <li><a href="setting-student-invoice.html">Invoice</a></li>
                                        <li><a href="setting-support-tickets.html">Support Tickets</a></li>
                                    </ul>
                                </li> -->
                                <li class="menu-effect">
                                    <a href="{{ url('/contact') }}">Contact </a>
                                    </li>
                                    <!-- <ul class="submenu">
                                        <li><a href="notifications.html">Notification</a></li>
                                        <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li class="has-submenu">
                                            <a href="course-list.html">Course</a>
                                            <ul class="submenu">
                                                <li><a href="add-course.html">Add Course</a></li>
                                                <li><a href="course-list.html">Course List</a></li>
                                                <li><a href="course-grid.html">Course Grid</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="come-soon.html">Error</a>
                                            <ul class="submenu">
                                                <li><a href="come-soon.html">Comeing soon</a></li>
                                                <li><a href="error-404.html">404</a></li>
                                                <li><a href="error-500.html">500</a></li>
                                                <li><a href="under-construction.html">Under Construction</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="support.html">Support</a></li>
                                        <li><a href="job-category.html">Category</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu menu-effect"> -->
                                    <!-- <li class="has-submenu menu-effect">
                                    <a href="category.html">Category</a>
                                    </li> -->
                                    <!-- <ul class="submenu">
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                        <li><a href="blog-modern.html">Blog Modern</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="login-link">
                                    <a href="login.html">Login / Signup</a>
                                </li> -->
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
                                <a class="login-head button" href="{{ url('/login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="signin-head" href="{{ url('/register') }}">Sign up</a>
                            </li>
                        </ul>
                          @endif
                    </div>
                </nav>
            </div>
        </header>


        <section class="home-two-slide d-flex align-items-center">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 col-12" data-aos="fade-up">
                        <div class="home-slide-face">
                            <div class="home-slide-text ">
                                <h5>The Leader in Online Learning</h5>
                                <h1>Engaging & Accessible Online Courses For All</h1>
                            </div>
                            <div class="banner-content">
                                <form class="form" name="store" id="store" method="get"
                                    action="{{ route('user.product') }}">
                                    <div class="form-inner">
                                        <div class="input-group">
                                            <span class="drop-detail">
                                                <select class="form-control select" name="storeID">
                                                    <option value="0">Select Category</option>
                                                    <option value="1">Category One</option>
                                                    <option value="1">Category Two</option>
                                                </select>
                                            </span>
                                            <input type="email" class="form-control"
                                                placeholder="Search School, Online eductional centers, etc">
                                            <button class="btn btn-primary sub-btn" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="trust-user-two">
                                <p>Trusted by over 15K Users worldwide since 2022</p>
                                <div class="rating-two">
                                    <span>4.4</span>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shapes">
                    <img class="shapes-one" src="{{ asset('user/assets/img/bg/home-right.png')}}" alt="">
                    <img class="shapes-two" src="{{ asset('user/assets/img/bg/home-right-bottom.png')}}" alt="">
                    <img class="shapes-middle" src="{{ asset('user/assets/img/bg/home-middle.png')}}" alt="">
                    <img class="shapes-four wow animate__animated animate__slideInLeft"
                        src="{{ asset('user/assets/img/bg/home-left.png')}}" alt="">
                </div>

            </div>
        </section>


        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInLeft order-lg-1 order-xs-2 order-sm-2" data-aos="fade-up">
                        <div class="header-two-title">
                            <p class="tagline">Learn with DreamLMS</p>
                            <h2 class="mb-0">Get Trained By Experts & Professionals around the World</h2>
                        </div>
                        <div class="header-two-title">
                            <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                fermentum massa viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo
                                quis integer a felis ac vel mauris a morbi. Scelerisque nunc accumsan elementum aenean
                                nisl lacinia. Congue enim aliquet ac vitae turpis. Neque, bibendum imperdiet sed
                                ullamcorper morbi amet. Facilisi odio amet, nunc quam ut nulla purus adipiscing
                                pharetra.</p>
                            <div class="about-button more-details">
                                <a href="about.html" class="discover-btn">Learn more <i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-xs-1 order-sm-1">
                        <div class="stylist-gallery">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
                                    <div
                                        class="about-image count-one d-flex align-items-center justify-content-center flex-fill project-details">
                                        <div class="about-count">
                                            <div class="course-img">
                                                <img src="{{ asset('user/assets/img/icon/count-one.svg')}}" alt="">
                                            </div>
                                            <div class="count-content-three course-count ms-0">
                                                <h4><span class="counterUp">10</span>K</h4>
                                                <p class="mb-0">Online Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-down">
                                    <div
                                        class="about-image count-two d-flex align-items-center justify-content-center flex-fill project-details">
                                        <div class="about-count">
                                            <div class="course-img">
                                                <img src="{{ asset('user/assets/img/icon/count-two.svg')}}" alt="">
                                            </div>
                                            <div class="count-content-three course-count ms-0">
                                                <h4><span class="counterUp">215</span>+</h4>
                                                <p class="mb-0">Expert Tutors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-right"
                                    data-wow-delay="1.5">
                                    <div
                                        class="about-image count-three d-flex align-items-center justify-content-center flex-fill project-details">
                                        <div class="about-count">
                                            <div class="course-img">
                                                <img src="{{ asset('user/assets/img/icon/count-three.svg')}}" alt="">
                                            </div>
                                            <div class="count-content-three course-count ms-0">
                                                <h4><span class="counterUp">10</span>K</h4>
                                                <p class="mb-0">Ceritified Courses</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-left"
                                    data-wow-delay="0.5">
                                    <div
                                        class="about-image count-four d-flex align-items-center justify-content-center flex-fill project-details">
                                        <div class="about-count">
                                            <div class="course-img">
                                                <img src="{{ asset('user/assets/img/icon/count-four.svg')}}" alt="">
                                            </div>
                                            <div class="count-content-three course-count ms-0">
                                                <h4><span class="counterUp">10</span>K</h4>
                                                <p class="mb-0">Online Students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="topcategory-sec">
            <div class="container">
                <div class="header-two-title text-center" data-aos="fade-up">
                    <p class="tagline">Favourite Course</p>
                    <h2>Top Category</h2>
                    <div class="header-two-text">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                            bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                </div>
                <div class="top-category-group">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="categories-item flex-fill">
                                <div class="categories-icon">
                                    <img src="{{ asset('user/assets/img/category/category-1.svg')}}" alt="Angular Development">
                                </div>
                                <div class="categories-content">
                                    <h3>Angular Development</h3>
                                    <p>40 Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="categories-item flex-fill">
                                <div class="categories-icon">
                                    <img src="{{ asset('user/assets/img/category/category-2.svg')}}" alt="Python Development">
                                </div>
                                <div class="categories-content">
                                    <h3>Python Development</h3>
                                    <p>20 Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="categories-item flex-fill">
                                <div class="categories-icon">
                                    <img src="{{ asset('user/assets/img/category/category-3.svg')}}" alt="Node Js Development">
                                </div>
                                <div class="categories-content">
                                    <h3>Node Js Development</h3>
                                    <p>120 Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="categories-item flex-fill">
                                <div class="categories-icon">
                                    <img src="{{ asset('user/assets/img/category/category-4.svg')}}" alt="PHP Development">
                                </div>
                                <div class="categories-content">
                                    <h3>PHP Development</h3>
                                    <p>40 Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="categories-item flex-fill">
                                <div class="categories-icon">
                                    <img src="{{ asset('user/assets/img/category/category-5.svg')}}" alt="Docker Development">
                                </div>
                                <div class="categories-content">
                                    <h3>Docker Development</h3>
                                    <p>40 Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="categories-item  flex-fill">
                                <div class="categories-icon">
                                    <img src="{{ asset('user/assets/img/category/category-6.svg')}}" alt="Swift Development">
                                </div>
                                <div class="categories-content">
                                    <h3>Swift Development</h3>
                                    <p>40 Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="categories-item  flex-fill">
                                <div class="categories-icon">
                                    <img src="{{ asset('user/assets/img/category/category-7.svg')}}" alt="Photography">
                                </div>
                                <div class="categories-content">
                                    <h3>Photography</h3>
                                    <p>40 Instructors</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex">
                            <div class="categories-item  flex-fill" data-aos="fade-up">
                                <div class="categories-icon">
                                    <img src="{{ asset('user/assets/img/category/category-8.svg')}}" alt="Business">
                                </div>
                                <div class="categories-content">
                                    <h3>Business</h3>
                                    <p>40 Instructors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="more-details text-center" data-aos="fade-down">
                        <a href="{{ url('/job-category')}}" class="discover-btn">View all Category <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

            </div>
        </section>


        <section class="featured-courses-sec">
            <div class="patter-one-main">
                <img class="patter-one" src="{{ asset('user/assets/img/bg/patter-one.png') }}" alt="">
            </div>
            <div class="container">
                <div class="header-two-title text-center" data-aos="fade-up">
                    <p class="tagline">What’s New</p>
                    <h2>Featured Courses</h2>
                    <div class="header-two-text m-auto text-center d-block">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                            bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                </div>
                <div class="featured-courses-two">
                    <div class="row">

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="featured-details-two">
                                <div class="product-item-two">
                                    <div class="product-img-two">
                                        <a href="course-details.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/courses-01.jpg')}}">
                                        </a>
                                        <div class="price-text">
                                            <h4><span>PHP</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-details-content">
                                        <div class="image-info">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/profiles/avatar-01.jpg')}}">
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-3">203 reviews</span>
                                        </div>
                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">The Complete
                                                    Web Developer PHP framework Course 2.0</a></h3>
                                            <p class="me-3">By<span class="text-danger ms-2">Russell T. Johnson</span>
                                            </p>
                                        </div>
                                        <div class="featured-info-time d-flex align-items-center">
                                            <div class="hours-time-two d-flex align-items-center">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <p>6hr 30min</p>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price">
                                                    <h3>$400 <span>$99.00</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="featured-details-two">
                                <div class="product-item-two">
                                    <div class="product-img-two">
                                        <a href="course-details.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/courses-02.jpg')}}">
                                        </a>
                                        <div class="price-text">
                                            <h4><span>Wordpress</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-details-content">
                                        <div class="image-info">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/profiles/avatar-02.jpg')}}">
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-2">243 reviews</span>
                                        </div>
                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">Wordpress
                                                    for Beginners - Master Wordpress Quickly</a></h3>
                                            <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                        </div>
                                        <div class="featured-info-time d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <span>6hr 30min</span>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price">
                                                    <h3>$300 <span>$99.00</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="featured-details-two">
                                <div class="product-item-two">
                                    <div class="product-img-two">
                                        <a href="course-details.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/courses-03.jpg')}}">
                                        </a>
                                        <div class="price-text">
                                            <h4><span>Angular</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-details-content">
                                        <div class="image-info">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/profiles/avatar-03.jpg')}}">
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-2">243 reviews</span>
                                        </div>
                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">Learn
                                                    Angular Fundamentals From beginning to advance lavel</a></h3>
                                            <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                        </div>
                                        <div class="featured-info-time d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <span>6hr 30min</span>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price">
                                                    <h3>$300 <span>$99.00</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="featured-details-two">
                                <div class="product-item-two">
                                    <div class="product-img-two">
                                        <a href="course-details.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/courses-04.jpg')}}">
                                        </a>
                                        <div class="price-text">
                                            <h4><span>HTML5</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-details-content">
                                        <div class="image-info">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/profiles/avatar-04.jpg')}}">
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-2">243 reviews</span>
                                        </div>
                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">Build
                                                    Responsive Real World Websites with HTML5 and CSS3</a></h3>
                                            <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                        </div>
                                        <div class="featured-info-time d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <span>6hr 30min</span>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price">
                                                    <h3>$300 <span>$99.00</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="featured-details-two">
                                <div class="product-item-two">
                                    <div class="product-img-two">
                                        <a href="course-details.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/courses-05.jpg')}}">
                                        </a>
                                        <div class="price-text">
                                            <h4><span>C#</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-details-content">
                                        <div class="image-info">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/profiles/avatar-05.jpg')}}">
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-2">243 reviews</span>
                                        </div>

                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">C#
                                                    Developers Double Your Coding Speed with Visual Studio</a></h3>
                                            <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                        </div>
                                        <div class="featured-info-time d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <span>6hr 30min</span>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price">
                                                    <h3>$300 <span>$99.00</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex" data-aos="fade-down">
                            <div class="featured-details-two">
                                <div class="product-item-two">
                                    <div class="product-img-two">
                                        <a href="course-details.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/courses-06.jpg')}}">
                                        </a>
                                        <div class="price-text">
                                            <h4><span>UI/UX</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-details-content">
                                        <div class="image-info">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/profiles/avatar-06.jpg')}}">
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-2">243 reviews</span>
                                        </div>
                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">Information
                                                    About UI/UX Design Degree</a></h3>
                                            <p class="me-3">By<span class="text-danger ms-2">Cristofer Nolen</span></p>
                                        </div>
                                        <div class="featured-info-time d-flex align-items-center">
                                            <div class="rating-img d-flex align-items-center">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <span>6hr 30min</span>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price">
                                                    <h3>$300 <span>$99.00</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12" data-aos="fade-up">
                    <div class="more-details text-center">
                        <a href="{{ url('/product')}}" class="discover-btn">View all Products <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

            </div>
        </section>


        <section class="growup-section">
            <div class="home-two-shapes">
                <img src="{{ asset('user/assets/img/bg/home-right-bottom.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-5 col-12" data-aos="fade-right">
                        <div class="growup-images-two">
                            <div class="growup-skills-img">
                                <img class="" src="{{ asset('user/assets/img/skil-01.png')}}" alt="image-banner" title="image-banner">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-7 col-12 wow fadeInLeft" data-aos="fade-left">
                        <div class="header-two-title">
                            <p class="tagline">Growup Your Skill</p>
                            <h2 class="text-navy">Learn Anything you want today</h2>
                            <div class="header-two-text">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor
                                    fermentum massa viverra congue proin. A volutpat eget ultrices velit nunc orci.
                                    Commodo quis integer a felis ac vel mauris a morbi. Scelerisque nunc accumsan
                                    elementum aenean nisl lacinia. Congue enim aliquet ac vitae turpis. Neque, bibendum
                                    imperdiet sed ullamcorper morbi amet. Facilisi odio amet, nunc quam ut nulla purus
                                    adipiscing pharetra.</p>
                            </div>
                        </div>
                        <div class="about-button more-details">
                            <a href="{{ url('/register')}}" class="discover-btn">Join Today <i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="master-skills-sec">
            <div class="container">
                <div class="header-two-title text-center" data-aos="fade-up">
                    <p class="tagline">What’s New</p>
                    <h2>Master the skills to drive your career</h2>
                    <div class="header-two-text" data-aos="fade-up">
                        <p class="mb-0">Get certified, master modern tech skills, and level up your career — whether
                            you’re starting out or a seasoned pro. 95% of eLearning learners report our hands-on content
                            directly helped their careers.</p>
                    </div>
                </div>

                <div class="course-info-two">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-md-12 order-lg-0 order-md-0 order-0" data-aos="fade-up">
                            <div class="join-title-one">
                                <h2>Award Winning Course Management</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa
                                    viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer
                                    a felis ac vel mauris a morbi. Scelerisque nunc accumsan elementum aenean nisl
                                    lacinia. Congue enim aliquet ac vitae turpis. Neque, bibendum imperdiet sed
                                    ullamcorper morbi amet. Facilisi odio amet, nunc quam ut nulla purus adipiscing
                                    pharetra.</p>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-12 order-lg-1 order-md-1 order-1" data-aos="fade-up">
                            <div class="join-mentor-img">
                                <div class="winning-two-one">
                                    <img src="{{ asset('user/assets/img/skills/skills-01.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="joing-icon-award">
                                    <img src="{{ asset('user/assets/img/bg/skill-icon-01.png')}}" alt="" class="joing-icon-one img-fluid">
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-7 col-md-12 order-lg-2 order-md-3 order-3" data-aos="fade-up">
                            <div class="join-mentor-img">
                                <div class="winning-two-two">
                                    <img src="{{ asset('user/assets/img/skills/skills-02.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="joing-icon-award">
                                <img src="{{ asset('user/assets/img/bg/skill-icon-02.png')}}" alt="" class="joing-icon-two img-fluid">
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-5 col-md-12 order-lg-3 order-md-2 order-2" data-aos="fade-up">
                            <div class="join-title-middle">
                                <h2>Award Winning Course Management</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa
                                    viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer
                                    a felis ac vel mauris a morbi. Scelerisque nunc accumsan elementum aenean nisl
                                    lacinia. Congue enim aliquet ac vitae turpis. Neque, bibendum imperdiet sed
                                    ullamcorper morbi amet. Facilisi odio amet, nunc quam ut nulla purus adipiscing
                                    pharetra.</p>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-7 col-md-12 order-lg-4 order-md-4 order-4" data-aos="fade-up">
                            <div class="join-title-one">
                                <h2>Certification for solid development of your Carrer</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam dolor fermentum massa
                                    viverra congue proin. A volutpat eget ultrices velit nunc orci. Commodo quis integer
                                    a felis ac vel mauris a morbi. Scelerisque nunc accumsan elementum aenean nisl
                                    lacinia. Congue enim aliquet ac vitae turpis. Neque, bibendum imperdiet sed
                                    ullamcorper morbi amet. Facilisi odio amet, nunc quam ut nulla purus adipiscing
                                    pharetra.</p>
                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-5 col-md-12 order-lg-5 order-md-5 order-5" data-aos="fade-up">
                            <div class="join-mentor-img mb-0">
                                <div class="winning-two-three">
                                    <img src="{{ asset('user/assets/img/skills/skills-03.jpg')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="joing-icon-award">
                                <img src="{{ asset('user/assets/img/bg/skill-icon-03.png')}}" alt="" class="joing-icon-three img-fluid">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>


        <section class="testimonial-sec">
            <div class="container">
                <div class="testimonial-two-img">
                    <img src="{{ asset('user/assets/img/bg/map-user.png')}}" alt="" class="img-fluid">
                </div>
                <div class="testimonial-subhead-two">
                    <div class="col-xl-8 col-lg-10 col-md-10 mx-auto" data-aos="fade-down">
                        <div class="testimonial-inner">
                            <div class="header-two-title testimonial-head-two text-center">
                                <h2 data-aos="fade-down">Join over <span>5 Million</span> Students</h2>
                                <div class="header-two-text text-center">
                                    <p>Get certified, master modern tech skills, and level up your career — whether
                                        you’re starting out or a seasoned pro. 95% of eLearning learners report our
                                        hands-on content directly helped their careers.</p>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-4 col-sm-12" data-aos="fade-up">
                                    <div class="course-count-two course-count">
                                        <h4><span class="counterUp text-orange">253,085</span></h4>
                                        <h5>Students Enrolled</h5>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12" data-aos="fade-up">
                                    <div class="course-count-two  course-count">
                                        <h4><span class="counterUp text-green">1,205</span></h4>
                                        <h5>Total Courses</h5>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12" data-aos="fade-up">
                                    <div class="course-count-two  course-count">
                                        <h4><span class="counterUp text-blue">253,085</span></h4>
                                        <h5>Students Worldwide</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="trending-course-sec">
            <div class="container">
                <div class="header-two-title text-center" data-aos="fade-up">
                    <p class="tagline">New Courses</p>
                    <h2>Trending Courses</h2>
                    <div class="header-two-text m-auto text-center d-block">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                            bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                </div>

                <div class="trending-course-main">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                            <div class="trending-courses-group">
                                <div class="trending-courses-two">
                                    <div class="product-img course-column-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/skills/skill-01.jpg')}}">
                                        </a>
                                        <div class="trending-price">
                                            <h4><span>Node Js</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-content-column">
                                        <div class="trending-two-rating align-items-center">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-2">243 reviews</span>
                                        </div>
                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">Wordpress
                                                    for Beginners - Master Wordpress Quickly</a></h3>
                                            <div class="time-hours-two">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <p>6hr 30min</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="rating-price-two d-flex align-items-center">
                                                <p>Cristofer Nolen</p>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price-two">
                                                    <h3>$300</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                            <div class="trending-courses-group">
                                <div class="trending-courses-two">
                                    <div class="product-img course-column-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/skills/skill-02.jpg')}}">
                                        </a>
                                        <div class="trending-price">
                                            <h4><span>C#</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-content-column">
                                        <div class="trending-two-rating align-items-center">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-2">243 reviews</span>
                                        </div>
                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">C#
                                                    Developers Double Your Coding Speed with Visual Studio</a></h3>
                                            <div class="time-hours-two">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <p>6hr 30min</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="rating-price-two d-flex align-items-center">
                                                <p>Cristofer Nolen</p>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price-two">
                                                    <h3>$300</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                            <div class="trending-courses-group">
                                <div class="trending-courses-two">
                                    <div class="product-img course-column-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/skills/skill-03.jpg')}}">
                                        </a>
                                        <div class="trending-price">
                                            <h4><span>Angular</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-content-column">
                                        <div class="trending-two-rating align-items-center">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-2">243 reviews</span>
                                        </div>
                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">Learn
                                                    Angular Fundamentals From beginning to advance lavel</a></h3>
                                            <div class="time-hours-two">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <p>6hr 30min</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="rating-price-two d-flex align-items-center">
                                                <p>Cristofer Nolen</p>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price-two">
                                                    <h3>$300</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12" data-aos="fade-down">
                            <div class="trending-courses-group">
                                <div class="trending-courses-two">
                                    <div class="product-img course-column-img">
                                        <a href="instructor-profile.html">
                                            <img class="img-fluid" alt="" src="{{ asset('user/assets/img/skills/skill-04.jpg')}}">
                                        </a>
                                        <div class="trending-price">
                                            <h4><span>HTML5</span></h4>
                                        </div>
                                    </div>
                                    <div class="course-content-column">
                                        <div class="trending-two-rating align-items-center">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span class="ms-2">243 reviews</span>
                                        </div>
                                        <div class="name-text featured-info-two">
                                            <h3 class="title instructor-text"><a href="course-details.html">Build
                                                    Responsive Real World Websites with HTML5 and CSS3</a></h3>
                                            <div class="time-hours-two">
                                                <span><i class="fa-regular fa-clock me-2"></i></span>
                                                <p>6hr 30min</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="rating-price-two d-flex align-items-center">
                                                <p>Cristofer Nolen</p>
                                            </div>
                                            <div class="course-view d-inline-flex align-items-center">
                                                <div class="course-price-two">
                                                    <h3>$300</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12" data-aos="fade-up">
                    <div class="more-details text-center">
                        <a href="{{ url('/product')}}" class="discover-btn">View all Product <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

            </div>
        </section>


        <div class="knowledge-sec">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-12 ps-0">
                        <div class="featured-img-1"></div>
                    </div>
                    <div class="col-lg-6 col-sm-12" data-aos="fade-up">
                        <div class="joing-group">
                            <div class="section-title">
                                <h2>Want to share your knowledge? Join us a Mentor</h2>
                                <div class="joing-section-text">
                                    <p class="mb-0">High-definition video is video of higher resolution and quality than
                                        standard-definition. While there is no standardized meaning for high-definition,
                                        generally any video.</p>
                                </div>
                            </div>
                            <div class="joing-list">
                                <ul>
                                    <li data-aos="fade-bottom">
                                        <div class="joing-header">
                                            <span class="joing-icon bg-blue">
                                                <img src="{{ asset('user/assets/img/icon/joing-01.svg')}}" alt="" class="img-fluid">
                                            </span>
                                            <div class="joing-content">
                                                <h5 class="joing-title">Stay motivated with engaging instructors</h5>
                                                <div class="joing-para">
                                                    <p>High-definition video is video of higher resolution and quality
                                                        than standard-definition.</p>
                                                    <p>While there is no standardized meaning for high-definition,
                                                        generally any video.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-aos="fade-bottom">
                                        <div class="joing-header">
                                            <span class="joing-icon bg-yellow">
                                                <img src="{{ asset('user/assets/img/icon/joing-02.svg')}}" alt="" class="img-fluid">
                                            </span>
                                            <div class="joing-content">
                                                <h5 class="joing-title">Keep up with in the latest in cloud</h5>
                                                <div class="joing-para">
                                                    <p>High-definition video is video of higher resolution and quality
                                                        than standard-definition.</p>
                                                    <p>While there is no standardized meaning for high-definition,
                                                        generally any video.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-aos="fade-bottom">
                                        <div class="joing-header">
                                            <span class="joing-icon bg-green">
                                                <img src="{{ asset('user/assets/img/icon/joing-03.svg')}}" alt="" class="img-fluid">
                                            </span>
                                            <div class="joing-content aos">
                                                <h5 class="joing-title">Build skills your way, from labs to courses</h5>
                                                <div class="joing-para">
                                                    <p>High-definition video is video of higher resolution and quality
                                                        than standard-definition.</p>
                                                    <p>While there is no standardized meaning for high-definition,
                                                        generally any video.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-aos="fade-bottom" class="mb-0">
                                        <div class="joing-header">
                                            <span class="joing-icon bg-orange">
                                                <img src="{{ asset('user/assets/img/icon/joing-04.svg')}}" alt="" class="img-fluid">
                                            </span>
                                            <div class="joing-content aos">
                                                <h5 class="joing-title">Get certified with 100+ certification courses
                                                </h5>
                                                <div class="joing-para">
                                                    <p>High-definition video is video of higher resolution and quality
                                                        than standard-definition.</p>
                                                    <p>While there is no standardized meaning for high-definition,
                                                        generally any video.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="feature-instructors-sec">
            <div class="container">
                <div class="header-two-title text-center" data-aos="fade-up">
                    <p class="tagline">New Courses</p>
                    <h2>Featured Instructor</h2>
                    <div class="header-two-text aos" data-aos="fade-up">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                            bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                </div>

                <div class="featured-instructor-two">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                            <div class="instructors-widget">
                                <div class="instructors-img">
                                    <a href="instructor-list.html">
                                        <img class="img-fluid" alt="" src="assets/img/instructor/instructor-01.jpg">
                                    </a>
                                    <div class="featured-border">
                                        <div class="featured-img ">
                                            <img src="assets/img/category/category-1.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="course-details-two">
                                    <div class="instructors-content text-center">
                                        <h5><a href="instructor-profile.html">Julian Adrose</a></h5>
                                        <p>Angular Expert</p>
                                    </div>
                                    <div class="course-info"></div>
                                    <div class="student-count d-flex justify-content-center">
                                        <i class="fa-solid fa-user-group"></i>
                                        <span>50 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                            <div class="instructors-widget">
                                <div class="instructors-img">
                                    <a href="instructor-list.html">
                                        <img class="img-fluid" alt="" src="assets/img/instructor/instructor-02.jpg">
                                    </a>
                                    <div class="featured-border">
                                        <div class="featured-img ">
                                            <img src="assets/img/category/category-2.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="course-details-two">
                                    <div class="instructors-content text-center">
                                        <h5><a href="instructor-profile.html">Gallegos</a></h5>
                                        <p>Docker</p>
                                    </div>
                                    <div class="course-info"></div>
                                    <div class="student-count d-flex justify-content-center">
                                        <i class="fa-solid fa-user-group"></i>
                                        <span>70 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                            <div class="instructors-widget">
                                <div class="instructors-img">
                                    <a href="instructor-list.html">
                                        <img class="img-fluid" alt="" src="assets/img/instructor/instructor-03.jpg">
                                    </a>
                                    <div class="featured-border">
                                        <div class="featured-img ">
                                            <img src="assets/img/category/category-3.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="course-details-two">
                                    <div class="instructors-content text-center">
                                        <h5><a href="instructor-profile.html">Kristi</a></h5>
                                        <p>Node Js</p>
                                    </div>
                                    <div class="course-info"></div>
                                    <div class="student-count d-flex justify-content-center">
                                        <i class="fa-solid fa-user-group"></i>
                                        <span>60 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                            <div class="instructors-widget">
                                <div class="instructors-img">
                                    <a href="instructor-list.html">
                                        <img class="img-fluid" alt="" src="assets/img/instructor/instructor-04.jpg">
                                    </a>
                                    <div class="featured-border">
                                        <div class="featured-img ">
                                            <img src="assets/img/category/category-4.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="course-details-two">
                                    <div class="instructors-content text-center">
                                        <h5><a href="instructor-profile.html">Pinero</a></h5>
                                        <p>Python</p>
                                    </div>
                                    <div class="course-info"></div>
                                    <div class="student-count d-flex justify-content-center">
                                        <i class="fa-solid fa-user-group"></i>
                                        <span>80 Students</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="more-details text-center" data-aos="fade-up">
                        <a href="instructor-list.html" class="discover-btn discover-btn">View all Instructors <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

            </div>
        </div> -->


        <section class="real-reviews-sec">
            <div class="container">
                <div class="header-two-title text-center" data-aos="fade-up">
                    <p class="tagline">Check out these real reviews</p>
                    <h2>Users-love-us Don't take it from us</h2>
                    <div class="header-two-text text-center m-auto">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                            bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                </div>
                <div class="real-reviews-group">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up">
                            <div class="reviews-img">
                                <img src="{{ asset('user/assets/img/reviews-img-two.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-md-12" data-aos="fade-up">
                            <div class="owl-carousel real-reviews owl-theme">
                                <div class="item">
                                    <div class="real-reviews-grid">
                                        <div class="review-content">
                                            <h3>Helps us to improve our productivity</h3>
                                            <p>High-definition video is video of higher resolution and quality than
                                                standard-definition. While there is no standardized meaning for
                                                high-definition, generally any video.High-definition video is video of
                                                higher resolution and quality than standard-definition. While there is
                                                no standardized meaning for high-definition, generally any
                                                video.High-definition video is video of higher resolution and quality
                                                than standard-definition. While there is no standardized meaning for
                                                high-definition, generally any video.High-definition video is video of
                                                higher resolution and quality than standard-definition. While there is
                                                no standardized meaning for high-definition, generally any video.</p>
                                        </div>
                                        <div class="review-top">
                                            <div class="review-info">
                                                <h3 data-aos="fade-up">William George</h3>
                                                <h5 data-aos="fade-up">CEO & Chairman</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="real-reviews-grid">
                                        <div class="review-content">
                                            <h3>Helps us to improve our productivity</h3>
                                            <p>High-definition video is video of higher resolution and quality than
                                                standard-definition. While there is no standardized meaning for
                                                high-definition, generally any video.High-definition video is video of
                                                higher resolution and quality than standard-definition. While there is
                                                no standardized meaning for high-definition, generally any
                                                video.High-definition video is video of higher resolution and quality
                                                than standard-definition. While there is no standardized meaning for
                                                high-definition, generally any video.High-definition video is video of
                                                higher resolution and quality than standard-definition. While there is
                                                no standardized meaning for high-definition, generally any video.</p>
                                        </div>
                                        <div class="review-top">
                                            <div class="review-info">
                                                <h3 data-aos="fade-up">Julian Adrose</h3>
                                                <h5 data-aos="fade-up">Manager</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="real-reviews-grid">
                                        <div class="review-content">
                                            <h3>Helps us to improve our productivity</h3>
                                            <p>High-definition video is video of higher resolution and quality than
                                                standard-definition. While there is no standardized meaning for
                                                high-definition, generally any video.High-definition video is video of
                                                higher resolution and quality than standard-definition. While there is
                                                no standardized meaning for high-definition, generally any
                                                video.High-definition video is video of higher resolution and quality
                                                than standard-definition. While there is no standardized meaning for
                                                high-definition, generally any video.High-definition video is video of
                                                higher resolution and quality than standard-definition. While there is
                                                no standardized meaning for high-definition, generally any video.</p>
                                        </div>
                                        <div class="review-top">
                                            <div class="review-info">
                                                <h3>Gallegos</h3>
                                                <h5>CEO & MD</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="real-reviews-grid">
                                        <div class="review-content">
                                            <h3>Helps us to improve our productivity</h3>
                                            <p>High-definition video is video of higher resolution and quality than
                                                standard-definition. While there is no standardized meaning for
                                                high-definition, generally any video.High-definition video is video of
                                                higher resolution and quality than standard-definition. While there is
                                                no standardized meaning for high-definition, generally any
                                                video.High-definition video is video of higher resolution and quality
                                                than standard-definition. While there is no standardized meaning for
                                                high-definition, generally any video.High-definition video is video of
                                                higher resolution and quality than standard-definition. While there is
                                                no standardized meaning for high-definition, generally any video.</p>
                                        </div>
                                        <div class="review-top">
                                            <div class="review-info">
                                                <h3>William George</h3>
                                                <h5>CEO & Chairman</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-between align-items-center">
                                    <div class="owl-nav slide-nav-8 nav-control"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-two-carousel">
                    <div class="lead-group-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/lead-01.png')}}">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/lead-02.png')}}">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/lead-03.png')}}">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/lead-04.png')}}">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/lead-05.png')}}">
                            </div>
                        </div>
                        <div class="item">
                            <div class="lead-img">
                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/lead-06.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section class="latest-blog-sec">
            <div class="container">
                <div class="header-two-title text-center" data-aos="fade-up">
                    <p class="tagline">News & Events</p>
                    <h2>Our Latest Updates</h2>
                    <div class="header-two-text text-center aos" data-aos="fade-up">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum
                            gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                </div>
                <div class="award-winning-two">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">
                            <div class="event-blog-main">
                                <div class="latest-blog-img">
                                    <a href="blog-list.html">
                                        <img class="img-fluid" alt="" src="assets/img/blog/blog-01.jpg">
                                    </a>
                                </div>
                                <div class="latest-blog-content">
                                    <div class="event-content-title">
                                        <div class="event-span">
                                            <span class="span-name">Marketing</span>
                                        </div>
                                        <h5><a href="blog-list.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.</a></h5>
                                        <div class="blog-student-count">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span>Jun 15, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">
                            <div class="event-blog-main">
                                <div class="latest-blog-img">
                                    <a href="blog-list.html">
                                        <img class="img-fluid" alt="" src="assets/img/blog/blog-02.jpg">
                                    </a>
                                </div>
                                <div class="latest-blog-content">
                                    <div class="event-content-title">
                                        <div class="event-span">
                                            <span class="span-name">Sales</span>
                                        </div>
                                        <h5><a href="blog-list.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.</a></h5>
                                        <div class="blog-student-count">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span>Jun 15, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-down">
                            <div class="event-blog-main">
                                <div class="latest-blog-img">
                                    <a href="blog-list.html">
                                        <img class="img-fluid" alt="" src="assets/img/blog/blog-03.jpg">
                                    </a>
                                </div>
                                <div class="latest-blog-content">
                                    <div class="event-content-title">
                                        <div class="event-span">
                                            <span class="span-name">Marketing</span>
                                        </div>
                                        <h5><a href="blog-list.html">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit.</a></h5>
                                        <div class="blog-student-count">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <span>Jun 15, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="more-details text-center" data-aos="fade-down">
                        <a href="blog-grid.html" class="discover-btn">View all Events<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

            </div>
        </section> -->


        <footer class="footer footer-two" data-aos="fade-up">

            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">

                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <img src="{{ asset('user/assets/img/logo.svg')}}" alt="logo">
                                </div>
                                <div class="footer-about-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
                                </div>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank"><i class="feather-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="feather-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="feather-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="feather-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">

                            <div class="footer-widget footer-menu footer-menu-two">
                                <h2 class="footer-title">Explore</h2>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="product.html">Products</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <!-- <li><a href="deposit-instructor-dashboard.html"> Dashboard</a></li> -->
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">

                            <div class="footer-widget footer-menu footer-menu-two">
                                <h2 class="footer-title">Quick links</h2>
                                <ul>
                                    
                                    <li><a href="term-condition.html">Terms & Condition</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <!-- <li><a href="register.html">Register</a></li>
                                    <li><a href="students-list.html">Student</a></li>
                                    <li><a href="deposit-student-dashboard.html"> Dashboard</a></li> -->
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">

                            <div class="footer-widget footer-contact footer-contact-two">
                                <h2 class="footer-title">Address</h2>
                                <div class="footer-contact-widget">
                                    <div class="footer-address">
                                        <h6>Location</h6>
                                        <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                                    </div>
                                    <h6>Email Address</h6>
                                    <p>
                                        <a
                                            href="https://dreamslms.dreamguystech.com/cdn-cgi/l/email-protection#8ce8fee9ede1ffe0e1ffcce9f4ede1fce0e9a2efe3e1"><span
                                                class="__cf_email__"
                                                data-cfemail="43273126222e302f2e3003263b222e332f266d202c2e">[email&#160;protected]</span></a>
                                    </p>
                                    <h6>Phone number</h6>
                                    <p class="mb-0">
                                        <a href="tel:+191234567890">+19 123-456-7890</a>
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
                            <div class="col-md-6 col-sm-12">
                                <div class="copyright-text">
                                    <p class="mb-0">&copy; 2023 <a style="color: red;" href="https://thedaxads.com">DaxAds</a>. All rights reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="privacy-policy">
                                    <!-- <ul>
                                        <li><a href="term-condition.html">Terms & Condition</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="support.html">Contact Us</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>

    </div>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('user/assets/plugins/aos/aos.js')}}"></script>
    <script src="{{ asset('user/assets/js/jquery.waypoints.js')}}"></script>
    <script src="{{ asset('user/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('user/assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('user/assets/plugins/slick/slick.js')}}"></script>
    <script src="{{ asset('user/assets/plugins/swiper/js/swiper.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/script.js')}}"></script>

</body>



</html>