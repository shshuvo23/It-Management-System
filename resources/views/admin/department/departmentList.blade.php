@extends('master.master')
@section('title')
    Department
@endsection

@section('page-title')
    Department List
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
            <h4 class="card-title"> Department List </h4>
            <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Department Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $department->department_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
