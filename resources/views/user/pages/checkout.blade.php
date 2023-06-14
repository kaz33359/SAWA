@extends('user/layout/layout')
@section('css')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/favicon.svg') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/plugins/select2/css/select2.min.css') }}">

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
                                <!-- <li class="breadcrumb-item" aria-current="page">Pages</li> -->
                                <li class="breadcrumb-item" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            @php
                $data = DB::table('users')
                    ->where('id', '=', $id)
                    ->first();
                // dd($data);
            @endphp
            <form class="form checkout-form" id="frmPlaceOrder" action="/payment" method="POST">
                @if (session('error'))
                    <div class="alert alert-danger">{!! session('error') !!}</div>
                @elseif(session('success'))
                    <div class="alert alert-success">{!! session('success') !!}</div>
                @endif
                @csrf
                <div class="row mb-9">
                    <div class="col-lg-7 pr-lg-4 mb-4">
                        <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                            Billing Details
                        </h3>
                        <div class="row gutter-sm">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Full Name *</label>
                                    <input type="text" class="form-control form-control-md" placeholder=" Name*"
                                        value="{{ $data->name }}" name="name" required>
                                </div>
                            </div>

                        </div>
                        <div class="form-group mb-7">
                            <label>Email address *</label>
                            <input type="email" class="form-control form-control-md" placeholder="Email Address*"
                                value="{{ $data->email }}" name="email" required>
                        </div>
                        <div class="form-group mb-7">
                            <label>Phone *</label>
                            <input type="tel" placeholder="Phone*" value="{{ $data->mobile }}" name="mobile"
                                class="form-control form-control-md" required>
                        </div>


                        <div class="form-group">
                            <label>Address *</label>
                            <textarea class="form-control form-control-md mb-2" name="address" placeholder="Enter Address*" required>{{ $data->address }}</textarea>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State *</label>
                                <input type="text" class="form-control form-control-md" placeholder="State*"
                                    value="{{ $data->state }}" name="state" required>
                            </div>
                            <div class="form-group">
                                <label>Town / City *</label>
                                <input type="text" class="form-control form-control-md" placeholder="City / Town*"
                                    value="{{ $data->city }}" name="city" required>
                            </div>
                        </div>
                        <div class="row gutter-sm">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>ZIP *</label>
                                    <input type="text" class="form-control form-control-md" placeholder="Postcode / ZIP*"
                                        value="{{ $data->zip }}" name="zip" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                        @php
                            $cartData = DB::table('carts')
                                ->where('user_id', '=', $id)
                                ->get();
                            // dd($grpid);
                        @endphp
                        <div class="order-summary-wrapper sticky-sidebar">
                            <h3 class="title text-uppercase ls-10">Your Order</h3>
                            <div class="order-summary">
                                <table class="order-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">
                                                <b>Product</b>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalPrice = 0;
                                        @endphp
                                        @foreach ($cartData as $list)
                                            @php
                                                $productData = DB::table('products')
                                                    ->where('id', '=', $list->product_id)
                                                    ->first();
                                                $totalPrice = $totalPrice + $list->product_price * $list->quantity;
                                            @endphp
                                            <tr class="bb-no">
                                                <td class="product-name">
                                                    {{ $productData->product_name }}
                                                    <i class="fas fa-times"></i>
                                                    <span class="product-quantity">{{ $list->quantity }}</span>
                                                </td><br>
                                                <td class="product-total">INR {{ $list->product_price * $list->quantity }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr class="cart-subtotal bb-no">
                                            <td><b>Subtotal</b></td>
                                            <td><b>₹ {{ $totalPrice }}</b></td>
                                        </tr>
                                    </tbody>

                                </table>
                                <div class="payment-methods" id="payment_method">
                                    <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment</h4>
                                    <div class="accordion payment-accordion">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="payment" id="payment_cod" value="cod" required>
                                            <label class="form-check-label" for="payment_cod">Cash On Delivery</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="payment" id="payment_online" value="online" required>
                                            <label class="form-check-label" for="payment_online">Online Payment</label>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <input type="hidden" value="{{ $totalPrice }}" name="tprice">
                                <input type="hidden" value="{{ $id }}" name="userid">
                                <input type="hidden" value="{{ $grpid }}" name="grpidd">
                                {{-- <div class="payment-methods" id="payment_method">
                                    <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment</h4>
                                    <div class="accordion payment-accordion">

                                        <input type="hidden" id="cod" name="payment_type" value="COD">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="#delivery" class="expand">Cash on delivery</a>
                                            </div>
                                            <div id="delivery" class="card-body collapsed">
                                                <p class="mb-0">
                                                    Pay with cash upon delivery.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
                                <input type="hidden" name="reset" value="true">
                                <div class="form-group place-order pt-6">
                                    <button type="submit" class="btn btn-dark btn-block btn-rounded">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @csrf
            </form>
        </div>
        @php
            $type = Session::get('payment');
            // dd($type);
        @endphp
        @if (Session::has('amount') && $type == 'online')
            <div class="container text-center">
                <form action="/pay" method="POST">
                    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_KQCYPB8p0M7RLq"
                        data-amount="{{ Session::get('amount') }}" data-currency="INR" data-order_id="{{ Session::get('order_id') }}"
                        data-buttontext="Pay with Razorpay" data-name="INFODI" data-description="Test transaction"
                        data-theme.color="#F37254"></script>
                    <input type="hidden" custom="Hidden Element" name="hidden">
                </form>

            </div>
        @endif
    </div>
    {{-- <section class="course-content checkout-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="student-widget">
                            <div class="student-widget-group add-course-info">
                                <div class="cart-head">
                                    <h4>Billing Address</h4>
                                </div>
                                <div class="checkout-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">First Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your first Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Last Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your last Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Phone Number (Optional)</label>
                                                    <input type="text" class="form-control" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Address Line 1</label>
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Address Line 2 (Optional)</label>
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">State</label>
                                                    <select class="form-select select" name="sellist1">
                                                        <option>Select State</option>
                                                        <option>Brazil</option>
                                                        <option>French</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">Country</label>
                                                    <select class="form-select select" name="sellist1">
                                                        <option>Select country</option>
                                                        <option>India</option>
                                                        <option>America</option>
                                                        <option>London</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">Zip/Postal Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-10">
                                                <div class="form-group ship-check">
                                                    <input class="form-check-input" type="checkbox" name="remember">
                                                    Shipping address is the same as my billing address
                                                </div>
                                                <div class="form-group ship-check mb-0">
                                                    <input class="form-check-input" type="checkbox" name="remember">
                                                    Save this information for next time
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

<!-- 
                        <div class="student-widget pay-method">
                            <div class="student-widget-group add-course-info">
                                <div class="cart-head">
                                    <h4>Payment Method</h4>
                                </div>
                                <div class="checkout-form">
                                    <form action="https://dreamslms.dreamguystech.com/html/cart.html">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="wallet-method">
                                                    <label class="radio-inline custom_radio me-4">
                                                        <input type="radio" name="optradio" checked="">
                                                        <span class="checkmark"></span> Credit or Debit card
                                                    </label>
                                                    <label class="radio-inline custom_radio">
                                                        <input type="radio" name="optradio">
                                                        <span class="checkmark"></span> PayPal
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Card Number</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="XXXX XXXX XXXX XXXX">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">Month</label>
                                                    <select class="form-select select" name="sellist1">
                                                        <option>Month</option>
                                                        <option>Jun</option>
                                                        <option>Feb</option>
                                                        <option>March</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">Year</label>
                                                    <select class="form-select select" name="sellist1">
                                                        <option>Year</option>
                                                        <option>2022</option>
                                                        <option>2021</option>
                                                        <option>2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">CVV Code </label>
                                                    <input type="text" class="form-control" placeholder="XXXX">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Name on Card</label>
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-10">
                                                <div class="form-group ship-check">
                                                    <input class="form-check-input" type="checkbox" name="remember">
                                                    Remember this card
                                                </div>
                                            </div>
                                            <div class="payment-btn">
                                                <button class="btn btn-primary" type="submit">Make a Payment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <div class="col-lg-4 theiaStickySidebar">
                        <div class="student-widget select-plan-group">
                            <div class="student-widget-group">
                                <div class="plan-header">
                                    <h4>Selected Plan</h4>
                                </div>
                                <div class="basic-plan">
                                    <h3>Basic</h3>
                                    <p>For individuals who just need to start with the basic features</p>
                                    <p>per user, per month when billed monthly</p>
                                    <h2><span>$</span>10</h2>
                                </div>
                                <div class="benifits-feature">
                                    <h3>Benefits</h3>
                                    <ul>
                                        <li><i class="fas fa-circle"></i> Access to slack community</li>
                                        <li><i class="fas fa-circle"></i> Access to support team</li>
                                        <li><i class="fas fa-circle"></i> Algorithmic bidding</li>
                                        <li><i class="fas fa-circle"></i> Keyword and ASIN harvesting</li>
                                    </ul>
                                </div>
                                <div class="benifits-feature">
                                    <h3>Features</h3>
                                    <ul>
                                        <li><i class="fas fa-circle"></i> Search term isolation</li>
                                        <li><i class="fas fa-circle"></i> Total sales analytics</li>
                                        <li><i class="fas fa-circle"></i> Best seller rank</li>
                                        <li><i class="fas fa-circle"></i> Placement optimization</li>
                                    </ul>
                                </div>
                                <div class="plan-change">
                                    <a href="pricing-plan" class="btn btn-primary">Change the Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
@endsection

@section('javascript')
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('user/assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('user/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

    <script src="{{ asset('user/assets/js/script.js') }}"></script>
@endsection
