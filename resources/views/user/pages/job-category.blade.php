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
<li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
<!-- <li class="breadcrumb-item">Pages</li> -->
<li class="breadcrumb-item">Categories</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>


<div class="page-content">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="title-sec">
<h2>Browse Job By Categories</h2>
<p>Browse Job By Categories</p>
</div>

<div class="category-tab">
<ul class="nav nav-justified">
<li class="nav-item"><a href="#graphics" class="nav-link active" data-bs-toggle="tab">Graphics & Design</a></li>
<li class="nav-item"><a href="#programming" class="nav-link" data-bs-toggle="tab">Programming & Tech</a></li>
<li class="nav-item"><a href="#marketing" class="nav-link" data-bs-toggle="tab">Digital Marketing</a></li>
<li class="nav-item"><a href="#video" class="nav-link" data-bs-toggle="tab">Video & Animation</a></li>
</ul>
</div>


<div class="tab-content">
<div class="tab-pane fade show active" id="graphics">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-01.jpg') }}" alt="">
</div>
<h5>Logo Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-02.jpg') }}" alt="">
</div>
<h5>Business Cards & Stationery</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-03.jpg') }}" alt="">
</div>
<h5>Brochure Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-04.jpg') }}" alt="">
</div>
<h5>Social Media Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-05.jpg') }}" alt="">
</div>
<h5>Graphics for Streamers</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-06.jpg') }}" alt="">
</div>
<h5>Photoshop Editing</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-07.jpg') }}" alt="">
</div>
<h5>Brand Style Guides</h5>
</div>
<span class="cat-count">25</span>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-08.jpg') }}" alt="">
</div>
<h5>Illustration</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-09.jpg') }}" alt="">
</div>
<h5>Flyer Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-10.jpg') }}" alt="">
</div>
<h5>Icon Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-11.jpg') }}" alt="">
</div>
<h5>Packaging & Label Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-12.jpg') }}" alt="">
</div>
<h5>Presentation Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-13.jpg') }}" alt="">
</div>
<h5>Game Art</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-14.jpg') }}" alt="">
</div>
<h5>Pattern Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-15.jpg') }}" alt="">
</div>
<h5>Book Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-16.jpg') }}" alt="">
</div>
<h5>Invitation Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-17.jpg') }}" alt="">
</div>
<h5>UX Design</h5>
 </div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-06.jpg') }}" alt="">
</div>
<h5>Infographic Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="programming">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-03.jpg') }}" alt="">
</div>
<h5>Brochure Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-04.jpg') }}" alt="">
</div>
<h5>Social Media Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-05.jpg') }}" alt="">
</div>
<h5>Graphics for Streamers</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-06.jpg') }}" alt="">
</div>
<h5>Photoshop Editing</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-09.jpg') }}" alt="">
</div>
<h5>Flyer Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-10.jpg') }}" alt="">
</div>
<h5>Icon Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-11.jpg') }}" alt="">
</div>
<h5>Packaging & Label Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-12.jpg') }}" alt="">
</div>
<h5>Presentation Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-15.jpg') }}" alt="">
</div>
<h5>Book Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-16.jpg') }}" alt="">
</div>
<h5>Invitation Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-17.jpg') }}" alt="">
</div>
<h5>UX Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-06.jpg') }}" alt="">
</div>
<h5>Infographic Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="marketing">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-04.jpg') }}" alt="">
</div>
<h5>Social Media Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-05.jpg') }}" alt="">
</div>
<h5>Graphics for Streamers</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-06.jpg') }}" alt="">
</div>
<h5>Photoshop Editing</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-10.jpg') }}" alt="">
</div>
<h5>Icon Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-11.jpg') }}" alt="">
</div>
<h5>Packaging & Label Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>

<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-12.jpg') }}" alt="">
</div>
<h5>Presentation Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-16.jpg') }}" alt="">
</div>
<h5>Invitation Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-17.jpg') }}" alt="">
</div>
<h5>UX Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-06.jpg') }}" alt="">
</div>
<h5>Infographic Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="animation">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-05.jpg') }}" alt="">
</div>
<h5>Graphics for Streamers</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-04.jpg') }}" alt="">
</div>
<h5>Social Media Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-06.jpg') }}" alt="">
</div>
<h5>Photoshop Editing</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-11.jpg') }}" alt="">
</div>
<h5>Packaging & Label Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-10.jpg') }}" alt="">
</div>
<h5>Icon Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-12.jpg') }}" alt="">
</div>
<h5>Presentation Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-17.jpg') }}" alt="">
</div>
<h5>UX Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-16.jpg') }}" alt="">
</div>
<h5>Invitation Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
<div class="category-box">
<div class="category-title">
<div class="category-img">
<img src="{{ asset('user/assets/img/category/category-06.jpg') }}" alt="">
</div>
<h5>Infographic Design</h5>
</div>
<div class="cat-count">
<span>25</span>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>


 @endsection
        
@section('javascript')


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('user/assets/js/script.js') }}"></script>

 @endsection