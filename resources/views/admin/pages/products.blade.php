<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>INFODI | Products</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/favicon.png') }}" />

    <link href="{{ asset('admin/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admin/assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('admin/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('admin/assets/css/components/tabs-accordian/custom-accordions.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/custom_dt_html5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/custom_dt_custom.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/font-icons/fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/font-icons/fontawesome/css/fontawesome.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/plugins/editors/markdown/simplemde.min.css') }}">




</head>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="{{ url('admin/index') }}"><img alt="logo" src="assets/img/.png">INFODI</a>
            </div>


            <ul class="navbar-item flex-row nav-dropdowns ml-auto">


                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media server-log">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-server">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-heart">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg>
                                    <div class="media-body">
                                        <div class="data-info">
                                            <h6 class="">Licence Expiring Soon</h6>
                                            <p class="">8 hrs ago</p>
                                        </div>

                                        <div class="icon-status">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media file-upload">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-file-text">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-check">
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
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span> Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                    </path>
                                </svg> <span> Inbox</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{ url('admin/logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-log-out">
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
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="{{ url('admin/index') }}">
                            <img src="{{ asset('admin/assets/img/logo_main.png') }}" class="navbar-logo" alt="logo">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="{{ url('admin/category') }}" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Category Manager</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu single-menu active">
                        <a href="{{ url('admin/products') }}" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
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
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboad</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a
                                    href="javascript:void(0);">Products</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="row layout-top-spacing">

                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div id="accordionBasic" class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Add Products</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div id="toggleAccordion">
                                    <div class="card">
                                        <div class="card-header" id="headingThree1">
                                            <section class="mb-0 mt-0">
                                                <div role="menu" class="collapsed" data-toggle="collapse"
                                                    data-target="#defaultAccordionThree" aria-expanded="false"
                                                    aria-controls="defaultAccordionThree">
                                                    Enter Products Details
                                                    <div class="icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-chevron-down">
                                                            <polyline points="6 9 12 15 18 9"></polyline>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div id="defaultAccordionThree" class="collapse" aria-labelledby="headingThree1"
                                            data-parent="#toggleAccordion">
                                            <div class="card-body">
                                                 <form id="myForm" action="{{ route('admin.addproduct') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-row mb-4">
                                                        <div class="form-group col-md-12">
                                                            <label for="inputEmail4">Product Name</label>
                                                            <input type="text" class="form-control"
                                                                id="inputCategoryName" placeholder="Product Name" name="product_name"
                                                                required>
                                                        </div>
                                                        {{-- <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Product Slug</label>
                                                            <input type="text" class="form-control" id="inputPassword4"
                                                                placeholder="Product Slug" required>
                                                        </div> --}}
                                                    </div>
                                                    {{-- <div class="form-group mb-4">
                                                        <label for="inputState">Products Image</label>
                                                        <div class="custom-file mb-4">
                                                            <input type="file" class="custom-file-input" id="customFile" name="product_image"
                                                                required>
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                Image</label>
                                                        </div>
                                                    </div> --}}
                                                      <div class="form-group">
                                                            <label for="product_image" class="control-label mb-1">Products Image</label>
                                                            <div class="custom-file mb-4">
                                                            <input id="product_image" name="product_image" type="file"
                                                                class="form-control" aria-required="true"
                                                                aria-invalid="false" required>
                                                            </div>
                                                    </div>
                                                    <div class="form-row mb-12">
                                                        <div class="form-group col-md-12">
                                                            <label for="inputState">Category</label>
                                                            <select id="inputState" class="form-control" name="product_category" required>
                                                                <option value="">Select Product Category</option>
                                                                <?php
                                                                $categories=DB::table('categories')->get();
                                                                ?>
                                                                @foreach($categories as $data)
                                                                <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                         <div class="form-group col-md-3">
                                                            <label for="inputEmail4">Price</label>
                                                            <input type="number" class="form-control" name="product_price" id="inputCategoryName" placeholder="Price" required >
                                                        </div>
                                                        {{-- <div class="form-group col-md-4">
                                                            <label for="inputState">Brand</label>
                                                            <select id="inputState" class="form-control" required>
                                                                <option selected>Select Brand</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div> --}}
                                                        {{-- <div class="form-group col-md-4">
                                                            <label for="inputEmail4">Model</label>
                                                            <input type="text" class="form-control"
                                                                id="inputCategoryName" placeholder="Product Model"
                                                                required>
                                                        </div> --}}
                                                    </div>

                                                    <div class="form-row mb-4">
                                                        <div class="form-group col-md-12">
                                                            <label for="inputEmail4">Short Description</label>
                                                            <input type="text" class="form-control"
                                                                id="short_description" placeholder="Short Description" name="product_desc1"
                                                                required>
                                                        </div>
                                                        {{-- <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Product Slug</label>
                                                            <input type="text" class="form-control" id="inputPassword4"
                                                                placeholder="Product Slug" required>
                                                        </div> --}}
                                                    </div>


                                                    <div class="form-group mb-4">
                                                        <div id="basic" class="row layout-spacing  layout-top-spacing">
                                                            <div class="col-lg-12">
                                                                <div class="statbox widget box box-shadow">
                                                                    <div class="widget-header">
                                                                        <div class="row">
                                                                            <div
                                                                                class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                                <h4> Description </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content widget-content-area">
                                                                        <textarea id="description" name="product_desc2">
                                                                        </textarea>
                                                                          @error('product_desc2')
                                                                              <div class="alert alert-danger">{{ $message }}</div>
                                                                          @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Keywords</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="product_keyword"
                                                            rows="3" required></textarea>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <div id="basic" class="row layout-spacing  layout-top-spacing">
                                                            {{-- <div class="col-lg-12">
                                                                <div class="statbox widget box box-shadow">
                                                                    <div class="widget-header">
                                                                        <div class="row">
                                                                            <div
                                                                                class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                                <h4> Technical Specification </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content widget-content-area">
                                                                        <textarea id="technical_specification">
                                                                                                                            </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Uses</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="3"></textarea>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="exampleFormControlTextarea1">Warranty</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="3"></textarea>
                                                    </div>

                                                    <div class="form-row mb-4">
                                                        <div class="form-group col-md-8">
                                                            <label for="inputEmail4">Lead Time</label>
                                                            <input type="text" class="form-control"
                                                                id="inputCategoryName" placeholder="Lead Time" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputState">Tax</label>
                                                            <select id="inputState" class="form-control" required>
                                                                <option selected>Select Tax</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row mb-4">
                                                        <div class="form-group col-md-3">
                                                            <label for="inputState">Is Promo</label>
                                                            <select id="inputState" class="form-control" required>
                                                                <option selected>Select Promo</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="inputState">Is Featured</label>
                                                            <select id="inputState" class="form-control" required>
                                                                <option selected>Select Featured</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="inputState">Is Trending</label>
                                                            <select id="inputState" class="form-control" required>
                                                                <option selected>Select Trending</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-3">
                                                            <label for="inputState">Is Discontinued</label>
                                                            <select id="inputState" class="form-control" required>
                                                                <option selected>Select Discontinued</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 mb-4">
                                                        <h4>Products Images</h4>
                                                    </div>
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 mb-4">
                                                        <h4>Products Attributes</h4>
                                                    </div>
                                                    <div class="form-row mb-4">
                                                        <div class="form-group col-md-3">
                                                            <label for="inputEmail4">SKU</label>
                                                            <input type="text" class="form-control" id="inputCategoryName" placeholder="SKU" required>
                                                        </div>
                                                    
                                                        <div class="form-group col-md-3">
                                                            <label for="inputEmail4">MRP</label>
                                                            <input type="text" class="form-control" id="inputCategoryName" placeholder="MRP" required>
                                                        </div>
                                                    
                                                        <div class="form-group col-md-3">
                                                            <label for="inputEmail4">Price</label>
                                                            <input type="text" class="form-control" id="inputCategoryName" placeholder="Price" required>
                                                        </div>
                                                    
                                                        <div class="form-group col-md-3">
                                                            <label for="inputEmail4">Quantity</label>
                                                            <input type="text" class="form-control" id="inputCategoryName" placeholder="Quantity" required>
                                                        </div>
                                                    
                                                        <div class="form-group col-md-2">
                                                            <label for="inputState">Size</label>
                                                            <select id="inputState" class="form-control" required>
                                                                <option selected>Select Size</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                    
                                                        <div class="form-group col-md-2">
                                                            <label for="inputState">Color</label>
                                                            <select id="inputState" class="form-control" required>
                                                                <option selected>Select Color</option>
                                                                <option>...</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                            <label for="inputState">Products Image</label>
                                                            <div class="custom-file mb-4">
                                                                <input type="file" class="custom-file-input" id="customFile" required>
                                                                <label class="custom-file-label" for="customFile">Choose
                                                                    Image</label>
                                                            </div>
                                                        </div>
                                                    
                                                    </div> --}}

                                                    
                                                    <button type="submit" class="btn btn-primary mt-3">Add</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Products Table</h4>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <table id="html5-extension" class="table style-3 table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Product Name</th>
                                        <th>Product Category</th>
                                         <th>Product Image</th>
                                         <th>Product Price</th>
                                         <th class="text-center">Status</th>
                                        <th class="text-center dt-no-sorting">Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($pro as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <?php 
                                        $category = DB::table('categories')->where('id','=',$product->product_category)->first();
                                        // return dd($category);
                                        ?>
                                        <td>{{ $category->category_name }}</td>
                                        
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame mr-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                        src="{{ asset('product_image') }}/{{$product->product_image}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$product->product_price}}</td>
                                       <td class="text-center">
                                             @if ($product->status == '0')
                                            <a href="{{ url('admin/product/status/1') }}/{{ $product->id }}"><span
                                                    class="badge badge-danger"> Deactive </span></a>
                                        @else
                                            <a href="{{ url('admin/product/status/0') }}/{{ $product->id }}"><span
                                                    class="badge badge-success"> Active </span></a>
                                        @endif
                                        </td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="{{ url('admin/products_view') }}/{{ $product->id }}" class="bs-tooltip"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 p-1 br-6 mb-1">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a></li>
                                                <li><a href="{{ url('admin/products/delete/') }}/{{ $product->id }}" class="bs-tooltip"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-trash p-1 br-6 mb-1">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg></a></li>
                                            </ul>
                                        </td>
                                    </tr>
@endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>

                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Copyright © 2023<a target="_blank"
                                href="https://powershiftmotorsports.com/">INFODI</a>,
                            All rights reserved.</p>
                    </div>
                    <div class="footer-section f-section-2">
                        <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg></p>
                    </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admin/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script>
        // Get a reference to the form and textarea element
        const form = document.getElementById('myForm');
        const textarea = document.getElementById('description');
      
        // Add event listener to the form's submit event
        form.addEventListener('submit', function(event) {
          // Prevent the form from submitting by default
          event.preventDefault();
      
          // Check if the textarea value is empty or contains only whitespace
          if (textarea.value.trim() === '') {
            // If the textarea is empty, display an error message or perform any desired action
            alert('Please fill out the Main description field.');
          } else {
            // If the textarea is not empty, you can proceed with form submission
            form.submit();
          }
        });
      </script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admin/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard/dash_2.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admin/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('admin/assets/js/components/ui-accordions.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/datatables.js') }}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script>
        $('#html5-extension').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admin/plugins/font-icons/feather/feather.min.js') }}"></script>
    <script type="text/javascript">
        feather.replace();
    </script>

    <script src="{{ asset('admin/plugins/editors/markdown/simplemde.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/editors/markdown/custom-markdown.js') }}"></script>


</body>


</html>