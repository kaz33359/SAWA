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


<div class="page-content">
<div class="container">
<div class="row">

<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
<div class="settings-widget dash-profile">
<div class="settings-menu p-0">
<div class="profile-bg">
<h5>Beginner</h5>
<img src="assets/img/instructor-profile-bg.jpg" alt="">
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
<li class="nav-item active">
<a href="instructor-orders.html" class="nav-link">
<i class="feather-shopping-bag"></i> Orders
</a>
</li>
<!-- <li class="nav-item">
<a href="instructor-student-grid.html" class="nav-link">
<i class="feather-users"></i> Students
</a>
</li>
<li class="nav-item">
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
<li class="nav-item">
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


<div class="col-xl-9 col-lg-8 col-md-12">
<div class="row">
<div class="col-md-12">
<div class="settings-widget">
<div class="settings-inner-blk p-0">
<div class="sell-course-head comman-space">
<h3>Orders</h3>
<p>Order Dashboard is a quick overview of all current orders.</p>
</div>
<div class="comman-space pb-0">
<div class="settings-tickets-blk course-instruct-blk table-responsive">

<table class="table table-nowrap mb-0">
<thead>
<tr>
<th>COURSES</th>
<th>SALES</th>
<th>INVOICE</th>
<th>DATE</th>
<th>METHOD</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">Information About UI/UX Design Degree</a></p>
</td>
<td>34</td>
<td>#10021</td>
<td>10-05-20</td>
<td>Mastercard</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">Wordpress for Beginners - Master Wordpress Quickly</a></p>
</td>
<td>30</td>
<td>#12421</td>
<td>10-05-20</td>
<td>Visa</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">Sketch from A to Z (2022): Become an app designer</a></p>
</td>
<td>24</td>
<td>#11021</td>
<td>10-05-20</td>
<td>Mastercard</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">Learn Angular Fundamentals From beginning to advance lavel</a></p>
</td>
<td>34</td>
<td>#10021</td>
<td>10-05-20</td>
<td>Mastercard</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">Build Responsive Real World Websites with HTML5 and CSS3</a></p>
</td>
<td>34</td>
<td>#10021</td>
<td>10-05-20</td>
<td>Mastercard</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">C# Developers Double Your Coding Speed with Visual Studio</a></p>
</td>
<td>34</td>
<td>#10021</td>
<td>10-05-20</td>
<td>Mastercard</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">Learn JavaScript and Express to become a professional JavaScript</a></p>
</td>
<td>34</td>
<td>#10021</td>
<td>10-05-20</td>
<td>Mastercard</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">Learn and Understand AngularJS to become a professional developer</a></p>
</td>
<td>34</td>
<td>#10021</td>
<td>10-05-20</td>
<td>Mastercard</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">Responsive Web Design Essentials HTML5 CSS3 and Bootstrap</a></p>
</td>
<td>34</td>
<td>#10021</td>
<td>10-05-20</td>
<td>Mastercard</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
<tr>
<td class="instruct-orders-info">
<p><a href="{{ url('/course-details')}}">The Complete App Design Course - UX, UI and Design Thinking</a></p>
</td>
<td>34</td>
<td>#10021</td>
<td>10-05-20</td>
<td>Mastercard</td>
<td><a href="javascript:;"><i class="feather-more-vertical"></i></a></td>
</tr>
</tbody>
</table>

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

<script src="{{ asset('user/assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('user/assets/plugins/feather/feather.min.js')}}"></script>

<script src="{{ asset('user/assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
<script src="{{ asset('user/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

<script src="{{ asset('user/assets/js/script.js')}}"></script>
@endsection