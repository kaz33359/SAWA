@extends('user/layout/layout')
@section('css')

  <!-- Global links -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
  <!-- Global links end -->
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
                                
                                    <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                                    <!-- <li class="breadcrumb-item">Pages</li> -->
                                    <li class="breadcrumb-item">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <h1 class="mb-0">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <div class="support-wrap">
                            <h5>Submit a Request</h5>
                             <form action="{{ route('user.enquiry') }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your first Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control"  name="email"placeholder="Enter your email address" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject"placeholder="Enter your Subject" required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" placeholder="Write down here" rows="4" required></textarea>
                                </div>
                                <button class="btn btn-submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <div class="support-wrap">
                        <h2 class="footer-title">Address</h2>
                        <div class="news-letter">
                            <!-- <form>
                                <input type="text" class="form-control" placeholder="Enter your email address" name="email">
                            </form> -->
                        </div>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <img src="{{ asset('user/assets/img/icon/icon-20.svg') }}" alt="" class="img-fluid">
                                <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                            </div>
                            <p>
                                <img src="{{ asset('user/assets/img/icon/icon-19.svg') }}" alt="" class="img-fluid">
                                <a href="https://dreamslms.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="f4908691959987989987b4918c9599849891da979b99">[email&#160;protected]</a>
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


         @endsection
        
@section('javascript')
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('user/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/script.js') }}"></script>
@endsection