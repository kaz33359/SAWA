@extends('user/layout/layout')
@section('css')

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/favicon.svg')}}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/feather.css')}}">

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
                                    <!-- <li class="breadcrumb-item" aria-current="page">Pages</li> -->
                                    <li class="breadcrumb-item" aria-current="page">Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="course-content cart-widget">
            <div class="container">
                <div class="student-widget">
                    <div class="student-widget-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-head">
                                    <h4>Your cart (03 items)</h4>
                                </div>
                                <div class="cart-group">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 d-flex">
                                            <div class="course-box course-design list-course d-flex">
                                                <div class="product">
                                                    <div class="product-img">
                                                        <a href="{{ url('/course-details')}}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ asset('user/assets/img/course/course-10.jpg')}}">
                                                        </a>
                                                        <div class="price">
                                                            <h3 class="free-color">FREE</h3>
                                                        </div>
                                                    </div>
                                                  @php
                                                       dd($car);
                                                       @endphp
                                                     @foreach ($car as $single_car) 
                                                       
                                                    <div class="product-content">
                                                        <div class="head-course-title">
                                                            <h3 class="title">{{ $single_car->product_price }}</a></h3>
                                                        </div>
                                                        {{-- <div
                                                            class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                            <div class="rating-img d-flex align-items-center">
                                                                <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                                <p>12+ Lesson</p>
                                                            </div>
                                                            <div class="course-view d-flex align-items-center">
                                                                <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                                <p>9hr 30min</p>
                                                            </div>
                                                        </div> --}}
                                                        {{-- <div class="rating">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="d-inline-block average-rating"><span>4.0</span>
                                                                (15)</span>
                                                        </div> --}}
                                                    </div>
                                                    {{-- <div class="cart-remove">
                                                        <a href="javascript:;" class="btn btn-primary">Remove</a>
                                                    </div> --}}
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-12 col-md-12 d-flex">
                                            <div class="course-box course-design list-course d-flex ">
                                                <div class="product">
                                                    <div class="product-img">
                                                        <a href="{{ url('/course-details')}}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ asset('user/assets/img/course/course-11.jpg')}}">
                                                        </a>
                                                        <div class="price">
                                                            <h3>$300 <span>$99.00</span></h3>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="head-course-title">
                                                            <h3 class="title"><a href="{{ url('/course-details')}}">Wordpress
                                                                    for Beginners - Master Wordpress Quickly</a></h3>
                                                        </div>
                                                        <div
                                                            class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                            <div class="rating-img d-flex align-items-center">
                                                                <img src="{{ asset('user/assets/img/icon/icon-01.svg')}}" alt="">
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                            <div class="course-view d-flex align-items-center">
                                                                <img src="{{ asset('user/assets/img/icon/icon-02.svg')}}" alt="">
                                                                <p>7hr 20min</p>
                                                            </div>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="d-inline-block average-rating"><span>4.2</span>
                                                                (15)</span>
                                                        </div>
                                                    </div>
                                                    <div class="cart-remove">
                                                        <a href="javascript:;" class="btn btn-primary">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 d-flex">
                                            <div class="course-box course-design list-course d-flex mb-0">
                                                <div class="product">
                                                    <div class="product-img">
                                                        <a href="{{ url('/course-details')}}">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ asset('user/assets/img/course/course-12.jpg')}}">
                                                        </a>
                                                        <div class="price">
                                                            <h3>$300 <span>$99.00</span></h3>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="head-course-title">
                                                            <h3 class="title"><a href="{{ url('/course-details')}}">Sketch from
                                                                    A to Z (2022): Become an app designer</a></h3>
                                                        </div>
                                                        <div
                                                            class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                            <div class="rating-img d-flex align-items-center">
                                                                <img src="assets/img/icon/icon-01.svg" alt="">
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
                                                            <span class="d-inline-block average-rating"><span>4.0</span>
                                                                (15)</span>
                                                        </div>
                                                    </div>
                                                    <div class="cart-remove">
                                                        <a href="javascript:;" class="btn btn-primary">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="cart-total">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="cart-subtotal">
                                                <p>Subtotal <span>$600.00</span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="check-outs">
                                                <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="condinue-shop">
                                                <a href="course-list.html" class="btn btn-primary">Continue Shopping</a>
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
@endsection

       
@section('javascript')
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('user/assets/js/script.js')}}"></script>
@endsection