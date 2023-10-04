@extends('employee.master')

@section('title')
    Account
@endsection

@section('page-title')
    View Account
@endsection

@section('body')
    <div class="row">
        @if (session('message'))
            <div class="alert alert-success">
                <h4 style="text-align: center;">{{ session('message') }}</h4>
            </div>
        @endif
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#profile"
                            role="tab">Profile</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!--second tab-->
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xs-6 b-r"> <strong>User Name</strong>
                                    <br>
                                    <p class="text-muted">{{ $employee->name }}</p>
                                </div>
                                <div class="col-md-4 col-xs-6 b-r"> <strong>User Email</strong>
                                    <br>
                                    <p class="text-muted">{{ $employee->email }}</p>
                                </div>
                                <div class="col-md-4 col-xs-6 b-r"> <strong>User Company Name</strong>
                                    <br>
                                    <p class="text-muted">{{ $employee->company->company_name }}</p>
                                </div>
                                <div class="col-md-4 col-xs-6 b-r"> <strong>User Department</strong>
                                    <br>
                                    <p class="text-muted">{{ $employee->department->department_name }}</p>
                                </div>
                                <div class="col-md-4 col-xs-6 b-r"> <strong>User Designation</strong>
                                    <br>
                                    <p class="text-muted">{{ $employee->designation }}</p>
                                </div>
                                <div class="col-md-4 col-xs-6 b-r"> <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted">{{ $employee->phone }}</p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Johnathan Doe"
                                            class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="johnathan@admin.com"
                                            class="form-control form-control-line" name="example-email" id="example-email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" value="password" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="123 456 7890"
                                            class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Message</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Select Country</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>London</option>
                                            <option>India</option>
                                            <option>Usa</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success text-white">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@endsection
