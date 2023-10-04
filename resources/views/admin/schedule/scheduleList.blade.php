@extends('master.master')
@section('title')
    Schedule
@endsection

@section('page-title')
    Schedule List
@endsection

@section('body')
    <!-- table responsive -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Schedule List </h4>
            @if (session('message'))
                <div class="alert alert-success">
                    <h4 style="text-align: center;">{{ session('message') }}</h4>
                </div>
            @endif
            <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User Name</th>
                            <th>Schedule Date</th>
                            <th>Priority</th>
                            <th>Issue Code</th>
                            <th>User Company</th>
                            <th>User Department</th>
                            <th>User Designation</th>
                            <th>User Phone number</th>
                            <th>Working Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $schedule->issue->employee->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($schedule->schedule_date)->format('d M Y') }}</td>
                                <td>
                                    @if ($schedule->priority === 'high')
                                        <span class="badge bg-primary">{{ $schedule->priority }}</span>
                                    @elseif ($schedule->priority === 'medium')
                                        <span class="badge bg-success">{{ $schedule->priority }}</span>
                                    @elseif ($schedule->priority === 'low')
                                        <span class="badge bg-info">{{ $schedule->priority }}</span>
                                    @endif
                                </td>
                                <td>{{ $schedule->issue->issue_code }}</td>
                                <td>{{ $schedule->issue->employee->company->company_name }}</td>
                                <td>{{ $schedule->issue->employee->department->department_name }}</td>
                                <td>{{ $schedule->issue->employee->designation }}</td>
                                <td>{{ $schedule->issue->employee->phone }}</td>
                                <td>
                                    @if ($schedule->issue->issue_status === 1)
                                        <span class="label label-rounded label-primary">Working</span>
                                    @elseif ($schedule->issue->issue_status == 2)
                                        <span class="label label-rounded label-primary">Complete</span>
                                    @else
                                        <span class="label label-rounded label-primary">pending</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
