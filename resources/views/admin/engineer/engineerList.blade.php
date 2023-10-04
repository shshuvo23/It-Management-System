@extends('master.master')
@section('title')
    Engineer
@endsection

@section('page-title')
    Engineer List
@endsection

@section('body')
    <!-- table responsive -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Engineer List </h4>
            <div class="table-responsive m-t-40">
                <table id="config-table" class="table display table-striped border no-wrap">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>User Name</th>
                            <th>E-mail</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($engineers as $engineer)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $engineer->name }}</td>
                                <td>{{ $engineer->email }}</td>
                                <td>
                                    @if ($engineer->usertype == 1)
                                        <a href="" class="badge rounded-pill bg-info">Engineer</a>
                                    @elseif ($engineer->usertype == 2)
                                        <a href="" class="badge rounded-pill bg-info">Engineer Inactive</a>
                                    @else
                                        <a href="" class="badge rounded-pill bg-info">Admin</a>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-outline-primary waves-effect waves-light" type="button"><span
                                            class="btn-label"><i class=""></i></span>
                                        <a href="{{ route('engineer.status', ['id' => $engineer->id]) }}">Change Status</a>
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
