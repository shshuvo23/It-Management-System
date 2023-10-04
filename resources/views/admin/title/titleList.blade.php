@extends('master.master')
@section('title')
    Title
@endsection

@section('page-title')
Title List
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
            <h4 class="card-title"> Title List </h4>
            <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Issue Title </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($titles as $title)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $title->problem_title }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
