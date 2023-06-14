@extends('user/layout/layout')
@section('css')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/favicon.svg') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
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
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Products</li>
                                {{-- <li class="breadcrumb-item" aria-current="page">All Courses</li>
                                    <li class="breadcrumb-item" aria-current="page">The Complete Web Developer Course
                                        2.0</li> --}}
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="instructor-wrap border-bottom-0 m-0">
                            <div class="about-instructor align-items-center">
                                <div class="abt-instructor-img">
                                    <a href="instructor-profile.html"><img src="{{ asset('user/assets/img/user/user1.jpg')}}" alt="img"
                                            class="img-fluid"></a>
                                </div>
                                <div class="instructor-detail me-3">
                                    <h5><a href="instructor-profile.html">Nicole Brown</a></h5>
                                    <p>UX/UI Designer</p>
                                </div>
                                <div class="rating mb-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.5</span> (15)</span>
                                </div>
                            </div>
                            <span class="web-badge mb-3">WEB DEVELPMENT</span>
                        </div>
                        <h2>The Complete Web Developer Course 2.0</h2>
                        <p>Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript,
                            PHP, Python, MySQL & more!</p>
                        <div class="course-info d-flex align-items-center border-bottom-0 m-0 p-0">
                            <div class="cou-info">
                                <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                <p>12+ Lesson</p>
                            </div>
                            <div class="cou-info">
                                <img src="{{ asset('user/assets/img/icon/timer-icon.svg')}}" alt="">
                                <p>9hr 30min</p>
                            </div>
                            <div class="cou-info">
                                <img src="{{ asset('user/assets/img/icon/people.svg')}}" alt="">
                                <p>32 students enrolled</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


    <section class="page-content course-sec" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-8">
                    {{-- <style>
                        .center-container{
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            height: 100vh;
                        }
                    </style> --}}
                    <div class="center-container">
                    <div class="card overview-sec">
                        <div class="card-body" >
                            <h5 class="subs-title">Product Details</h5>

                            <div class="row">
                                <form action="{{ url('/addtocart', $product->id) }}" class="cart-form" method="POST">
                                    @csrf
                                    @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @elseif (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                    <h3>{{ $product->product_name }}</h3>
                                    <p><img src="{{ asset('product_image/' . $product->product_image) }}"></p>
                                    <p style="font-weight: bold">Description : {{ $product->product_desc1 }}</p>

                                    <div class="row gx-2">
                                        <div class="col-md-6">
                                            <a href="course-wishlist.html" class="btn btn-wish w-100"><i
                                                    class="feather-heart"></i> Add to Wishlist</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="javascript:;" class="btn btn-wish w-100"><i
                                                    class="feather-share-2"></i> Share</a>
                                        </div>
                                    </div>

                                    <label for="quantity">Quantity:</label>
                                    <select id="quantity" name="quantity" class="quantity-select">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button type="submit" class="btn btn-enroll w-100">Add to cart</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


                    {{-- <div class="card content-sec">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="subs-title">Course Content</h5>
                                    </div>
                                    <div class="col-sm-6 text-sm-end">
                                        <h6>92 Lectures 10:56:11</h6>
                                    </div>
                                </div>
                                <div class="course-card">
                                    <h6 class="cou-title">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseOne"
                                            aria-expanded="false">In which areas do you operate?</a>
                                    </h6>
                                    <div id="collapseOne" class="card-collapse collapse" style="">
                                        <ul>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.1
                                                    Introduction to the User Experience Course</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.2
                                                    Exercise: Your first design challenge</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.3
                                                    How to solve the previous exercise</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.3
                                                    How to solve the previous exercise</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.5
                                                    How to use text layers effectively</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-card">
                                    <h6 class="cou-title">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#course2"
                                            aria-expanded="false">The Brief</a>
                                    </h6>
                                    <div id="course2" class="card-collapse collapse" style="">
                                        <ul>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.1
                                                    Introduction to the User Experience Course</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.2
                                                    Exercise: Your first design challenge</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.3
                                                    How to solve the previous exercise</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.3
                                                    How to solve the previous exercise</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.5
                                                    How to use text layers effectively</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-card">
                                    <h6 class="cou-title">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#course3"
                                            aria-expanded="false">Wireframing Low Fidelity</a>
                                    </h6>
                                    <div id="course3" class="card-collapse collapse" style="">
                                        <ul>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.1
                                                    Introduction to the User Experience Course</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.2
                                                    Exercise: Your first design challenge</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.3
                                                    How to solve the previous exercise</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.3
                                                    How to solve the previous exercise</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture1.5
                                                    How to use text layers effectively</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-card">
                                    <h6 class="cou-title mb-0">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#coursefour"
                                            aria-expanded="false">Type, Color & Icon Introduction</a>
                                    </h6>
                                    <div id="coursefour" class="card-collapse collapse" style="">
                                        <ul>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture4.1
                                                    Introduction to the User Experience Course</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture4.2
                                                    Exercise: Your first design challenge</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture4.3
                                                    How to solve the previous exercise</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture4.4
                                                    How to solve the previous exercise</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                            <li>
                                                <p><img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="" class="me-2">Lecture4.5
                                                    How to use text layers effectively</p>
                                                <div>
                                                    <a href="javascript:;">Preview</a>
                                                    <span>02:53</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                    {{-- <div class="card instructor-sec">
                            <div class="card-body">
                                <h5 class="subs-title">About the instructor</h5>
                                <div class="instructor-wrap">
                                    <div class="about-instructor">
                                        <div class="abt-instructor-img">
                                            <a href="instructor-profile.html"><img src="{{ asset('user/assets/img/user/user1.jpg')}}"
                                                    alt="img" class="img-fluid"></a>
                                        </div>
                                        <div class="instructor-detail">
                                            <h5><a href="instructor-profile.html">Nicole Brown</a></h5>
                                            <p>UX/UI Designer</p>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.5 Instructor Rating</span>
                                    </div>
                                </div>
                                <div class="course-info d-flex align-items-center">
                                    <div class="cou-info">
                                        <img src="{{ asset('user/assets/img/icon/play.svg')}}" alt="">
                                        <p>5 Courses</p>
                                    </div>
                                    <div class="cou-info">
                                        <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                        <p>12+ Lesson</p>
                                    </div>
                                    <div class="cou-info">
                                        <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                        <p>9hr 30min</p>
                                    </div>
                                    <div class="cou-info">
                                        <img src="{{ asset('user/assets/img/icon/people.svg')}}" alt="">
                                        <p>270,866 students enrolled</p>
                                    </div>
                                </div>
                                <p>UI/UX Designer, with 7+ Years Experience. Guarantee of High Quality Work.</p>
                                <p>Skills: Web Design, UI Design, UX/UI Design, Mobile Design, User Interface Design,
                                    Sketch, Photoshop, GUI, Html, Css, Grid Systems, Typography, Minimal, Template,
                                    English, Bootstrap, Responsive Web Design, Pixel Perfect, Graphic Design, Corporate,
                                    Creative, Flat, Luxury and much more.</p>
                                <p>Available for:</p>
                                <ul>
                                    <li>1. Full Time Office Work</li>
                                    <li>2. Remote Work</li>
                                    <li>3. Freelance</li>
                                    <li>4. Contract</li>
                                    <li>5. Worldwide</li>
                                </ul>
                            </div>
                        </div> --}}


                    <div class="card review-sec">
                        <div class="card-body">
                            <h5 class="subs-title">Reviews</h5>
                            <div class="instructor-wrap">
                                <div class="about-instructor">
                                    <div class="abt-instructor-img">
                                        <a href="instructor-profile.html"><img
                                                src="{{ asset('user/assets/img/user/user1.jpg') }}" alt="img"
                                                class="img-fluid"></a>
                                    </div>
                                    <div class="instructor-detail">
                                        <h5><a href="instructor-profile.html">Nicole Brown</a></h5>
                                        <p>UX/UI Designer</p>
                                    </div>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">4.5 Instructor Rating</span>
                                </div>
                            </div>
                            <p class="rev-info">“ This is the second Photoshop course I have completed with
                                Cristian. Worth every penny and recommend it highly. To get the most out of this
                                course, its best to to take the Beginner to Advanced course first. The sound and
                                video quality is of a good standard. Thank you Cristian. “</p>
                            <a href="javascript:;" class="btn btn-reply"><i class="feather-corner-up-left"></i>
                                Reply</a>
                        </div>
                    </div>


                    <div class="card comment-sec">
                        <div class="card-body">
                            <h5 class="subs-title">Post A comment</h5>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" class="form-control" placeholder="Your Comments"></textarea>
                                </div>
                                <div class="submit-section">
                                    <button class="btn submit-btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="sidebar-sec">

                        {{-- <div class="video-sec vid-bg">
                            <div class="card">
                                <div class="card-body">
                                    <a href="https://www.youtube.com/embed/1trvO6dqQUI" class="video-thumbnail"
                                        data-fancybox="">
                                        <div class="play-icon">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                        <img class="" src="{{ asset('user/assets/img/video.jpg') }}" alt="">
                                    </a>
                                    <div class="video-details">
                                        <div class="course-fee">
                                            <h2>FREE</h2>
                                            <p><span>$99.00</span> 50% off</p>
                                        </div>
                                        <div class="row gx-2">
                                            <div class="col-md-6">
                                                <a href="course-wishlist.html" class="btn btn-wish w-100"><i
                                                        class="feather-heart"></i> Add to Wishlist</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="javascript:;" class="btn btn-wish w-100"><i
                                                        class="feather-share-2"></i> Share</a>
                                            </div>
                                        </div>
                                        <form action="{{ url('/addcart', $product->id) }}" class="cart-form"
                                            method="POST">
                                            @csrf
                                            <label for="quantity">Quantity:</label>
                                            <select id="quantity" name="quantity" class="quantity-select">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <button type="submit" class="btn btn-enroll w-100">Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/script.js') }}"></script>
@endsection
