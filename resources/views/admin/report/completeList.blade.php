@extends('master.master')
@section('title')
    Report
@endsection

@section('page-title')
    Complete Report List
@endsection

@section('body')
    <!-- table responsive -->
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Complete Report List </h4>
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
                            <th>Report Code</th>
                            <th>working Status</th>
                            <th>Accessories Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $report->employee->name }}</td>
                                <td>{{ $report->issue_code }}</td>
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
                                    @if ($report->feedback->isNotEmpty())
                                        @if ($report->feedback->contains('status', 'Pending'))
                                            <a href="" class="badge rounded-pill bg-primary">Pending</a>
                                        @elseif ($report->feedback->contains('status', 'Rejected'))
                                            <a href="" class="badge rounded-pill bg-warning">Rejected</a>
                                        @else
                                            <a href="" class="badge rounded-pill bg-success">Approved</a>
                                        @endif
                                    @else
                                        <a href="" class="badge rounded-pill bg-info">NO accessories Used</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('report.detail', ['id' => $report->id]) }}"
                                        class="btn btn-primary">Report Details</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
