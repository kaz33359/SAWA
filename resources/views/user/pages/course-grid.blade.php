@extends('user/layout/layout')
@section('css')


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/favicon.svg')}}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('user/assets/plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{ asset('user/assets/plugins/feather/feather.css')}}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css')}}">
     @endsection

@section('container')
    <!-- breadcrumb area start -->

        <div class="breadcrumb-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="breadcrumb-list">
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Courses</li>
                                    <li class="breadcrumb-item active" aria-current="page">All Courses</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="course-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="showing-list">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <div class="view-icons">
                                            <a href="{{ url('/course-grid')}}" class="grid-view active"><i
                                                    class="feather-grid"></i></a>
                                            <a href="{{ url('/product')}}" class="list-view"><i
                                                    class="feather-list"></i></a>
                                        </div>
                                        <div class="show-result">
                                            <h4>Showing 1-9 of 50 results</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="show-filter add-course-info">
                                        <form action="#">
                                            <div class="row gx-2 align-items-center">
                                                <div class="col-md-6 col-item">
                                                    <div class=" search-group">
                                                        <i class="feather-search"></i>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search our courses">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-item">
                                                    <div class="form-group select-form mb-0">
                                                        <select class="form-select select" id="sel1" name="sellist1">
                                                            <option>Newly published </option>
                                                            <option>published 1</option>
                                                            <option>published 2</option>
                                                            <option>published 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="course-box course-design d-flex ">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="{{ url('/course-details')}}">
                                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/course-10.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3>$300 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-group d-flex">
                                                <div class="course-group-img d-flex">
                                                    <a href="instructor-profile.html"><img
                                                            src="{{ asset('user/assets/img/user/user1.jpg')}}" alt=""
                                                            class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="instructor-profile.html">Rolands R</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{ url('/course-details')}}">Information About UI/UX
                                                    Design Degree</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating-img d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}"alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{ url('/checkout')}}" class="btn btn-primary">BUY NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="course-box course-design d-flex ">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="{{ url('/course-details')}}">
                                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/course-11.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3>$200 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-group d-flex">
                                                <div class="course-group-img d-flex">
                                                    <a href="instructor-profile.html"><img
                                                            src="{{ asset('user/assets/img/user/user2.jpg')}}" alt=""
                                                            class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="instructor-profile.html">Jenis R.</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{ url('/course-details')}}">Wordpress for Beginners -
                                                    Master Wordpress Quickly</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating-img d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{ url('/checkout')}}" class="btn btn-primary">BUY NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="course-box course-design d-flex ">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="{{ url('/course-details')}}">
                                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/course-12.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3 class="free-color">FREE</h3>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-group d-flex">
                                                <div class="course-group-img d-flex">
                                                    <a href="instructor-profile.html"><img
                                                            src="{{ asset('user/assets/img/user/user3.jpg')}}" alt=""
                                                            class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="instructor-profile.html">Jesse Stevens</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{ url('/course-details')}}">Sketch from A to Z (2022):
                                                    Become an app designer</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating-img d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{ url('/checkout')}}" class="btn btn-primary">BUY NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="course-box course-design d-flex ">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="{{ url('/course-details')}}">
                                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/course-13.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3 class="free-color">FREE</h3>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-group d-flex">
                                                <div class="course-group-img d-flex">
                                                    <a href="instructor-profile.html"><img
                                                            src="{{ asset('user/assets/img/user/user4.jpg')}}" alt=""
                                                            class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="instructor-profile.html">Nicole Brown</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#rate" class="active-heart"><i
                                                            class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{ url('/course-details')}}">Learn Angular Fundamentals
                                                    From ...</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating-img d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{ url('/checkout')}}" class="btn btn-primary">BUY NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="course-box course-design d-flex ">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="{{ url('/course-details')}}">
                                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/course-14.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3>$29.99</h3>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-group d-flex">
                                                <div class="course-group-img d-flex">
                                                    <a href="instructor-profile.html"><img
                                                            src="{{ asset('user/assets/img/user/user5.jpg')}}" alt=""
                                                            class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="instructor-profile.html">John Smith</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#rate" class="active-heart"><i
                                                            class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{ url('/course-details')}}">Build Responsive Real World
                                                    Websites with ...</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating-img d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{ url('/checkout')}}" class="btn btn-primary">BUY NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="course-box course-design d-flex ">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="{{ url('/course-details')}}">
                                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/course-15.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3>$300 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-group d-flex">
                                                <div class="course-group-img d-flex">
                                                    <a href="instructor-profile.html"><img
                                                            src="{{ asset('user/assets/img/user/user6.jpg')}}" alt=""
                                                            class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="instructor-profile.html">Stella Johnson</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#rate" class="active-heart"><i
                                                            class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{ url('/course-details')}}">C# Developers Double Your
                                                    Coding Speed with ...</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating-img d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{ url('/checkout')}}" class="btn btn-primary">BUY NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="course-box course-design d-flex ">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="{{ url('/course-details')}}">
                                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/course-16.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3>$200 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-group d-flex">
                                                <div class="course-group-img d-flex">
                                                    <a href="instructor-profile.html"><img
                                                            src="{{ asset('user/assets/img/user/user.jpg')}}" alt="" class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="instructor-profile.html">John Michael</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{ url('/course-details')}}">Learn JavaScript and Express
                                                    to become a...</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating-img d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{ url('/checkout')}}" class="btn btn-primary">BUY NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="course-box course-design d-flex ">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="{{ url('/course-details')}}">
                                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/course/course-13.jpg')}}">
                                            </a>
                                            <div class="price">
                                                <h3>$300 <span>$99.00</span></h3>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-group d-flex">
                                                <div class="course-group-img d-flex">
                                                    <a href="instructor-profile.html"><img
                                                            src="{{ asset('user/assets/img/user/user4.jpg')}}" alt=""
                                                            class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="instructor-profile.html">Jesse Stevens</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{ url('/course-details')}}">Learn and Understand
                                                    AngularJS to become a ...</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating-img d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{ url('/checkout')}}" class="btn btn-primary">BUY NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 d-flex">
                                <div class="course-box course-design d-flex ">
                                    <div class="product">
                                        <div class="product-img">
                                            <a href="{{ url('/course-details')}}">
                                                <img class="img-fluid" alt="" src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                            </a>
                                            <div class="price">
                                                <h3 class="free-color">FREE</h3>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="course-group d-flex">
                                                <div class="course-group-img d-flex">
                                                    <a href="instructor-profile.html"><img
                                                            src="{{ asset('user/assets/img/user/user6.jpg')}}" alt=""
                                                            class="img-fluid"></a>
                                                    <div class="course-name">
                                                        <h4><a href="instructor-profile.html">Monroe Parker</a></h4>
                                                        <p>Instructor</p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="course-share d-flex align-items-center justify-content-center">
                                                    <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="{{ url('/course-details')}}">Responsive Web Design
                                                    Essentials HTML5 CSS3 ...</a></h3>
                                            <div class="course-info d-flex align-items-center">
                                                <div class="rating-img d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                    <p>12+ Lesson</p>
                                                </div>
                                                <div class="course-view d-flex align-items-center">
                                                    <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                    <p>9hr 30min</p>
                                                </div>
                                            </div>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                            </div>
                                            <div class="all-btn all-category d-flex align-items-center">
                                                <a href="{{ url('/checkout')}}" class="btn btn-primary">BUY NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pagination lms-page">
                                    <li class="page-item prev">
                                        <a class="page-link" href="javascript:void(0)" tabindex="-1"><i
                                                class="fas fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item first-page active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">5</a>
                                    </li>
                                    <li class="page-item next">
                                        <a class="page-link" href="javascript:void(0)"><i
                                                class="fas fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 theiaStickySidebar">
                        <!-- <div class="filter-clear">
                            <div class="clear-filter d-flex align-items-center">
                                <h4><i class="feather-filter"></i>Filters</h4>
                                <div class="clear-text">
                                    <p>CLEAR</p>
                                </div>
                            </div>

                            <div class="card search-filter">
                                <div class="card-body">
                                    <div class="filter-widget mb-0">
                                        <div class="categories-head d-flex align-items-center">
                                            <h4>Course categories</h4>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Backend (3)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> CSS (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Frontend (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist" checked>
                                                <span class="checkmark"></span> General (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist" checked>
                                                <span class="checkmark"></span> IT & Software (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Photography (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Programming Language (3)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check mb-0">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Technology (2)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card search-filter">
                                <div class="card-body">
                                    <div class="filter-widget mb-0">
                                        <div class="categories-head d-flex align-items-center">
                                            <h4>Instructors</h4>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Keny White (10)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> Hinata Hyuga (5)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_specialist">
                                                <span class="checkmark"></span> John Doe (3)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check mb-0">
                                                <input type="checkbox" name="select_specialist" checked>
                                                <span class="checkmark"></span> Nicole Brown
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card search-filter ">
                                <div class="card-body">
                                    <div class="filter-widget mb-0">
                                        <div class="categories-head d-flex align-items-center">
                                            <h4>Price</h4>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div>
                                            <label class="custom_check custom_one">
                                                <input type="radio" name="select_specialist">
                                                <span class="checkmark"></span> All (18)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check custom_one">
                                                <input type="radio" name="select_specialist">
                                                <span class="checkmark"></span> Free (3)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check custom_one mb-0">
                                                <input type="radio" name="select_specialist" checked>
                                                <span class="checkmark"></span> Paid (15)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card post-widget ">
                                <div class="card-body">
                                    <div class="latest-head">
                                        <h4 class="card-title">Latest Courses</h4>
                                    </div>
                                    <ul class="latest-posts">
                                        <li>
                                            <div class="post-thumb">
                                                <a href="course-details.html">
                                                    <img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info free-color">
                                                <h4>
                                                    <a href="course-details.html">Introduction LearnPress – LMS
                                                        plugin</a>
                                                </h4>
                                                <p>FREE</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="course-details.html">
                                                    <img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <h4>
                                                    <a href="course-details.html">Become a PHP Master and Make Money</a>
                                                </h4>
                                                <p>$200</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="course-details.html">
                                                    <img class="img-fluid" src="assets/img/blog/blog-03.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info free-color">
                                                <h4>
                                                    <a href="course-details.html">Learning jQuery Mobile for
                                                        Beginners</a>
                                                </h4>
                                                <p>FREE</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="course-details.html">
                                                    <img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <h4>
                                                    <a href="course-details.html">Improve Your CSS Workflow with
                                                        SASS</a>
                                                </h4>
                                                <p>$200</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb ">
                                                <a href="course-details.html">
                                                    <img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info free-color">
                                                <h4>
                                                    <a href="course-details.html">HTML5/CSS3 Essentials in 4-Hours</a>
                                                </h4>
                                                <p>FREE</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div> -->
                    </div>
                </div>
            </div>
        </section>


@endsection
        
@section('javascript')
       
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('user/assets/plugins/select2/js/select2.min.js')}}"></script>

    <script src="{{ asset('user/assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
    <script src="{{ asset('user/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

    <script src="{{ asset('user/assets/js/script.js')}}"></script>

@endsection

