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
                                <h4>Your cart ({{ count($car) }} items)</h4>
                            </div>
                            @if (Session::get('fail'))
                                <div class="alert alert_danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @elseif(Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <div class="cart-group">
                                <div class="row">
                                    @php
                                        // dd($car);
                                    @endphp
                                    @if($car)
                                    @foreach ($car as $cart)
                                        @php
                                            $pdt = DB::table('products')
                                                ->where('id', '=', $cart->product_id)
                                                ->first();
                                            // dd($pdt);
                                        @endphp
                                        <div class="col-lg-12 col-md-12 d-flex">
                                            <div class="course-box course-design list-course d-flex">
                                                <div class="product">
                                                    <div class="product-img">
                                                        <a href="course-details.html">
                                                        <img class="img-fluid" alt=""
                                                            src="{{ asset('product_image/' . $pdt->product_image )}}">
                                                    </a> 
                                                        <div class="price">
                                                            <h3 class="free-color">{{ $cart->product_price}}</h3>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="product-content">
                                                        <div class="head-course-title">
                                                            <h3 class="title"><a
                                                                    href="course-details.html">{{ $pdt->product_name }}</a>
                                                            </h3>
                                                        </div>
                                                        <div
                                                            class="course-info d-flex align-items-center border-bottom-0 pb-0">
                                                            <div class="rating-img d-flex align-items-center">
                                                                <img src="assets/img/icon/icon-01.svg" alt="">
                                                                <p>{{ $pdt->product_desc1 }}</p>
                                                            </div>
                                                            <div class="course-view d-flex align-items-center">
                                                                <img src="assets/img/icon/icon-02.svg" alt="">
                                                                <p>{{ $pdt->product_desc2 }}</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="course-info d-flex align-items-center border-bottom-0 pb-0">

                                                            <div class="rating-img d-flex align-items-center">
                                                                <p>Quantity :</p>
                                                                <p>{{ $cart->quantity }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span class="d-inline-block average-rating"><span>4.0</span>
                                                                (15)
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="cart-remove">
                                                        <a href="{{ url('removeCart', $cart->product_id) }}"
                                                            class="btn btn-primary">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @else<div>
                                        <p>The product doesn't exist</p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="cart-total">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="cart-subtotal">
                                            @php
                                                $totalPrice = 0;
                                                // dd($car);
                                            @endphp

                                            @foreach ($car as $cart)
                                                @php
                                                    
                                                    $price = $cart->product_price * $cart->quantity;
                                                    $totalPrice += $price;
                                                @endphp
                                            @endforeach
                                            @php
                                                // $totalPrice = $price * $cart->quantity;
                                                // dd($totalPrice);
                                            @endphp
                                            <p>Subtotal <span>{{ $totalPrice }}/-</span></p>
                                        </div>
                                    </div>

                                    @php
                                        $groupIds = [];
                                        
                                        foreach ($car as $item) {
                                            $groupIds[] = $item->grpid;
                                        }
                                        
                                        $uniqueGroupIds = array_unique($groupIds);
                                        
                                        $commonGrpid = reset($uniqueGroupIds);
                                        
                                        // dd($commonGrpid);
                                    @endphp

                                    @if (count($car) == 0)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="check-outs">
                                                <a href="#" class="btn btn-primary">Checkout</a>
                                            </div>
                                        </div>
                                    @elseif(count($car) > 0)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="check-outs">
                                                @php
                                                    $data['id']=$id;
                                                    $data['grpid']=$commonGrpid;
                                                @endphp
                                                <a href={{ url('checkout', [$id, $commonGrpid]) }} class="btn btn-primary">Checkout</a>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-6 col-md-6">
                                        <div class="condinue-shop">
                                            <a href="#" class="btn btn-primary">Continue Shopping</a>
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
    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/script.js') }}"></script>
@endsection
