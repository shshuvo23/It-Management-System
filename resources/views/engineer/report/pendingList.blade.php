@extends('master.master')
@section('title')
    Report
@endsection

@section('page-title')
    pending Task List
@endsection

@section('body')
    <!-- table responsive -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Pending List </h4>
            <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User Name</th>
                            <th>Problem Title</th>
                            <th>Report Code</th>
                            <th>Problem Details</th>
                            <th>User Company</th>
                            <th>User Department</th>
                            <th>User Designation</th>
                            <th>User Phone number</th>
                            <th>Report Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendings as $pending)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pending->employee->name }}</td>
                                <td>{{ $pending->title->problem_title }}</td>
                                <td>{{ $pending->issue_code }}</td>
                                <td>{!! $pending->description !!}</td>
                                <td>{{ $pending->employee->company->company_name }}</td>
                                <td>{{ $pending->employee->department->department_name }}</td>
                                <td>{{ $pending->employee->designation }}</td>
                                <td>{{ $pending->employee->phone }}</td>
                                <td>
                                    @if ($pending->issue_status == 0)
                                        <a href="" class="badge rounded-pill bg-info">Pending</a>
                                    @elseif ($pending->issue_status == 1)
                                        <a href="" class="badge rounded-pill bg-info">Working</a>
                                    @else
                                        <a href="" class="badge rounded-pill bg-info">Complete</a>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-outline-primary" type="button">
                                        <a href="{{route('status.working', ['id' => $pending->id])}}">Change status for working</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
