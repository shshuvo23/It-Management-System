@extends('master.master')
@section('title')
    Report
@endsection

@section('page-title')
    Report List
@endsection

@section('body')
    <!-- table responsive -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Report List </h4>
            <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User Name</th>
                            <th>Problem Title</th>
                            <th>Report Code</th>
                            <th>User Company</th>
                            <th>User Department</th>
                            <th>Contact no</th>
                            <th>User Designation</th>
                            <th>Problem Details</th>
                            <th>Report Status</th>
                            <th>Make Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $report->employee->name }}</td>
                                <td>{{ $report->title->problem_title }}</td>
                                <td>{{ $report->issue_code }}</td>
                                <td>{{ $report->employee->company->company_name }}</td>
                                <td>{{ $report->employee->department->department_name }}</td>
                                <td>{{ $report->employee->phone }}</td>
                                <td>{{ $report->employee->designation }}</td>
                                <td>{!! $report->description !!}</td>

                                <td>
                                    @if ($report->issue_status == 0)
                                        <a href="" class="badge rounded-pill bg-info">Pending</a>
                                    @elseif ($report->issue_status == 1)
                                        <a href="" class="badge rounded-pill bg-info">Working</a>
                                    @else
                                        <a href="" class="badge rounded-pill bg-info">Complete</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($report->makeSchedules->isEmpty())
                                        <!-- Show the "Schedule Date" button because there are no associated schedules -->
                                        <button class="btn btn-outline-primary waves-effect waves-light" type="button">
                                            <a href="{{ route('scheduledate.add', ['id' => $report->id]) }}">Schedule
                                                Date</a>
                                        </button>
                                    @else
                                        <h5>Already Have Schedule Date</h5>
                                        @if ($report->issue_status == 0)
                                            <button class="btn btn-outline-primary waves-effect waves-light" type="button">
                                                <a href="{{ route('edit.schedule', ['id' => $report->id]) }}">Edit Schedule
                                                    Date</a>
                                            </button>
                                        @endif
                                    @endif
                                    {{-- <button class="btn btn-outline-primary waves-effect waves-light" type="button"><span
                                            class="btn-label"></span>
                                        <a href="{{ route('scheduledate.add', ['id' => $report->id]) }}">Schedule Date</a>
                                    </button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
