@extends('employee.master')

@section('title')
    Account
@endsection

@section('page-title')
    Password Change
@endsection

@section('body')
    <div class="row">
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#profile" role="tab">Password
                            Change</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!--second tab-->
                    <div class="tab-pane active" id="settings" role="tabpanel">
                        <div class="card-body">
                            <form action="{{ route('account.password', ['id' => $employee->id]) }}" method="post"
                                class="form-horizontal form-material">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="current_password"
                                            class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">New Password </label>
                                    <div class="col-md-12">
                                        <input type="password" name="new_password" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Confirm Password </label>
                                    <div class="col-md-12">
                                        <input type="password" name="confirm_password"
                                            class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success text-white">Update Password</button>
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
