@extends('master.master')

@section('title')
    Schedule
@endsection

@section('page-title')
    Edit Schedule Date
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <!-- Your main content here -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Schedule Date</h4>
                        @if (session('message'))
                            <div class="alert alert-success">
                                <h4 style="text-align: center;">{{ session('message') }}</h4>
                            </div>
                        @endif
                        <!-- Rest of your form fields -->
                        <form action="{{ route('update.schedule', ['scheduleId' => $schedule->id]) }}" method="post" class="m-t-40"
                            novalidate>
                            @csrf
                            <div class="col-md-6">
                                <label class="m-t-20 form-label">Default Material Date Picker</label>
                                <input type="text" class="form-control" name="schedule_date"
                                    value="{{ $schedule->schedule_date }}" placeholder="2017-06-04" id="mdate">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="validationCustomUsername">Priority</label>
                                <select class="form-select" id="priority" name="priority" required>
                                    <option value="low" {{ $schedule->priority === 'low' ? 'selected' : '' }}>Low
                                    </option>
                                    <option value="medium" {{ $schedule->priority === 'medium' ? 'selected' : '' }}>Medium
                                    </option>
                                    <option value="high" {{ $schedule->priority === 'high' ? 'selected' : '' }}>High
                                    </option>
                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info text-white">Update Schedule</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <!-- Place user info in the top right corner -->
                <div class="card text-center">
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success">
                                <h4 style="text-align: center;">{{ session('message') }}</h4>
                            </div>
                        @else
                            <table class="table">
                                <thead>
                                    <th>User Name</th>
                                    <th>Issue Code</th>
                                    <th>Issue title</th>
                                </thead>
                                <tbody>
                                    <td>{{ $schedule->issue->employee->name }}</td>
                                    <td>{{ $schedule->issue->issue_code }}</td>
                                    <td>{{ $schedule->issue->title->problem_title }}</td>
                                </tbody>
                            </table>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
@endsection
