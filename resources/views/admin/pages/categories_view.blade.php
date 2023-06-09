<?php
$categories = array();

// rest of your code goes here
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>INFODI | Edit Categories</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png') }}" />

   
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('admin/assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="sidebar-noneoverflow">

    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="{{ url('admin/index') }}"><img alt="logo" src="assets/img/.png') }}">INFODI</a>
            </div>


            <ul class="navbar-item flex-row nav-dropdowns ml-auto">


                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server">
                                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                        <line x1="6" y1="6" x2="6" y2="6"></line>
                                        <line x1="6" y1="18" x2="6" y2="18"></line>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Server Rebooted</h6>
                                            <p class="">45 min ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Kelly Portfolio.pdf</h6>
                                            <p class="">670 kb</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h6>Andy King</h6>
                                <p>Manager</p>
                            </div>
                            <img src="{{ asset('admin/assets/img/profile-7.jpg') }}" class="img-fluid" alt="admin-profile">
                            <span class="badge badge-success"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="dropdown-item">
                            <a href="profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span> Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                    </path>
                                </svg> <span> Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{ url('admin/logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>

    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="{{ url('admin/index') }}">
                            <img src="{{ asset('admin/assets/img/.png') }}" class="navbar-logo" alt="logo">INFODI
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="{{ url('admin/index') }}" class="nav-link"> </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu">
                        <a href="{{ url('admin/index') }}" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu active">
                        <a href="{{ url('admin/category') }}" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Category Manager</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="{{ url('admin/products') }}" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Product Manager</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="{{ url('admin/customers') }}" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <i data-feather="users"></i>
                                <span>User Manager</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="{{ url('admin/orders') }}" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <i data-feather="shopping-cart"></i>
                                <span>Order Manager</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="{{ url('admin/enquiry') }}" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <i data-feather="message-circle"></i>
                                <span>Enquiries</span>
                            </div>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="layout-px-spacing">
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Edit Categories</a></li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row layout-spacing">

                        <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                            <div class="user-profile layout-spacing">
                                <div class="widget-content widget-content-area">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="javascript:void(0);">Category Info</h3>
                                        {{-- <a href="" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                <path d="M12 20h9"></path>
                                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                </path>
                                            </svg></a> --}}
                                    </div>
                                    <div class="text-center user-info">
                                        {{-- <img src="{{ asset('admin/assets/img/profile-3.jpg') }}" alt="avatar"> --}}
                                         <img src="{{ asset('category_image') }}/{{$category->category_image}}" alt="avatar">
                                        <p class="">Category Name</p>
                                    </div>
                                    <div class="user-info-list">

                                        {{-- <div class="">
                                            <ul class="contacts-block list-unstyled">
                                                <li class="contacts-block__item text-center">
                                                    Category Slug
                                                </li>
                                                <li class="contacts-block__item text-center">
                                                    <span class="badge badge-danger"> Deactive </span>
                                                    <span class="badge badge-success"> Active </span>

                                                </li>

                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="education layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class="">Education</h3>
                                    <div class="timeline-alter">
                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Mar 2009</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Royal Collage of Art</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>
                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">25 Apr 2014</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Massachusetts Institute of Technology (MIT)</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>
                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Apr 2018</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>School of Art Institute of Chicago (SAIC)</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="work-experience layout-spacing ">

                                <div class="widget-content widget-content-area">

                                    <h3 class="">Work Experience</h3>

                                    <div class="timeline-alter">

                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Mar 2009</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Netfilx Inc.</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">25 Apr 2014</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Google Inc.</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>

                                        <div class="item-timeline">
                                            <div class="t-meta-date">
                                                <p class="">04 Apr 2018</p>
                                            </div>
                                            <div class="t-dot">
                                            </div>
                                            <div class="t-text">
                                                <p>Design Reset Inc.</p>
                                                <p>Designer Illustrator</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div> -->

                        </div>

                        <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                            <div class="skills layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class="">Edit Category Info</h3>
                                    <form method="POST" action="{{ route('admin.updatecategory', ['id' => $category->id]) }}" enctype="multipart/form-data">
                                            @csrf
                                              {{-- @method('PUT')  --}}
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4">Category Name</label>
                                                <input type="text" name="category_name" class="form-control" id="inputCategoryName" placeholder="Category Name" value="{{ $category->category_name }}" required>
                                            </div>
                                            {{-- <div class="form-group col-md-6">
                                                <label for="inputPassword4">Category Slug</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Category Slug">
                                            </div> --}}
                                        </div>
                                        {{-- <div class="form-group mb-4">
                                            <label for="inputState">Parent Category</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Select Parent Category</option>
                                                <option>...</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                     <label for="exampleFormControlTextarea3">Description</label>
                                     <textarea class="form-control" name="category_desc" id="exampleFormControlTextarea3" rows="7" placeholder="{{ $category->category_desc }}" required></textarea>
                                    </div>
                                        {{-- <div class="form-group mb-4">
                                            <label for="inputState">Category Image</label>
                                            <div class="custom-file mb-4">
                                                <input type="file" class="custom-file-input" id="customFile" value="{{ $category->category_image }}" required >
                                                <label class="custom-file-label" for="customFile">Choose
                                                    Image</label>
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                                            <label for="category_image" class="control-label mb-1">Category Image</label>
                                                            <div class="custom-file mb-4">
                                                            <input id="category_image" name="category_image" type="file"
                                                                class="form-control" aria-required="true"
                                                                aria-invalid="false" value="{{ $category->category_image }}" >
                                                            </div>
                                                    </div>
                                              
                                        {{-- <div class="form-group">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-info">
                                                    <input type="checkbox" class="custom-control-input" id="gridCheck">
                                                    <label class="custom-control-label" for="gridCheck">Show
                                                        in Home Page</label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                                    </form>

                                </div>
                            </div>

                            <!-- <div class="bio layout-spacing ">
                                <div class="widget-content widget-content-area">
                                    <h3 class="">Bio</h3>
                                    <p>I'm Web Developer from California. I code and design websites worldwide. Mauris
                                        varius tellus vitae tristique sagittis. Sed aliquet, est nec auctor aliquet,
                                        orci ex vestibulum ex, non pharetra lacus erat ac nulla.</p>

                                    <p>Sed vulputate, ligula eget mollis auctor, lectus elit feugiat urna, eget euismod
                                        turpis lectus sed ex. Orci varius natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus. Nunc ut velit finibus, scelerisque sapien vitae,
                                        pharetra est. Nunc accumsan ligula vehicula scelerisque vulputate.</p>

                                    <div class="bio-skill-box">

                                        <div class="row">

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5>Sass Applications</h5>
                                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit
                                                            esse eu fugiat nulla pariatur.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5>Github Countributer</h5>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex
                                                            ea commodo consequat.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5>Photograhpy</h5>
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                            qui officia anim id est laborum.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">

                                                <div class="d-flex b-skills">
                                                    <div>
                                                    </div>
                                                    <div class="">
                                                        <h5>Mobile Apps</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                            do et dolore magna aliqua.</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div> -->

                        </div>

                    </div>
                </div>
                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2023 <a target="_blank" href="https://powershiftmotorsports.com/">INFODI</a>,
                            All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg></p>
                    </div>
                </div>
            </div>

        </div>

        
        <script src="{{ asset('admin/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('admin/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/app.js') }}"></script>

        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
        
        <script src="{{ asset('admin/plugins/font-icons/feather/feather.min.js') }}"></script>
        <script type="text/javascript">
            feather.replace();
        </script>
</body>


</html>