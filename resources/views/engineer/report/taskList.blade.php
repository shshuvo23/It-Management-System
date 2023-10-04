@extends('master.master')
@section('title')
    Report
@endsection

@section('page-title')
    Task List
@endsection

@section('body')
    <!-- table responsive -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Task List </h4>
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
                            <th>Accessories Status</th>
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
                                        <a href="{{ route('working.feedback', ['id' => $schedule->issue->id]) }}"
                                            class="badge rounded-pill bg-info">Add Accessories</a>
                                    @else
                                        @if ($schedule->issue->issue_status == 0)
                                            <span class="label label-rounded label-primary">pending</span>
                                        @elseif ($schedule->issue->issue_status == 2)
                                            <span class="label label-rounded label-success">Completed</span>
                                        @else
                                            <span class="label label-rounded label-info">Working</span>
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if ($schedule->feedback->isNotEmpty())
                                        @if ($schedule->feedback->contains('status', 'Approved'))
                                            <button type="button"
                                                class="btn waves-effect waves-light btn-rounded btn-outline-warning">Approved</button>
                                        @elseif ($schedule->feedback->contains('status', 'Rejected'))
                                            <button type="button"
                                                class="btn waves-effect waves-light btn-rounded btn-outline-danger">Rejected</button>
                                        @else
                                            <button type="button"
                                                class="btn waves-effect waves-light btn-rounded btn-outline-primary">Pending</button>
                                        @endif
                                    @else
                                        <a href="" class="badge rounded-pill bg-info">NO accessories Used</a>
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
