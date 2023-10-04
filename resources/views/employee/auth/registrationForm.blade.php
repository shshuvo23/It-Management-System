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
    <title>Bg Sourcing IT Suppout Register Form</title>

    <!-- page css -->
    <link href="{{ asset('/') }}assets/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}assets/dist/css/style.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default card-no-border">
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
    <section id="wrapper">
        <div class="login-register"
            style="background-image:url({{ asset('/') }}assets/assets/images/background/login-register.jpg);">
            <div class="signup-box card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('employee.register') }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        <h3 class="text-center fw-bold m-b-20">Registration Form</h3>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom01">User Name</label>
                                <input type="text" class="form-control" name="name" id="validationCustom01"
                                    placeholder="User Name" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustomUsername">User Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" name="email"
                                        id="validationCustomUsername" placeholder="User Email"
                                        aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="validationCustomUsername">Company Name</label>
                                    <select class="form-select" name="company_id" required>
                                        <option value="">Select your Company name</option>
                                        @foreach ($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="validationCustomUsername">Department Name</label>
                                    <select class="form-select" name="department_id" required>
                                        <option value="">Select your department name</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->department_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom03">Designation</label>
                                <input type="text" class="form-control" name="designation" id="validationCustom03"
                                    placeholder="Designation" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Designation.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom04">Contact Number</label>
                                <input type="tel" class="form-control" name="phone" id="validationCustom04"
                                    placeholder="Contact Number" required pattern="^\d{11}$">
                                <div class="invalid-feedback">
                                    Please provide a Contact Number.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label class="form-label" for="validationCustom04">Password</label>
                            <input type="password" class="form-control" name="password" id="validationCustom04"
                                placeholder="Password" required>
                            <div class="invalid-feedback">
                                Please provide a Password.
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label class="form-label" for="validationCustom04">Confirm Password</label>
                            <input type="password" class="form-control" id="validationCustom04"
                                name="password_confirmation" placeholder="password_confirmation" required>
                            <div class="invalid-feedback">
                                Please provide a Confirm Password.
                            </div>
                        </div>
                        <button class="btn btn-primary text-white" type="submit">Submit Info</button>
                        <div class="py-2">
                            <h5>If you have already an account please go to login page</h5>
                            <a href="{{route('employee.loginForm')}}" class="btn btn-success">Login</a>
                        </div>
                    </form>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
                    {{-- <form class="form-horizontal form-material" id="loginform"
                        action="http://eliteadmin.themedesigner.in/demos/bt4/inverse/index.html">
                        <h3 class="text-center m-b-20">Sign Up</h3>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <input class="form-control" type="text" required="" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-6">
                                <input class="form-control" type="text" required="" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <input class="form-control" type="text" required="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required=""
                                    placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">I agree to all <a
                                            href="javascript:void(0)">Terms</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button
                                    class="btn btn-info btn-lg w-100 btn-rounded text-uppercase waves-effect waves-light text-white"
                                    type="submit">Sign Up</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="pages-login.html" class="text-info m-l-5"><b>Sign
                                        In</b></a>
                            </div>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('/') }}assets/assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/') }}assets/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>

</html>
