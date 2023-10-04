@extends('employee.master')

@section('title')
    Issue
@endsection

@section('page-title')
    Issue Add
@endsection

@section('body')
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            <h4 style="text-align: center;">{{ session('message') }}</h4>
                        </div>
                    @endif
                    <h4 class="card-title">Report Form</h4>
                    <form action="{{ route('issue.create') }}" method="post" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="validationCustomUsername">Problem Type</label>
                                    <select class="form-select" name="title_id" required>
                                        <option value="">Select your Problem</option>
                                        @foreach ($titles as $title)
                                            <option value="{{ $title->id }}">{{ $title->problem_title }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label" for="validationCustom03">Designation</label>
                                    <textarea class="textarea_editor form-control" name="description" rows="10" placeholder="Enter text ..."></textarea>
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid Designation.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary text-white" type="submit">Submit Report</button>
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
