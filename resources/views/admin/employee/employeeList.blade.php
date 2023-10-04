@extends('master.master')
@section('title')
    Employee
@endsection

@section('page-title')
    Employee List
@endsection

@section('body')
    <!-- table responsive -->
    <div class="card">
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">
                    <h4 style="text-align: center;">{{ session('message') }}</h4>
                </div>
            @endif
            <h4 class="card-title">Employee List </h4>
            <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User Name</th>
                            <th>E-mail</th>
                            <th>Company</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Status</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->company->company_name }}</td>
                                <td>{{ $employee->department->department_name }}</td>
                                <td>{{ $employee->designation }}</td>
                                <td>
                                    @if ($employee->status == 1)
                                        <span class="label label-rounded label-primary">Active</span>
                                    @else
                                        <span class="label label-rounded label-warning">InActive</span>
                                    @endif
                                </td>
                                <td>{{ $employee->phone }}</td>
                                <td>


                                    <button class="btn btn-outline-primary waves-effect waves-light" type="button"><span
                                            class="btn-label"></span>
                                        <a href="{{ route('employee.status', ['id' => $employee->id]) }}">Active</a>
                                    </button>
                                    {{-- <button class="btn btn-outline-danger waves-effect waves-light" type="button"><span
                                            class="btn-label"><i class="fa fa-heart"></i></span>Inactive</button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
