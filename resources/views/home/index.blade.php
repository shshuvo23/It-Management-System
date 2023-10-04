<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BG IT Department</title>
    <link rel="icon" type="image/png" href="{{ asset('/') }}home/assets/images/BG-group.png" sizes="16x16">
    <!-- bootstrap 5  -->
    <link rel="stylesheet" href="{{ asset('/') }}home/assets/css/lib/bootstrap.min.css">
    <!-- Icon Link  -->
    <link rel="stylesheet" href="{{ asset('/') }}home/assets/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}home/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}home/assets/css/lib/animate.css">

    <!-- Plugin Link -->
    <link rel="stylesheet" href="{{ asset('/') }}home/assets/css/lib/swiper.css">
    <link rel="stylesheet" href="{{ asset('/') }}home/assets/css/lib/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/') }}home/assets/css/lib/odometer.css">

    <!-- chartist CSS -->
    <link href="{{ asset('/') }}assets/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('/') }}assets/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}assets/dist/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('/') }}assets/dist/css/pages/dashboard1.css" rel="stylesheet">


    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('/') }}home/assets/css/main.css">
</head>

<body class="dark-version">
    <!-- Overlay -->
    <div class="overlay"></div>
    <!--preloader start-->
    <div class="preloader">
        <div class="preloader-wrap">
            <img src="{{ asset('/') }}home/assets/images/BG-group.png" alt="logo" class="img-fluid" />
            <div class="preloader">
                <i>.</i>
                <i>.</i>
                <i>.</i>
            </div>
        </div>
    </div>
    <!--preloader end-->
    <div class="header">
        <div class="header-bottom">
            <div class="header-bottom-area align-items-center">
                <div class="logo"><a href="index.html"><img src="{{ asset('/') }}home/assets/images/BG-group.png"
                            alt="logo"></a></div>
                <ul class="menu">
                    <li>
                        <a href="" class="btn btn-info text-white ms-lg-4 mt-2 mt-lg-0">User Guide</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <li>
                                <a href="{{ route('employee.loginForm') }}"
                                    class="btn btn-info text-white ms-lg-4 mt-2 mt-lg-0">Login</a>
                            </li>

                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('employee.registerForm') }}"
                                        class="btn btn-info text-white ms-lg-4 mt-2 mt-lg-0">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif

                </ul>
            </div>
        </div>
    </div>

    <!-- Banner Section Starts -->
    <section class="banner-section">
        <div class="container">
            <div class="banner-wrapper justify-content-lg-between">
                <div class="banner-content">
                    <h1 class="title">BG IT Service <span>&</span> <span>Solution</span></h1>
                    <div class="banner-search-wrapper">
                        <p>We provide Software,hardwar,Network and Internet Service and Solution for BG family. Entry
                            your problem/issue. We will solve them.</p>
                        <span>
                            <a href="" class="btn btn-primary py-3" style="margin-left: 385px;">User Guide</a>
                        </span>
                    </div>
                </div>
                <div class="banner-thumb ps-lg-5">
                    <img src="{{ asset('/') }}home/assets/images/thumb/banner-thumb.png" alt="thumb">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section Ends -->

    <!-- Plan Overview Section Starts -->
    <section class="plan-overview pt-60 pb-120 bg--light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-7 col-lg-8 col-md-10">
                    <div class="section-header text-center">
                        <h2 class="section-header__title">Recent Activities</h2>
                    </div>
                </div>
            </div>
            <ul class="plan-tab nav-tabs nav border-0 pb-40">
                <li>
                    <a data-bs-toggle="tab" href="#pending">
                        Pending Work</a>
                </li>
                <li>
                    <a data-bs-toggle="tab" href="#complete" class="active">Complete Work</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show fade" id="pending">
                    <div class="card">
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900" style="text-align: center;">
                                        Pending Work List</h3>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover no-wrap mx-auto" style="width: 800px;">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Employee</th>
                                        <th>Department</th>
                                        <th>Problem Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendings as $pending)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="txt-oflo">{{ $pending->employee->name }}</td>
                                            <td>{{ $pending->employee->department->department_name }}
                                            </td>
                                            <td class="txt-oflo">{{ $pending->title->problem_title }}</td>
                                            <td><span class="badge bg-success rounded-pill"></span>
                                                @if ($pending->issue_status == 0)
                                                    <a href="" class="badge rounded-pill bg-info">Pending</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane show fade active" id="complete">
                    <div class="card">
                        <div class="card-body bg-light">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="mt-6 text-xl font-semibold text-gray-900" style="text-align: center;">
                                        Completed Work List
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover no-wrap mx-auto" style="width: 800px;">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Employee</th>
                                        <th>Department</th>
                                        <th>Problem Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($completes as $complete)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="txt-oflo">{{ $complete->employee->name }}</td>
                                            <td>{{ $complete->employee->department->department_name }}
                                            </td>
                                            <td class="txt-oflo">{{ $complete->title->problem_title }}</td>
                                            <td><span class="badge bg-success rounded-pill"></span>
                                                @if ($complete->issue_status == 2)
                                                    <a href="" class="badge rounded-pill bg-info">Complete</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Plan Overview Section Ends -->
    <!-- Footer Starts -->
    <footer class="footer-two bg--light pt-50">
        <div class="container position-relative">
            <div class="footer-bottom pb-80">
                <div class="row justify-content-between gy-5">
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <div class="footer-widget">
                            <a href="" class="logo mb-4"><img
                                    src="{{ asset('/') }}home/assets/images/BG-group.png" alt="logo"></a>
                            <p>BG IT Service & Solution
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-2">
                        <div class="footer-widget">
                            <h4 class="widget-title">Department Head</h4>
                            <ul class="links">
                                <li><a href="">MD Ibrahim Hossain</a></li>
                                <li><a href="">01751094262</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-2">
                        <div class="footer-widget">
                            <h4 class="widget-title">Support Engineer</h4>
                            <ul class="links">
                                <li><a href="">Md Sujon Hossain</a></li>
                                <li><a href="">01781565163</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p class="copyright text-center py-3">Copyright &copy; 2023. All Rights Reserved By <a href=""
                    target="blank" class="text--base1">BG Group</a></p>
        </div>
    </footer>
    <!-- Footer Ends -->

    <!-- jQuery library -->
    <script src="{{ asset('/') }}home/assets/js/lib/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 5 js -->
    <script src="{{ asset('/') }}home/assets/js/lib/bootstrap.min.js"></script>

    <!-- Pluglin Link -->
    <script src="{{ asset('/') }}home/assets/js/lib/swiper.js"></script>
    <script src="{{ asset('/') }}home/assets/js/lib/magnific-popup.min.js"></script>
    <script src="{{ asset('/') }}home/assets/js/lib/odometer.min.js"></script>
    <script src="{{ asset('/') }}home/assets/js/lib/viewport.jquery.js"></script>

    <!-- Main js -->
    <script src="{{ asset('/') }}home/assets/js/main.js"></script>
</body>

</html>
