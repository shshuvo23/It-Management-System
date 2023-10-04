@extends('master.master')
@section('title')
    Employee
@endsection

@section('page-title')
    Employee Add
@endsection

@section('body')
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Employee Added Form</h4>
                    <form action="{{ route('employee.create') }}" method="post" class="needs-validation" novalidate>
                        @csrf
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
                                    <input type="text" class="form-control" name="email" id="validationCustomUsername"
                                        placeholder="User Email" aria-describedby="inputGroupPrepend" required>
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
                            <input type="password" class="form-control" id="validationCustom04" name="password_confirmation"
                                placeholder="password_confirmation" required>
                            <div class="invalid-feedback">
                                Please provide a Confirm Password.
                            </div>
                        </div>
                        <button class="btn btn-primary text-white" type="submit">Submit Info</button>
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
                </div>
            </div>
        </div>
    </div>
@endsection
