<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}assets/assets/images/favicon.png">
    <title>Bg IT Department</title>
    <!-- This page CSS -->

    {{-- <link href="{{asset('/')}}assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/fontawesome/css/solid.css" rel="stylesheet">
    <!-- chartist CSS --> --}}
    <link href="{{ asset('/') }}assets/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    {{-- <link href="{{asset('/')}}assets/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet"> --}}
    <!-- Date picker plugins css -->
    <link
        href="{{ asset('/') }}assets/assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet">
    <link href="{{ asset('/') }}assets/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css"
        href="{{ asset('/') }}assets/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/') }}assets/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}assets/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('/') }}assets/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            {{-- <img src="{{ asset('/') }}assets/assets/images/logo-icon.png" alt="homepage"
                                class="dark-logo" /> --}}
                            <!-- Light Logo icon -->
                            {{-- <img src="{{ asset('/') }}assets/assets/images/logo-light-icon.png" alt="homepage"
                                class="light-logo" /> --}}
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            {{-- <img src="{{ asset('/') }}assets/assets/images/logo-text.png" alt="homepage"
                                class="dark-logo" /> --}}
                            <!-- Light Logo text -->
                            {{-- <img src="{{ asset('/') }}assets/assets/images/logo-light-text.png" class="light-logo"
                                alt="homepage" /></span> </a> --}}
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    {{-- <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle text-white"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle text-white"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle text-white"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-end animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div class="accordion" id="accordionExample">
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingOne">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      Collapsible Group Item #1
                                                    </button>
                                                  </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingTwo">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      Collapsible Group Item #2
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingThree">
                                                  <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      Collapsible Group Item #3
                                                    </button>
                                                  </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                  <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info text-white">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul> --}}
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div>
                            <img src="{{ asset('/') }}assets/assets/images/users/user.png" alt="user-img"
                                class="img-circle">
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                                data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                @if (auth()->check())
                                    @if (auth()->user()->userType == 0)
                                        {{ auth()->user()->name }}
                                    @elseif (auth()->user()->userType == 1)
                                        {{ auth()->user()->name }}
                                    @endif
                                @endif
                                <span class="caret"></span>
                            </a>
                            {{-- <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                                data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">{{ auth()->user()->name }}
                                <span class="caret"></span>
                            </a> --}}
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="{{ route('profile.show') }}" class="dropdown-item">
                                    <i class="ti-user"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="" class="dropdown-item"
                                    onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i
                                        class="fa fa-power-off"></i> Logout</a>
                                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                    @csrf
                                </form>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        @if (auth()->check())
                            @if (auth()->user()->usertype == 0)
                                <!-- Admin -->
                                <li>
                                    <a class="waves-effect waves-dark" href="{{ route('dashboard') }}"
                                        aria-expanded="false">
                                        <i class="icon-speedometer"></i>
                                        <span class="hide-menu">Dashboard
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <i class="ti-layout-grid2"></i>
                                        <span class="hide-menu">Users</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="{{ route('employee.add') }}">Add New Employee</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('employee.list') }}">Employee List</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('engineer.list') }}">Engineer List</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <i class="ti-layout-grid2"></i>
                                        <span class="hide-menu">Company</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="{{ route('company.add') }}">Add New Company</a>
                                        </li>
                                        <li>
                                            <a href="{{route('company.list')}}">Company List</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <i class="ti-layout-grid2"></i>
                                        <span class="hide-menu">Department</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="{{ route('department.add') }}">Add New Department</a>
                                        </li>
                                        <li>
                                            <a href="{{route('department.list')}}">Department List</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <i class="ti-layout-grid2"></i>
                                        <span class="hide-menu">Title</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="{{ route('title.add') }}">Add New Title</a>
                                        </li>
                                        <li>
                                        <a href="{{route('title.list')}}">Title List</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="{{ route('view.report') }}"
                                        aria-expanded="false">
                                        <i class="icon-speedometer"></i>
                                        <span class="hide-menu">View Report List
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="{{ route('schedule.list') }}"
                                        aria-expanded="false">
                                        <i class="icon-speedometer"></i>
                                        <span class="hide-menu">View Schedule List
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="{{ route('complete.report') }}"
                                        aria-expanded="false">
                                        <i class="icon-speedometer"></i>
                                        <span class="hide-menu">View Completed Report List
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-small-cap">--- SUPPORT</li>
                                <li>
                                    <a class="waves-effect waves-dark" href="" aria-expanded="false"
                                        onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                        <i class="far fa-circle text-success"></i>
                                        <span class="hide-menu">Log Out</span>
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                        @csrf
                                    </form>
                                </li>
                            @elseif (auth()->user()->usertype == 1)
                                <!-- Admin -->
                                <li>
                                    <a class="waves-effect waves-dark" href="{{ route('dashboard') }}"
                                        aria-expanded="false">
                                        <i class="icon-speedometer"></i>
                                        <span class="hide-menu">Dashboard
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="{{ route('pending.report') }}"
                                        aria-expanded="false">
                                        <i class="icon-speedometer"></i>
                                        <span class="hide-menu">Pending Work List
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="{{ route('pending.task') }}"
                                        aria-expanded="false">
                                        <i class="icon-speedometer"></i>
                                        <span class="hide-menu">Task List
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="waves-effect waves-dark" href="{{ route('complete.list') }}"
                                        aria-expanded="false">
                                        <i class="icon-speedometer"></i>
                                        <span class="hide-menu">Complete Task List
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-small-cap">--- SUPPORT</li>
                                <li>
                                    <a class="waves-effect waves-dark" href="" aria-expanded="false"
                                        onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                        <i class="far fa-circle text-success"></i>
                                        <span class="hide-menu">Log Out</span>
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        @endif
                        {{-- <li class="nav-small-cap">--- PERSONAL</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-speedometer"></i>
                                <span class="hide-menu">Dashboard
                                    <span class="badge rounded-pill bg-cyan ms-auto">4</span>
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="index.html">Minimal </a>
                                </li>
                                <li>
                                    <a href="index2.html">Analytical</a>
                                </li>
                                <li>
                                    <a href="index3.html">Demographical</a>
                                </li>
                                <li>
                                    <a href="index4.html">Modern</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-layout-grid2"></i>
                                <span class="hide-menu">Apps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="app-calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="app-chat.html">Chat app</a>
                                </li>
                                <li>
                                    <a href="app-ticket.html">Support Ticket</a>
                                </li>
                                <li>
                                    <a href="app-contact.html">Contact / Employee</a>
                                </li>
                                <li>
                                    <a href="app-contact2.html">Contact Grid</a>
                                </li>
                                <li>
                                    <a href="app-contact-detail.html">Contact Detail</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="hide-menu">Inbox</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="app-email.html">Mailbox</a>
                                </li>
                                <li>
                                    <a href="app-email-detail.html">Mailbox Detail</a>
                                </li>
                                <li>
                                    <a href="app-compose.html">Compose Mail</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-palette"></i>
                                <span class="hide-menu">Ui Elements
                                    <span class="badge rounded-pill bg-primary text-white ms-auto">25</span>
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-user-card.html">User Cards</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-tab.html">Tab</a>
                                </li>
                                <li>
                                    <a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
                                </li>
                                <li>
                                    <a href="ui-tooltip-stylish.html">Tooltip stylish</a>
                                </li>
                                <li>
                                    <a href="ui-sweetalert.html">Sweet Alert</a>
                                </li>
                                <li>
                                    <a href="ui-notification.html">Notification</a>
                                </li>
                                <li>
                                    <a href="ui-progressbar.html">Progressbar</a>
                                </li>
                                <li>
                                    <a href="ui-nestable.html">Nestable</a>
                                </li>
                                <li>
                                    <a href="ui-range-slider.html">Range slider</a>
                                </li>
                                <li>
                                    <a href="ui-timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="ui-horizontal-timeline.html">Horizontal Timeline</a>
                                </li>
                                <li>
                                    <a href="ui-session-timeout.html">Session Timeout</a>
                                </li>
                                <li>
                                    <a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a>
                                </li>
                                <li>
                                    <a href="ui-bootstrap.html">Bootstrap Ui</a>
                                </li>
                                <li>
                                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li>
                                    <a href="ui-bootstrap-switch.html">Bootstrap Switch</a>
                                </li>
                                <li>
                                    <a href="ui-list-media.html">List Media</a>
                                </li>
                                <li>
                                    <a href="ui-ribbons.html">Ribbons</a>
                                </li>
                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-offcanvas.html">Offcanvas</a>
                                </li>
                                <li>
                                    <a href="ui-date-paginator.html">Date-paginator</a>
                                </li>
                                <li>
                                    <a href="ui-dragable-portlet.html">Dragable Portlet</a>
                                </li>
                                <li><a href="ui-spinner.html">Spinner</a></li>
                                <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-layout-media-right-alt"></i>
                                <span class="hide-menu">Forms</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="form-basic.html">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="form-layout.html">Form Layouts</a>
                                </li>
                                <li>
                                    <a href="form-addons.html">Form Addons</a>
                                </li>
                                <li>
                                    <a href="form-material.html">Form Material</a>
                                </li>
                                <li>
                                    <a href="form-float-input.html">Floating Lable</a>
                                </li>
                                <li>
                                    <a href="form-pickers.html">Form Pickers</a>
                                </li>
                                <li>
                                    <a href="form-upload.html">File Upload</a>
                                </li>
                                <li>
                                    <a href="form-mask.html">Form Mask</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Form Validation</a>
                                </li>
                                <li><a href="form-bootstrap-validation.html">Form Bootstrap Validation</a></li>
                                <li>
                                    <a href="form-dropzone.html">File Dropzone</a>
                                </li>
                                <li>
                                    <a href="form-icheck.html">Icheck control</a>
                                </li>
                                <li>
                                    <a href="form-img-cropper.html">Image Cropper</a>
                                </li>
                                <li>
                                    <a href="form-bootstrapwysihtml5.html">HTML5 Editor</a>
                                </li>
                                <li>
                                    <a href="form-typehead.html">Form Typehead</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Form Wizard</a>
                                </li>
                                <li>
                                    <a href="form-xeditable.html">Xeditable Editor</a>
                                </li>
                                <li>
                                    <a href="form-summernote.html">Summernote Editor</a>
                                </li>
                                <li>
                                    <a href="form-tinymce.html">Tinymce Editor</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-layout-accordion-merged"></i>
                                <span class="hide-menu">Tables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="table-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="table-layout.html">Table Layouts</a>
                                </li>
                                <li>
                                    <a href="table-data-table.html">Data Tables</a>
                                </li>
                                <li>
                                    <a href="table-footable.html">Footable</a>
                                </li>
                                <li>
                                    <a href="table-jsgrid.html">Js Grid Table</a>
                                </li>
                                <li>
                                    <a href="table-responsive.html">Responsive Table</a>
                                </li>
                                <li>
                                    <a href="table-bootstrap.html">Bootstrap Tables</a>
                                </li>
                                <li>
                                    <a href="table-editable-table.html">Editable Table</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-settings"></i>
                                <span class="hide-menu">Widgets</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="widget-data.html">Data Widgets</a>
                                </li>
                                <li>
                                    <a href="widget-apps.html">Apps Widgets</a>
                                </li>
                                <li>
                                    <a href="widget-charts.html">Charts Widgets</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-gallery"></i>
                                <span class="hide-menu">Page Layout</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="layout-single-column.html">1 Column</a>
                                </li>
                                <li>
                                    <a href="layout-fix-header.html">Fix header</a>
                                </li>
                                <li>
                                    <a href="layout-fix-sidebar.html">Fix sidebar</a>
                                </li>
                                <li>
                                    <a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a>
                                </li>
                                <li>
                                    <a href="layout-boxed.html">Boxed Layout</a>
                                </li>
                                <li>
                                    <a href="layout-logo-center.html">Logo in Center</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-files"></i>
                                <span class="hide-menu">Sample Pages
                                    <span class="badge rounded-pill bg-info">25</span>
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="starter-kit.html">Starter Kit</a>
                                </li>
                                <li>
                                    <a href="pages-blank.html">Blank page</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="has-arrow">Authentication
                                        <span class="badge rounded-pill bg-success pull-right">6</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="pages-login.html">Login 1</a>
                                        </li>
                                        <li>
                                            <a href="pages-login-2.html">Login 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="pages-register2.html">Register 2</a>
                                        </li>
                                        <li>
                                            <a href="pages-register3.html">Register 3</a>
                                        </li>
                                        <li>
                                            <a href="pages-lockscreen.html">Lockscreen</a>
                                        </li>
                                        <li>
                                            <a href="pages-recover-password.html">Recover password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="pages-profile.html">Profile page</a>
                                </li>
                                <li>
                                    <a href="pages-animation.html">Animation</a>
                                </li>
                                <li>
                                    <a href="pages-fix-innersidebar.html">Sticky Left sidebar</a>
                                </li>
                                <li>
                                    <a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pages-treeview.html">Treeview</a>
                                </li>
                                <li>
                                    <a href="pages-utility-classes.html">Helper Classes</a>
                                </li>
                                <li>
                                    <a href="pages-search-result.html">Search result</a>
                                </li>
                                <li>
                                    <a href="pages-scroll.html">Scrollbar</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-lightbox-popup.html">Lighbox popup</a>
                                </li>
                                <li>
                                    <a href="pages-gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">Faqs</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="pages-error-400.html">400</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-403.html">403</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-404.html">404</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-500.html">500</a>
                                        </li>
                                        <li>
                                            <a href="pages-error-503.html">503</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-pie-chart"></i>
                                <span class="hide-menu">Charts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="chart-morris.html">Morris Chart</a>
                                </li>
                                <li>
                                    <a href="chart-chartist.html">Chartis Chart</a>
                                </li>
                                <li>
                                    <a href="chart-echart.html">Echarts</a>
                                </li>
                                <li>
                                    <a href="chart-flot.html">Flot Chart</a>
                                </li>
                                <li>
                                    <a href="chart-knob.html">Knob Chart</a>
                                </li>
                                <li>
                                    <a href="chart-chart-js.html">Chartjs</a>
                                </li>
                                <li>
                                    <a href="chart-sparkline.html">Sparkline Chart</a>
                                </li>
                                <li>
                                    <a href="chart-extra-chart.html">Extra chart</a>
                                </li>
                                <li>
                                    <a href="chart-peity.html">Peity Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-light-bulb"></i>
                                <span class="hide-menu">Icons</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                                <li><a href="icon-iconmind.html">Mind Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-location-pin"></i>
                                <span class="hide-menu">Maps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="map-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="map-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="ti-align-left"></i>
                                <span class="hide-menu">Multi level dd</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="javascript:void(0)">item 1.1</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">item 1.2</a>
                                </li>
                                <li>
                                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.1</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.2</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.3</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">item 1.3.4</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">item 1.4</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- SUPPORT</li>
                        <li>
                            <a class="waves-effect waves-dark" href="http://eliteadmin.themedesigner.in/demos/bt4/documentation/documentation.html" aria-expanded="false">
                                <i class="far fa-circle text-danger"></i>
                                <span class="hide-menu">Documentation</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false">
                                <i class="far fa-circle text-success"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false">
                                <i class="far fa-circle text-info"></i>
                                <span class="hide-menu">FAQs</span>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">@yield('title')</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">@yield('page-title')</li>
                            </ol>
                            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                                    class="fa fa-plus-circle"></i> Create New</button> --}}
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->


                @yield('body')



                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2021 Eliteadmin by themedesigner.in
            <a href="https://www.wrappixel.com/">WrapPixel</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('/') }}assets/assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/') }}assets/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('/') }}assets/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('/') }}assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('/') }}assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('/') }}assets/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('/') }}assets/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="{{ asset('/') }}assets/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="{{ asset('/') }}assets/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="{{ asset('/') }}assets/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    {{-- <script src="{{ asset('/') }}assets/assets/node_modules/toast-master/js/jquery.toast.js"></script> --}}
    <!-- Chart JS -->
    <script src="{{ asset('/') }}assets/dist/js/dashboard1.js"></script>
    {{-- <script src="{{ asset('/') }}assets/assets/node_modules/toast-master/js/jquery.toast.js"></script> --}}
    <script src="{{ asset('/') }}assets/dist/js/pages/validation.js"></script>
    <!--This page plugins -->
    <script src="{{ asset('/') }}assets/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}assets/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js">
    </script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('/') }}assets/assets/node_modules/moment/moment.js"></script>
    <script
        src="{{ asset('/') }}assets/assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{ asset('/') }}assets/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="../assets/node_modules/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="{{ asset('/') }}assets/assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="{{ asset('/') }}assets/cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/') }}assets/cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="{{ asset('/') }}assets/cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="{{ asset('/') }}assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="{{ asset('/') }}assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="{{ asset('/') }}assets/cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="{{ asset('/') }}assets/cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(function() {
            $('#myTable').DataTable();
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group +
                                '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
            // responsive table
            $('#config-table').DataTable({
                responsive: true
            });
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass(
                'btn btn-primary me-1');
        });
    </script>

    <script>
        $(document).ready(function() {
            // Counter to track the number of added accessory fields
            var accessoryCounter = 1;

            // Function to add new accessory input fields
            function addAccessoryFields() {
                accessoryCounter++;
                var newFields = `
                    <div class="accessory-row" data-row="${accessoryCounter}">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label mt-3">Accessories Name</label>
                                <div class="input-group">
                                    <input type="text" name="accessory_name[]" class="form-control" aria-label="Text input with checkbox">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label mt-3">Accessories Price</label>
                                <div class="input-group">
                                    <span class="input-group-text">৳</span>
                                    <span class="input-group-text">0.00</span>
                                    <input type="number" name="accessory_price[]" class="form-control" aria-label="Amount (to the nearest dollar)">
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-2 mt-3">
                                <button type="button" class="btn btn-danger remove-accessory" data-row="${accessoryCounter}">Remove</button>
                        </div>
                    </div>
                `;
                $('#accessory-container').append(newFields);
            }

            // Add more accessory fields on "Add More" button click
            $('#add-accessory').click(function() {
                addAccessoryFields();
            });

            // Remove accessory fields on "Remove" button click
            $(document).on('click', '.remove-accessory', function() {
                var rowToRemove = $(this).data('row');
                $('.accessory-row[data-row="' + rowToRemove + '"]').remove();
            });
        });
    </script>


    <script>
        // MAterial Date picker
        $('#mdate').bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false
        });
        $('#timepicker').bootstrapMaterialDatePicker({
            format: 'HH:mm',
            time: true,
            date: false
        });
        $('#date-format').bootstrapMaterialDatePicker({
            format: 'dddd DD MMMM YYYY - HH:mm'
        });

        $('#min-date').bootstrapMaterialDatePicker({
            format: 'DD/MM/YYYY HH:mm',
            minDate: new Date()
        });
        // Clock pickers
        $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });
        $('.clockpicker').clockpicker({
            donetext: 'Done',
        }).find('input').change(function() {
            console.log(this.value);
        });
        $('#check-minutes').click(function(e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }
        // Colorpicker
        $(".colorpicker").asColorPicker();
        $(".complex-colorpicker").asColorPicker({
            mode: 'complex'
        });
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });
        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });

        // -------------------------------
        // Start Date Range Picker
        // -------------------------------

        // Basic Date Range Picker
        $('.daterange').daterangepicker();

        // Date & Time
        $('.datetime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY h:mm A'
            }
        });

        //Calendars are not linked
        $('.timeseconds').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            timePicker24Hour: true,
            timePickerSeconds: true,
            locale: {
                format: 'MM-DD-YYYY h:mm:ss'
            }
        });

        // Single Date Range Picker
        $('.singledate').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        // Auto Apply Date Range
        $('.autoapply').daterangepicker({
            autoApply: true,
        });

        // Calendars are not linked
        $('.linkedCalendars').daterangepicker({
            linkedCalendars: false,
        });

        // Date Limit
        $('.dateLimit').daterangepicker({
            dateLimit: {
                days: 7
            },
        });

        // Show Dropdowns
        $('.showdropdowns').daterangepicker({
            showDropdowns: true,
        });

        // Show Week Numbers
        $('.showweeknumbers').daterangepicker({
            showWeekNumbers: true,
        });

        $('.dateranges').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')]
            }
        });

        // Always Show Calendar on Ranges
        $('.shawCalRanges').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')]
            },
            alwaysShowCalendars: true,
        });

        // Top of the form-control open alignment
        $('.drops').daterangepicker({
            drops: "up" // up/down
        });

        // Custom button options
        $('.buttonClass').daterangepicker({
            drops: "up",
            buttonClasses: "btn",
            applyClass: "btn-info",
            cancelClass: "btn-danger"
        });

        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });

        // Daterange picker
        $('.input-daterange-datepicker').daterangepicker({
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse'
        });
        $('.input-daterange-timepicker').daterangepicker({
            timePicker: true,
            format: 'MM/DD/YYYY h:mm A',
            timePickerIncrement: 30,
            timePicker12Hour: true,
            timePickerSeconds: false,
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse'
        });
        $('.input-limit-datepicker').daterangepicker({
            format: 'MM/DD/YYYY',
            minDate: '06/01/2015',
            maxDate: '06/30/2015',
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-danger',
            cancelClass: 'btn-inverse',
            dateLimit: {
                days: 6
            }
        });
    </script>

    <script>
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>
</body>

</html>
