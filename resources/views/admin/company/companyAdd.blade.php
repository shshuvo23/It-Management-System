@extends('master.master')

@section('title')
    Company
@endsection

@section('page-title')
    Add Company
@endsection

@section('body')
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Company Added Form</h4>
                    @if (session('message'))
                        <div class="alert alert-success">
                            <h4 style="text-align: center;">{{ session('message') }}</h4>
                        </div>
                    @endif
                    <form action="{{ route('company.create') }}" method="post" class="m-t-40" novalidate>
                        @csrf
                        <div class="form-group">
                            <h5>Company Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="company_name" class="form-control" required
                                    data-validation-required-message="This field is required">
                            </div>
                        </div>
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-info text-white">Add New Company</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
@endsection
