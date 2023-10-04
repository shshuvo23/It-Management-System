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
    <title>User Dashboard</title>
    <!-- This page CSS -->

    {{-- <link href="{{asset('/')}}assets/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/fontawesome/css/brands.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/fontawesome/css/solid.css" rel="stylesheet">
    <!-- chartist CSS --> --}}
    <link href="{{ asset('/') }}assets/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    {{-- <link href="{{asset('/')}}assets/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/') }}assets/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/') }}assets/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
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
            <p class="loader__label">User</p>
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
                    <a class="navbar-brand" href="">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('/') }}assets/assets/images/logo-icon.png" alt="homepage"
                                class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('/') }}assets/assets/images/logo-light-icon.png" alt="homepage"
                                class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="{{ asset('/') }}assets/assets/images/logo-text.png" alt="homepage"
                                class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{ asset('/') }}assets/assets/images/logo-light-text.png" class="light-logo"
                                alt="homepage" /></span> </a>
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
                                data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">{{ session('authenticated_employee')->name }}
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="{{route('account.view')}}" class="dropdown-item">
                                    <i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="{{route('account.passwordChange')}}" class="dropdown-item">
                                    <i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
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
                        <!-- Employee's Menu -->
                        <li>
                            <a class="waves-effect waves-dark" href="{{ route('employee.dashborad') }}"
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
                                <span class="hide-menu">Report</span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="{{ route('issue.add') }}">Make Report</a>
                                </li>
                                <li>
                                    <a href="{{ route('report.list') }}">Report List</a>
                                </li>
                            </ul>
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
    <!-- start - This is for export functionality only -->
    <script src="{{ asset('/') }}assets/cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/') }}assets/cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="{{ asset('/') }}assets/cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="{{ asset('/') }}assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="{{ asset('/') }}assets/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="{{ asset('/') }}assets/cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="{{ asset('/') }}assets/cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('/') }}assets/assets/node_modules/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="{{ asset('/') }}assets/assets/node_modules/html5-editor/bootstrap-wysihtml5.js"></script>
    <script>
        $(document).ready(function() {
            $('.textarea_editor').wysihtml5();
        });
    </script>
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
        ! function(window, document, $) {
            "use strict";
            $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
        }(window, document, jQuery);
    </script>
</body>

</html>
