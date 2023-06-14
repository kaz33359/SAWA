@extends('user/layout/layout')
@section('css')

<link rel="shortcut icon" type="{{ asset('user/image/x-icon" href="assets/img/favicon.svg')}}">

<link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/all.min.css')}}">

<link rel="stylesheet" href="{{ asset('user/assets/css/feather.css')}}">

<link rel="stylesheet" href="{{ asset('user/assets/plugins/select2/css/select2.min.css')}}">

<link rel="stylesheet" href="{{ asset('user/assets/css/style.css')}}">
 @endsection
@section('container')
    <!-- breadcrumb area start -->


<div class="page-content">
<div class="container">
<div class="row">

<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
<div class="settings-widget dash-profile">
<div class="settings-menu p-0">
<div class="profile-bg">
<h5>Beginner</h5>
<img src="{{ asset('user/assets/img/instructor-profile-bg.jpg')}}" alt="">
<div class="profile-img">
<a href="{{ url('/user-profile')}}"><img src="{{ asset('user/assets/img/user/user15.jpg')}}" alt=""></a>
</div>
</div>
<div class="profile-group">
<div class="profile-name text-center">
<h4><a href="{{ url('/user-profile')}}">Jenny Wilson</a></h4>
<p>Instructor</p>
</div>
<div class="go-dashboard text-center">
<a href="add-course.html" class="btn btn-primary">Create New Course</a>
</div>
</div>
</div>
</div>
<div class="settings-widget account-settings">
<div class="settings-menu">
<h3>DASHBOARD</h3>
<ul>
<!-- <li class="nav-item ">
<a href="instructor-dashboard.html" class="nav-link">
<i class="feather-home"></i> My Dashboard
</a>
</li> -->
<li class="nav-item ">
<a href="instructor-course.html" class="nav-link">
<i class="feather-book"></i> My Courses
</a>
</li>
<!-- <li class="nav-item">
<a href="instructor-reviews.html" class="nav-link">
<i class="feather-star"></i> Reviews
</a>
</li>
<li class="nav-item">
<a href="instructor-earnings.html" class="nav-link">
<i class="feather-pie-chart"></i> Earnings
</a>
</li> -->
<li class="nav-item ">
<a href="{{ url('/user-order')}}" class="nav-link">
<i class="feather-shopping-bag"></i> Orders
</a>
</li>
<!-- <li class="nav-item ">
<a href="instructor-student-grid.html" class="nav-link">
<i class="feather-users"></i> Students
</a>
</li>
<li class="nav-item ">
<a href="instructor-payouts.html" class="nav-link">
<i class="feather-dollar-sign"></i> Payouts
</a>
</li>
<li class="nav-item">
<a href="instructor-tickets.html" class="nav-link">
<i class="feather-server"></i> Support Tickets
</a>
</li> -->
</ul>
<div class="instructor-title">
<h3>ACCOUNT SETTINGS</h3>
</div>
<ul>
<li class="nav-item active">
<a href="{{ url('/user-profile')}}" class="nav-link ">
<i class="feather-settings"></i> Edit Profile
</a>
</li>
<!-- <li class="nav-item">
<a href="instructor-security.html" class="nav-link">
<i class="feather-user"></i> Security
</a>
</li>
<li class="nav-item">
<a href="instructor-social-profiles.html" class="nav-link">
<i class="feather-refresh-cw"></i> Social Profiles
</a>
</li>
<li class="nav-item">
<a href="instructor-notification.html" class="nav-link">
<i class="feather-bell"></i> Notifications
</a>
</li>
<li class="nav-item">
<a href="instructor-profile-privacy.html" class="nav-link">
<i class="feather-lock"></i> Profile Privacy
</a>
</li>
<li class="nav-item">
<a href="instructor-delete-profile.html" class="nav-link">
<i class="feather-trash-2"></i> Delete Profile
</a>
</li>
<li class="nav-item">
<a href="instructor-linked-account.html" class="nav-link">
<i class="feather-user"></i> Linked Accounts
</a>
</li> -->
<li class="nav-item">
<a href="{{ url('/')}}" class="nav-link">
<i class="feather-power"></i> Sign Out
</a>
</li>
</ul>
</div>
</div>
</div>


<div class="col-xl-9 col-md-8">
<div class="settings-widget profile-details">
<div class="settings-menu p-0">
<div class="profile-heading">
<h3>Profile Details</h3>
<p>You have full control to manage your own account setting.</p>
</div>
<div class="course-group mb-0 d-flex">
<div class="course-group-img d-flex align-items-center">
<a href="{{ url('/user-profile')}}"><img src="{{ asset('user/assets/img/user/user11.jpg')}}" alt="" class="img-fluid"></a>
<div class="course-name">
<h4><a href="{{ url('/user-profile')}}">Your avatar</a></h4>
<p>PNG or JPG no bigger than 800px wide and tall.</p>
</div>
</div>
<div class="profile-share d-flex align-items-center justify-content-center">
<a href="javascript:;" class="btn btn-success">Update</a>
<a href="javascript:;" class="btn btn-danger">Delete</a>
</div>
</div>
<div class="checkout-form personal-address add-course-info">
<div class="personal-info-head">
<h4>Personal Details</h4>
<p>Edit your personal information and address.</p>
</div>
<form action="#">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label">First Name</label>
<input type="text" class="form-control" placeholder="Enter your first Name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label">Last Name</label>
<input type="text" class="form-control" placeholder="Enter your last Name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label">Phone</label>
<input type="text" class="form-control" placeholder="Enter your Phone">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label">Email</label>
<input type="text" class="form-control" placeholder="Enter your Email">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label">Birthday</label>
<input type="text" class="form-control" placeholder="Birth of Date">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-label">Country</label>
<select class="form-select select country-select" name="sellist1">
<option>Select country</option>
<option>India</option>
<option>America</option>
<option>London</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label">Address Line 1</label>
<input type="text" class="form-control" placeholder="Address">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label">Address Line 2 (Optional)</label>
<input type="text" class="form-control" placeholder="Address">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label">City</label>
<input type="text" class="form-control" placeholder="Enter your City">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label">ZipCode</label>
<input type="text" class="form-control" placeholder="Enter your Zipcode">
</div>
</div>
<div class="update-profile">
<button type="button" class="btn btn-primary">Update Profile</button>
</div>
</div>
</form>
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

<script src="{{ asset('user/assets/js/bootstrap.bundle.min.js')}}"')}}"')}}"></script>

<script src="{{ asset('user/assets/plugins/select2/js/select2.min.js')}}"')}}"')}}"></script>

<script src="{{ asset('user/assets/plugins/feather/feather.min.js')}}"')}}"')}}"></script>

<script src="{{ asset('user/assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"')}}"')}}"></script>
<script src="{{ asset('user/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"')}}"')}}"></script>

<script src="{{ asset('user/assets/js/script.js')}}"')}}"')}}"></script>
  @endsection