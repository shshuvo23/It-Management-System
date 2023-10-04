@extends('employee.master')

@section('title')
    Issue
@endsection

@section('page-title')
    Issue Add
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
                            <th>Problem Title</th>
                            <th>Report Code</th>
                            <th>Problem Details</th>
                            <th>Report Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($issues as $issue)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $issue->title->problem_title }}</td>
                                <td>{{ $issue->issue_code }}</td>
                                <td>{!! $issue->description !!}</td>
                                <td>
                                    @if ($issue->issue_status == 0)
                                        <a href="" class="badge rounded-pill bg-info">Pending</a>
                                    @elseif ($issue->issue_status == 1)
                                        <a href="" class="badge rounded-pill bg-info">Working</a>
                                    @else
                                        <a href="" class="badge rounded-pill bg-info">Complete</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($issue->issue_status == 1)
                                        <a href="{{ route('accessory.apporved', ['id' => $issue->id]) }}"
                                            class="btn waves-effect waves-light btn-outline-info">Service
                                            Details</a>
                                    @elseif ($issue->issue_status == 2)
                                        <h3><span class="label label-success">Completed</span></h3>
                                        @if ($issue->feedback->isNotEmpty())
                                            @if ($issue->feedback->contains('status', 'Rejected'))
                                                <a href="" class="badge rounded-pill bg-primary">Rejected Accessory</a>
                                            @else
                                                <a href="" class="badge rounded-pill bg-success">Approved Accessory</a>
                                            @endif
                                        @else
                                            <a href="" class="badge rounded-pill bg-info">NO accessories Used</a>
                                        @endif
                                    @else
                                        <h3><span class="label label-primary">Still Pending</span></h3>
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
